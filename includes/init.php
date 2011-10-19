<?php

 /**
  * Include the controller class.
  */
 include __SITE_PATH . '/includes/' . 'controller_base.class.php';

 /**
  * Include the registry class.
  */
 include __SITE_PATH . '/includes/' . 'registry.class.php';

 /**
  * Include the router class.
  */
 include __SITE_PATH . '/includes/' . 'router.class.php';

 /**
  * Include the template class.
  */
 include __SITE_PATH . '/includes/' . 'template.class.php';

/**
 * Load model classes.
 */
function __autoload($pClassName) {

    /* Assume that the class is defined within the model directory. */
    $fileName = __SITE_PATH . '/model/' . strtolower($pClassName) . '.class.php';

    /* Return false if the file does not exist. */
    if (file_exists($fileName) == false)
    {
        return false;
    }

    /* The file exists. Include it. */
    include ($fileName);
}

/* Instantiate a new registry. */
 $registry = new registry;

?>
