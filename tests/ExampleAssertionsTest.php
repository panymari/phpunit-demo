<?php

use PHPUnit\Framework\TestCase;

class ExampleAssertionsTest extends TestCase
{
    public function testThatStringMatch()
    {
        $string1 = "test1";
        $string2 = "test1";

        $this->assertSame($string1, $string2);
    }
    public function testThatNumbersAddUp()
    {
        $this->assertEquals(10, 5+5);
    }
}