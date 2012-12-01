<?php

class Interview_Exception_Validate extends Exception
{
    public function __construct()
    {
        parent::__construct("Validation failed");
    }
}