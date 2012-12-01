<?php

class Interview_TestCase extends PHPUnit_Framework_TestCase {

    public function setUp()
    {
        global $application;
        $this->bootstrap = $application;
        parent::setUp();
    }

}