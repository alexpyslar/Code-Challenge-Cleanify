<?php
namespace app\smarty;

include_once "app/smarty/Smarty.class.php";
use app\model\FormFieldsModel;

class SmartyMain
{

    /*
     * Smarty instance variable
     */
    private $smarty;

    /**
     * Database instance variable
     */
    private $db_resource;

    /**
     * Data from Database table
     */
    private $data;

    /**
     * Headers for email sending
     */
    private $headers;

    /**
     * Constructor that initialises SmartyMain
     */
    public function __construct()
    {
        // create Smarty instance
        $this->smarty = new \Smarty();

        // create db model instance
        $this->db_resource = new FormFieldsModel();

        // pull data from db for the form fields
        $this->data = $this->db_resource->loadFieldsData();

        // setup configs for the Smarty instance
        $this->smarty->template_dir = 'app/views/';
        $this->smarty->addTemplateDir('app/layouts/');
        $this->smarty->compile_dir = 'app/smarty/templates_c/';
        $this->smarty->cache_dir = 'app/smarty/cache/';
        $this->smarty->config_dir = 'app/smarty/config/';

        // setup headers for email message
        $this->headers = 'MIME-Version: 1.0' . "\r\n";
        $this->headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    }

    /**
     * Renders exact layout with exact template
     *
     * @param $template
     * @param string $layout
     * @param bool $validation
     */
    public function render($template, $validation = false, $layout = 'page')
    {
        // check which template need to be rendered
        if ($template == 'form') {
            $this->smarty->assign('form_rows', $this->data);
            if ($validation) {
                // validation data
                $this->smarty->assign('validation', $validation);
                // all post data
                $this->smarty->assign('validation_return', $_POST);
            }
        }

        // check which template need to be rendered
        if ($template == 'success') {
            // Customer first name
            $this->smarty->assign('person_firstname', $_POST['first_name']);
            // Customer last name
            $this->smarty->assign('person_lastname', $_POST['last_name']);
        }

        // fetch template and assign to $content
        $content = $this->smarty->fetch($template . '.tpl');
        // assign $content for the layout
        $this->smarty->assign('content', $content);
        // display everything
        $this->smarty->display($layout . '.tpl');
    }

    /**
     * Function builds template for the email and then sends it
     */
    public function sendCustomMail()
    {
        // get data from POST and assign to the email template
        $this->smarty->assign('email_rows', $_POST);
        // merge it with layout
        $content = $this->smarty->fetch('mail_template.tpl');
        // send mail
        if (!mail($_POST['email'], 'Form Submit From Test Form', $content, $this->headers)) {
            // in case any errors appear
            file_put_contents('app/logs/log.txt', error_get_last());
        }
    }
}