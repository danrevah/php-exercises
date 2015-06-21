<?php
require('index.php');

function ret ($value)
{
    return $value;
}

class OnceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Should test the basic usage
     */
    public function testOnceBasic()
    {
        $count = 0;
        $value = function ($ret) use (&$count) {
            ++$count;
            return $ret;
        };

        $init = once($value);
        $this->assertEquals($init(1), 1);
        $this->assertEquals($init(2), 1);
        $this->assertEquals($init(3), 1);
        $this->assertEquals($count, 1);
    }

    public function testWithFuncAsString()
    {
        $init = once('ret');
        $this->assertEquals($init(1), 1);
        $this->assertEquals($init(2), 1);
        $this->assertEquals($init(3), 1);
    }
}