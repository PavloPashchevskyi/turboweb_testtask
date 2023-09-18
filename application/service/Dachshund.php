<?php

namespace application\service;

use application\service\api\Dog;

class Dachshund implements Dog
{
    function sound()
    {
        echo "Whine!\n";
    }

    function hunt()
    {
        echo "Oh, we are going to hunt! It`s good!\n";
    }

}