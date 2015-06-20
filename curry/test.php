<?php
require('curry.php');

class CurryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Should test basic usage
     */
    public function testCurryBasic()
    {
        $add = function ($a, $b) {
            return $a + $b;
        };
        $curry = Curry($add);
        $first = $curry(1);
        $this->assertEquals(3, $first(2));
    }

    /**
     * Testing with single or no arg
     */
    public function testCurryManipulateArgs()
    {
        $output = function ($a) {
            return $a;
        };
        $void = function () {
            return 'foo';
        };

        $curry = Curry($output);
        $curryVoid = Curry($void);

        // Test with single argument
        $this->assertEquals($curry(1), 1);
        // Test with no arguments
        $this->assertEquals($curryVoid(), 'foo');
    }

    /**
     * Testing with big amount of arguments
     */
    public function testWithMultipleArguments()
    {
        $adder = function($a, $b, $c, $d) {
            return $a + $b + $c + $d;
        };

        $curry = Curry($adder);
        $firstOne = $curry(1);
        $firstTwo = $firstOne(2);
        $firstThree = $firstTwo(3);

        $firstFour = $firstThree(4);

        $this->assertEquals($firstFour, 10);
    }
}