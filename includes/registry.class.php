<?php

Class Registry {

    /**
     * Array of variables.
     *
     * @access private
     */
    private $vars = array();

    /**
     * Set undefined variables.
     * @param string $index The index of the registry variable.
     * @param mixed $value The value to assign to the variable.
     *
     * @return void
     *
     */
    public function __set($index, $value) {
        $this->vars[$index] = $value;
    }

    /**
     * Get a variable from the registry.
     *
     * @param mixed $index The index of the registry variable.
     * @return mixed
     */
    public function &__get($index) {
        return $this->vars[$index];
    }
    
}
?>
