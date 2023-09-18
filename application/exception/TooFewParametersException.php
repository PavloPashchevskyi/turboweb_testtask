<?php

namespace application\exception;

class TooFewParametersException extends CommandLineParametersException
{
    public function __construct()
    {
        parent::__construct("too few parameters transferred.", 11, null);
    }
}