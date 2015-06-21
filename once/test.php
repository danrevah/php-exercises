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
        $value = function ($ret) {
            return $ret;
        };

        $init = once($value);
        $this->assertEquals($init(1), 1);
        $this->assertEquals($init(2), 1);
        $this->assertEquals($init(3), 1);
    }

    public function testWithFuncAsString()
    {
        $init = once('ret');
        $this->assertEquals($init(1), 1);
        $this->assertEquals($init(2), 1);
        $this->assertEquals($init(3), 1);
    }
}