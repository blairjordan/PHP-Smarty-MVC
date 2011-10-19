<?php

require_once('/usr/share/php/smarty/Smarty.class.php');

Class Template {

    /**
     * Default constructor.
     *
     * @access public
     * @return void
     */
    function __construct($registry) {

        /* Store the registry locally. */
        $this->registry = $registry;

        /* Instantiate template engine. */
        $this->smarty = new Smarty();

        /* Set template engine properties. */
        $this->smarty->template_dir = __SITE_PATH . '/smarty/templates';
        $this->smarty->compile_dir = __SITE_PATH . '/smarty/templates_c';
        $this->smarty->cache_dir = __SITE_PATH . '/smarty/cache';
        $this->smarty->config_dir = __SITE_PATH . '/smarty/configs';
    }

    /*
     * The template registry.
     * 
     * @access private
     */
    private $registry;

    /**
     * Array of template variables.
     *
     * @access private
     */
    private $vars = array();

    /**
     * The smarty template engine engine.
     */
    private $smarty;

    /**
     * Set template variables.
     *
     * @param string $index
     * @param mixed $value
     * @return void
     */
    public function __set($index, $value) {
        $this->vars[$index] = $value;
    }

    function show($name) {

        $templateName = $name . '.tpl';

        /* Assign all the control variables to the engine. */
        foreach ($this->vars as $templateVariable)
        {
            $this->smarty->assign($templateVariable["name"], $templateVariable["value"]);
        }

        /* Display the page using template. */
        $this->smarty->display($templateName);
    }
}
?>
