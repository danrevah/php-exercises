<?php
require('curry.php');

class CurryTest extends \PHPUnit_Framework_TestCase
{
//    /**
//     * Should test basic usage
//     */
//    public function testCurryBasic()
//    {
//        $add = function ($a, $b) {
//            return $a + $b;
//        };
//        $hold = Curry($add, 2);
//        // Test with two arguments directly
//        $this->assertEquals(3, Curry($add,1, 2));
//        // Test when it's needed to hold state
//        $this->assertEquals(5, $hold(3));
//    }
//
//    /**
//     * Testing with single or no arg
//     */
//    public function testCurryManipulateArgs()
//    {
//        $output = function ($a) {
//            return $a;
//        };
//        $void = function () {
//            return 'foo';
//        };
//
//        // Test with single argument
//        $this->assertEquals(Curry($output, 1), 1);
//        // Test with no arguments
//        $this->assertEquals(Curry($void), 'foo');
//    }

    /**
     * Testing with big amount of arguments
     */
    public function testWithMultipleArguments()
    {
        $adder = function($a, $b, $c, $d) {
            return $a + $b + $c + $d;
        };

        $firstTwo = Curry($adder, 1, 2);
        $this->assertEquals($firstTwo(3, 4), 10);

        $firstThree = $firstTwo(3);
//        print_r($firstThree);
        $this->assertEquals($firstThree(14), 20);
    }
}