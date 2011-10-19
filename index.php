<?php

/**
 * Switch on error reporting.
 */
error_reporting(E_ALL);

/**
 * Define the site path constant.
 */
define ('__SITE_PATH', realpath(dirname(__FILE__)));

/**
 * Include the initialization.
 */
include 'includes/init.php';

/**
 * Load the router class.
 */
$registry->router = new router($registry);

/**
 * Set the path to the controllers directory.
 */
$registry->router->setPath (__SITE_PATH . '/control');

/**
 * Use the router to handle the request.
 */
$registry->router->loader();

?>