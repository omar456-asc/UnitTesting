<?php

use PHPUnit\Framework\TestCase;



require('./src/Calculator.php');
class CalculatorTest extends TestCase
{

    public function test_factorial()
    {
        $clac = new Calculator;
        // $result = $clac->factorial(5);

        $this->assertEquals(120, $clac->factorial(5));
        $this->assertEquals(1, $clac->factorial(1));
        $this->assertEquals(2, $clac->factorial(2));
        $this->assertEquals(6, $clac->factorial(3));
        $this->assertEquals(24, $clac->factorial(4));


        $this->assertEquals(1, $clac->factorial(0));

        $this->assertNull($clac->factorial('abc'));
        $this->assertNull($clac->factorial(-3));
        $this->assertNull($clac->factorial(1.5));
        $this->assertNull($clac->factorial(NULL));
    }
}
