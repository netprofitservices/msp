<?php

// Define path to application directory
defined('APPLICATION_PATH')
    || define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/../application'));

// Define application environment
defined('APPLICATION_ENV')
    || define('APPLICATION_ENV', (getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'development'));

// Ensure library/ is on include_path
set_include_path(implode(PATH_SEPARATOR, array(
    realpath(APPLICATION_PATH . '/../library'),
    realpath(APPLICATION_PATH),
    get_include_path(),
)));

/** Zend_Application */
require_once 'Zend/Application.php';

// Create application, bootstrap, and run
$application = new Zend_Application(
    APPLICATION_ENV,
    APPLICATION_PATH . '/configs/application.ini'
);
$application->bootstrap()
            ->run();




function pr($var, $callee = null) {
	$id = uniqid();
	if (empty($callee))	list($callee) = debug_backtrace();

    echo '<div style="font-family:Courier; font-size: 10px; margin: 20px 20px 0px 20px; background: #333; color: #fff; padding: 10px"><a href="#" onclick="document.getElementById(\'pre_' . $id . '\').style.display = \'none\'; return false;" style="color:white; text-decoration: none">[-]</a> ' . $callee['file'].' @ line: '.$callee['line'] . '</div>';
	echo '<pre id="pre_' . $id . '" style="margin:0px 20px 20px 20px;padding:20px;border:1px solid #aaa; text-align: left">';
	print_r($var);
	echo '</pre>';
}

function prd($var) {
	list($callee) = debug_backtrace();
	pr($var, $callee);
	die;
}
