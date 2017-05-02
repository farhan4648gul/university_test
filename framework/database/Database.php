<?php
/**
 * Created by PhpStorm.
 * User: farhan.gul
 * Date: 5/2/17
 * Time: 6:34 PM
 */

namespace framework\base;


class Database
{
    private static $connection;
    private static $current_query;

    private function __constructor(){

        $config = new \Doctrine\DBAL\Configuration();
        $connectionParams = array(
            'dbname' => DB_NAME,
            'user' => DB_USER,
            'password' => DB_PASSWORD,
            'host' => DB_HOST,
            'driver' => DB_DRIVER,
        );
        try {
            $this->connection = \Doctrine\DBAL\DriverManager::getConnection($connectionParams, $config);
        }
        catch (Exception $e) {
            echo "Error in Database Connection:: ".$e;
            // TODO: catch error and show appropriate msg
        }
    }

    private function __clone()
    {
        // just a declaration to avoid cloning
    }

    public static function getInstance(){

        if (!self::$connection) {
            return $connection = new self();
        }
        else {
            return self::$connection;
        }
    }

}