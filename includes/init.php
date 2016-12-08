<?php 
// INITIALIZING All CLASSES

// Includes controller Class
include __SITE_PATH '/application/'.'controller_base.class.php';

// Includes Registry Class
include __SITE_PATH '/application/'.'registry.class.php';

// Includes Router Class
include __SITE_PATH '/application/'.'router.class.php';

// Include Templates Class
include __SITE_PATH '/application/'.'template.class.php';


// Auotoloading All Model Classes
function __autoload($class_name){
	/*
	* Set To Lower Case
	*/
	$filename = strtolower($class_name) . '.class.php';
	/* defining Model  Path
	*/
	$file = __SITE_PATH . '/model/' . $filename ;

	if (file_exists($file) == false){

		return false;
	}

	include ($file);
}

// Add New Registry Object

$registry = new registry;

//END OF CODE
?>