<?php

Class IndexController Extends baseController {

    public function index() {

        /* Instantiate the template engine. */
        $this->registry->template = new Template($this->registry);

        /* Set a test variable. */
        $this->registry->template->testVar = array( "name" => "test",
                                                    "value" => "test value");
        /* Load the index template. */
        $this->registry->template->show('index');
    }
}

?>
