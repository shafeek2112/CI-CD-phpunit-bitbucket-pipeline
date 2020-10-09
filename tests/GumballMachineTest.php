<?php

// use the following namespace
use PHPUnit\Framework\TestCase;

require 'GumballMachine.php';

class GumballMachineTest extends TestCase
{
    public $gumballMachineInstance;

    public function setUp(): void
    {
        $this->gumballMachineInstance = new GumballMachine();
    }

    public function testIfWheelWorks(){
    	// Suppose we have 100 gumballs...
    	$this->gumballMachineInstance->setGumballs(100);

    	// ... And we turn the wheel once...
    	$this->gumballMachineInstance->turnWheel();

    	// ... we should now have 99 gumballs remaining in the machine right?
    	$this->assertEquals(99, $this->gumballMachineInstance->getGumballs()); 
    }
}