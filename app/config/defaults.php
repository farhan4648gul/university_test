<?php
/**
 * Created by PhpStorm.
 * User: farhan.gul
 * Date: 5/2/17
 * Time: 4:38 PM
 */

define('APP_NAME', 'University Management System',true);
define('APP_VERSION', '0.0.1', true);

// Default Directories
define('APP_VIEWS', 'app/view', true);
define('APP_CONTROLLERS', 'app/controller', true);
define('APP_MODELS', 'app/model', true);
define('APP_ROUTES', 'app/routes', true);
define('APP_ASSETS', 'assets/public', true);
define('ADMIN_ASSETS', 'assets/admin', true);
define('APP_ROOT', realpath('.'));


// Database access
define('DB_USER', 'root');
define('DB_PASSWORD', '1233');
define('DB_HOST', 'localhost');
define('DB_PORT', '80');
define('DB_DRIVER', 'mysqli');
define('DB_NAME', 'university1');

// Set development environment
define('DEV_ENV', true);

