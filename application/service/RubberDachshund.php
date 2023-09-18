<?php

namespace application\service;

use application\service\api\Shoutable;
use application\service\api\Toy;

class RubberDachshund implements Toy, Shoutable
{
    function sound()
    {
        echo "Beep!\n";
    }

}