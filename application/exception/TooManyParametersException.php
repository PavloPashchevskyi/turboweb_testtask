<?php

namespace application\exception;

class TooManyParametersException extends CommandLineParametersException
{
    public function __construct()
    {
        parent::__construct("too many parameters transferred.", 12, null);
    }
}