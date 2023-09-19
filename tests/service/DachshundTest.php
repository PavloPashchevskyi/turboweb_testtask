<?php

namespace tests\service;

use application\service\Dachshund;
use PHPUnit\Framework\TestCase;

class DachshundTest extends TestCase
{
    private $objectToTest;

    public function testSound() {
        $this->objectToTest->sound();
        $this->expectOutputString("Whine!\n");
    }

    public function testHunt() {
        $this->objectToTest->hunt();
        $this->expectOutputString("Oh, we are going to hunt! It`s good!\n");
    }

    protected function setUp()
    {
        parent::setUp(); // TODO: Change the autogenerated stub
        $this->objectToTest = new Dachshund();
    }
}