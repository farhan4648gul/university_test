<?php
/**
 * Created by PhpStorm.
 * User: farhan.gul
 * Date: 5/2/17
 * Time: 4:05 PM
 */

use Doctrine\Common\ClassLoader;

require './vendor/doctrine/common/lib/Doctrine/Common/ClassLoader.php';

$classLoader = new ClassLoader('Doctrine', '/path/to/doctrine');
$classLoader->register();

$config = new \Doctrine\DBAL\Configuration();
$connectionParams = array(
    'dbname' => 'university_1',
    'user' => 'root',
    'password' => '123',
    'host' => '127.0.0.1',
    'driver' => 'mysqli',
);
$conn = \Doctrine\DBAL\DriverManager::getConnection($connectionParams, $config);
$platform = $conn->getDatabasePlatform();

require 'app/config/db_schema.php';
$queries = $schema->toSql($platform);
/*foreach( $queries as $q) {
    echo $q."<br>";
}*/


