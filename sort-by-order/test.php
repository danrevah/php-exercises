<?php

function sortZeros()
{
    return [1,2,3,4,0,'0',5,6];
}

class SortByOrder extends \PHPUnit_Framework_TestCase {

    public function testZeros()
    {
        // basic
        $this->assertEquals(sortZeros([5,0,6,1,0,8]), [5,6,1,8,0,0]);
        // a bit more complex
        $this->assertEquals(sortZeros([5,6,'0',1,0,'0',8,'0']), [5,6,1,8,'0',0,'0','0']);
        // make sure won't order null, false
        $this->assertEquals(sortZeros([5,null,'0',1,0,'0',false,9,'0']), [5,null,1,false,9,'0',0,'0','0']);
    }
}