<?php

namespace app\model\resource;

use PDO;

class DbConnector
{

    /**
     * Database connection configuration
     * @var string
     */
    protected static $dsn = 'mysql:dbname=test_db;host=127.0.0.1;charset=utf8';

    /**
     * Database username
     * @var string
     */
    protected static $username = 'root';

    /**
     * Database password
     * @var string
     */
    protected static $password = '';

    /**
     * @var PDO instance
     */
    protected static $connection;

    /**
     * Data for that returns
     */
    protected static $data;

    /**
     * Constructor
     */
    public function __construct()
    {
        // setup database connection
        self::$connection = new PDO(self::$dsn, self::$username, self::$password, array());
    }

    /**
     * Pull all "fields" table data
     * @return $this
     * @internal param $id
     */
    public function loadAllFieldsData()
    {
        // prepare request
        $sth = self::$connection->prepare('SELECT * FROM fields ORDER BY field_order ASC');
        // run it
        $sth->execute();

        // check if not empty or error
        if (self::$data = $sth->fetchAll(PDO::FETCH_ASSOC)) {
            // return answer
            return self::$data;
        }

        return false;
    }

    /**
     * Pull only field's names and validators
     * @return array
     */
    public function loadFieldsRegexps()
    {
        // prepare request
        $sth = self::$connection->prepare('SELECT field_name, validator FROM fields ORDER BY field_order ASC');
        // run it
        $sth->execute();

        // check if not empty or error
        if ($result = $sth->fetchAll(PDO::FETCH_ASSOC)) {
            // go with foreach create needed structure
            foreach ($result as $field => $val) {
                self::$data[$val['field_name']] = $val['validator'];
            }

            // return answer
            return self::$data;
        }

        return false;
    }
}