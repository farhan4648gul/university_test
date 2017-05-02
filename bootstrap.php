<?php
/**
 * Created by PhpStorm.
 * User: farhan.gul
 * Date: 5/2/17
 * Time: 4:03 PM
 */

require 'vendor/autoload.php';
require 'app/config/defaults.php';
require 'framework/database/doctrine.php';
require 'app/routes.php';

//Process Request

$db = \framework\base\Database::getInstance();

print_r($a); exit;
print_r(get_declared_classes());
$router = new \framework\base\Router($routes);
$router->executeRoute($_SERVER['REQUEST_URI']);

if ( isset($_SERVER) && isset($_SERVER['REQUEST_URI'])) {
    // TODO: place router inside if
}
else
    die('No Browser Request Found::');