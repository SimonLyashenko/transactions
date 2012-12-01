<?php
// Define path to application directory
defined('APPLICATION_PATH')
    || define('APPLICATION_PATH', getenv('APPLICATION_PATH').'/application');

// Define application environment
define('APPLICATION_ENV', 'interview');

// Define application config path
define('APPCONFIG_FILE_NAME', APPLICATION_PATH . '/configs/application.ini');


// Ensure library/ is on include_path
set_include_path(implode(PATH_SEPARATOR, array(
    realpath(APPLICATION_PATH . '/../library'),
    get_include_path(),
)));

require_once 'Zend/Loader/Autoloader.php';
Zend_Loader_Autoloader::getInstance();

/** Zend_Application */
require_once 'Zend/Application.php';
// Create application, bootstrap, and run
$application = new Zend_Application(APPLICATION_ENV, APPCONFIG_FILE_NAME);

//$application->bootstrap()->run();
$application->bootstrap();
