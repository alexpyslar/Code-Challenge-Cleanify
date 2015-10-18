<?php
namespace app;

use app\smarty\SmartyMain;
use app\validators\MainValidator;

class App
{

    /**
     * Main enter point, where everything is performed
     */
    public function run()
    {
        // create smarty helper class object
        $smarty_object = new SmartyMain();
        // create validator helper class object
        $validator_object = new MainValidator();

        // Check if POST is empty
        if (empty($_POST)) {
            // view form
            $smarty_object->render('form');
        } else {
            if (count($validation = $validator_object->validateFields($_POST)) > 0) {
                // if validation returned at least one mistake, then get back to the form
                $smarty_object->render('form', $validation);
            } else {
                // first send email
                $smarty_object->sendCustomMail();
                // then redirect to the success page with confirmation text
                $smarty_object->render('success');
            }
        }
    }

}