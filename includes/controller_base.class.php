<?php

Abstract Class baseController {

    function __construct($registry) {
        $this->registry = $registry;
    }

    /*
     * Registry object.
     */
    protected $registry;

    /**
     * All controllers must contain an index method.
     */
    abstract function index();
    
}

?>
