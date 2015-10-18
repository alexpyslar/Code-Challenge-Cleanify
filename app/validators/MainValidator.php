<?php

namespace app\validators;

use app\model\FormFieldsModel;

class MainValidator
{
    /**
     * List of fields which are invalid
     *
     * @var array
     */
    private $invalid_fields = [];

    /**
     * Regexps pulled from the DB, every associated with field
     *
     * @var array
     */
    private $regexps = [];

    /**
     * Validator constructor
     */
    public function __construct()
    {
        $model = new FormFieldsModel();
        $this->regexps = $model->loadRegexps();
    }

    /**
     * General validation loop,
     * going through all POST data and check for validation
     *
     * @param $input_data
     * @return array
     */
    public function validateFields($input_data)
    {
        // need to check if received $input_data is array and isn't empty
        if (is_array($input_data) && count($input_data)) {
            // if everything ok, go through the foreach loop
            foreach ($input_data as $key => $value) {
                // call validation function
                $this->validateOneField($key, $value);
            }
        }

        // return array of invalid fields
        return $this->invalid_fields;
    }

    /**
     * Function that validates every single field
     *
     * @param $field_name
     * @param $field_value
     * @internal param $name
     */
    private function validateOneField($field_name, $field_value)
    {
        // check if current $field_value is valid
        if ($field_value != '') {
            if (!preg_match($this->regexps[$field_name], $field_value)) {
                // if not valid, add this field to the $invalid_fields array
                $this->invalid_fields[$field_name] = "Enter valid " . $field_name;
            }
        }
    }

}
