<?php

namespace application\service\api;

interface Dog extends Animal, Shoutable
{
    function sound();

    function hunt();
}