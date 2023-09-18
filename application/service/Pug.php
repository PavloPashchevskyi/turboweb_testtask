<?php

namespace application\service;

use application\service\api\Dog;

class Pug implements Dog
{
    function sound()
    {
        echo "Ruff!\n";
    }

    function hunt()
    {
        echo "O-o-oh! I don`t want to hunt! It is very difficult for me!\n";
    }

}