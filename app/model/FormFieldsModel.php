<?php
namespace app\model;

use app\model\resource\DbConnector;

class FormFieldsModel
{

    /**
     * @var DbConnector instance variable
     */
    private $db_connector_object;

    /**
     * Constructor
     */
    public function __construct()
    {
        // create DbConnector instance
        $this->db_connector_object = new DbConnector();
    }

    /**
     * Get all data from fields table
     * @return array
     */
    public function loadFieldsData()
    {
        return $this->db_connector_object->loadAllFieldsData();
    }

    /**
     * Get only needed data from fields table
     * @return array
     */
    public function loadRegexps()
    {
        return $this->db_connector_object->loadFieldsRegexps();
    }

}