<?php

namespace application\exception;

class ClassNotFoundException extends \Exception
{
    public function __construct($fullName = "")
    {
        $message = "Class \"".$fullName."\" has not been found!";
        parent::__construct($message, 30, null);
    }
}