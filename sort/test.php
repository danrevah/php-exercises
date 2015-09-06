<?php
require('index.php');

class SortTest extends \PHPUnit_Framework_TestCase
{
    public function testSort()
    {
        $arr = [5, 1, 3, 2, 4];
        sortArray($arr);
        $this->assertTrue($arr === [1, 2, 3, 4, 5]);
    }

    public function testLongSort()
    {
        // Make it faster than n^2
        $arr = [];
        for ($i = 0; $i < 10000; ++$i) {
            $arr[] = rand(1, 10000);
        }

        sortArray($arr);
        $lastNumber = $arr[0];

        for ($i = 1; $i < 10000; ++$i) {
            if ($lastNumber > $arr[$i]) {
                $this->fail('Array is not sorted!');
            }

            $lastNumber = $arr[$i];
        }
    }

}