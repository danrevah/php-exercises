<?php
require('index.php');

class BasicCalculatorTest extends \PHPUnit_Framework_TestCase
{

    public function testBasicCalculations()
    {
        // Can contain only '+', '-', '(', ')', spaces, and integers
        $this->assertEquals(calc(' 1 + 1 '), 2);
        $this->assertEquals(calc('9-5 + 2'), 6);

    }

    public function testMultiDigit()
    {
        // Accepting integers and not only digits
        $this->assertEquals(calc('100 - 5'), 95);
    }

    public function testComplexCalculation()
    {
        // A bit more complex expressions
        $this->assertEquals(calc('((5+3+(1+2)-9)+1) + (9+1)'), 13);
    }
}