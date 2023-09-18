<?php

declare(strict_types=1);

namespace application\service;

use application\service\api\Dog;

class SibaInu implements Dog
{

    function sound()
    {
        echo "Woof!\n";
    }

    function hunt()
    {
        echo "Ye-e-es!!! We are going to hunt!\n";
    }
}