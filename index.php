<?php 
/** First Try and Learning about PHP MVC
*	Project : PHP MVC - LEARN HOW TO
*	CODE 	: MBEX
**/

/** Bellow Code to Set Error Reporting, 
*	Complete Reporting can be Read on : http://id1.php.net/manual/en/function.error-reporting.php
*	- Set Error Reporting for : All
**/
	error_reporting(E_ALL);

// DEFINING FILE PATH CONSTANT

	$site_path = realpath(dirname(__FILE__));
	define('__SITE_PATH_', $site_path);

// INCLUDING THE INITIALIZING PHP FILE

	include 'includes/init.php';

?>