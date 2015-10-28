<?php

/**
 * Created by PhpStorm.
 * User: vallabh
 * Date: 28/10/15
 * Time: 12:20 AM
 */
class StackTestTest extends PHPUnit_Framework_TestCase
{
    public function testPushAndPop()
    {
        $stack = array();
        $this->assertEquals(0, count($stack));
        array_push($stack, 'Vallabh');
        array_push($stack, 'Kansagara');
        $this->assertEquals('Vallabh', $stack[0]);
        $this->assertEquals('Kansagara', $stack[1]);
        $this->assertEquals(2, count($stack));
        $this->assertEquals('Kansagara', array_pop($stack));
        $this->assertEquals('Vallabh', array_pop($stack));
        $this->assertEquals(0, count($stack));
        $this->assertNotEquals(null , $stack);
    }
}
