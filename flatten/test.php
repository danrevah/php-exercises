<?php
require('index.php');

class FlattenTest extends \PHPUnit_Framework_TestCase
{
    public function testFlattenDeep()
    {
        // Flattens a nested array (of any depth), if passing shallow flag,
        // the array will only be flattened a single
        $arr = [1,2,3,[4]];
        $this->assertEquals(flatten($arr), [1,2,3,4]);

        $arr = [1,2,3,[4, [5, [6, 7, 8]]]];
        $this->assertEquals(flatten($arr), [1,2,3,4,5,6,7,8]);
    }

    public function testShallowFlatten()
    {
        // Testing with shallow flag to a single level
        $arr = [1,2,3,[4]];
        $this->assertEquals(flatten($arr, true), [1,2,3,4]);

        $arr = [1,2,3,[4, [5]]];
        $this->assertEquals(flatten($arr, true), [1,2,3,4,[5]]);
    }
}