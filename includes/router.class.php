<?php

class router {

    function __construct($registry) {
        $this->registry = $registry;
    }
    
    /**
     * Registry member.
     */
     private $registry;

    /**
     * The path to the controller.
     */
    private $path;

    private $args = array();

    public $file;

    public $controller;

    public $action;

    /**
     * Set the controller directory path.
     * @param string $path The control file path.
     * @return void
     */
    function setPath($pPath) {

        /* Make sure that the path to the file exists. */
        if (is_dir($pPath) == false) {
            throw new Exception ('Invalid controller path: `' . $pPath . '`');
        }

        /* Set the path member. */
        $this->path = $pPath;
    }

    /**
     * Load the controller.
     * @access public
     * @return void
     */
    public function loader() {

	/* Set the controller route. */
        $this->getController();

	/* If the file is not there, throw an exception. */
        if (is_readable($this->file) == false) {
            throw new Exception ('No route to file exists.');
        }

	/* Include the controller. */
        include $this->file;

	/* Set the controller class name, assuming a file name suffix of 'Controller'. */
        $className =  $this->controller . 'Controller';

        /* Instantiate the controller class. */
        $controller = new $className($this->registry);

	/* Check if the action is available for calling. */
        if (is_callable(array($controller, $this->action)) == false) {
            $action = 'index';
        }
        else {
            $action = $this->action;
        }

	/**
         * Run the action.
         */
        $controller->$action();
    }

    /**
     * Set the controller member from URL.
     *
     * @access private
     * @return void
     */
    private function getController() {

        /* Get the route from the url. */
        $route = (empty($_GET['rt'])) ? '' : $_GET['rt'];

        /* If the controller is empty, default to the index page. */
        if (empty($route)) {
            $route = 'index';
        }
        else {
            /* Store the parts of the route in an array. */
            $parts = explode('/', $route);

            /* The first part should match the controller. */
            $this->controller = $parts[0];

            /* If there is another part to the URL, set this as an action. */
            if(isset( $parts[1]))
                $this->action = $parts[1];
        }

        /* Default to the index if the controller is empty. */
        if (empty($this->controller)) {
            $this->controller = 'index';
        }

        /* If the action does not exist, use the default action. */
        if (empty($this->action)) {
            $this->action = 'index';
        }

        /* Set the control file path. */
        $this->file = $this->path  . '/' .  'ctl_' . $this->controller . '.inc.php';
    }
}

?>
