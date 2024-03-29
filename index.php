<?php
require_once('./app/Config/Services.php');
require_once('./app/Config/Routes.php');
include 'common.php';

function __autoload($class_name)
{

	if (file_exists('./app/Classes/' . $class_name . '.php')) {
		require_once './app/Classes/' . $class_name . '.php';
	} else if (file_exists('./app/Controllers/' . $class_name . '.php')) {
		require_once './app/Controllers/' . $class_name . '.php';
	}
}