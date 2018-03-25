<?php

namespace Tests\Day1;

use Day1\SumOfNumber\Sum;
use PHPUnit\Framework\TestCase;

class SumOfNumberTest extends TestCase {

    private $sum;

    public function setUp(){
        $this->sum = new Sum();
    }

    public function test_sum_1(){
        $this->assertEquals("1", $this->sum->sumOfNumber(1));
    }

    public function test_sum_2(){
        $this->assertEquals("3", $this->sum->sumOfNumber(2));
    }

    public function test_sum_100(){
        $this->assertEquals("5050", $this->sum->sumOfNumber(100));
    }

    public function test_sum_string(){
        $this->assertEquals("Sorry, I can't calculate sum", $this->sum->sumOfNumber("greg"));
    }

    public function test_sum_null(){
        $this->assertEquals("Sorry, I can't calculate sum", $this->sum->sumOfNumber(" "));
    }

    public function test_sum_0(){
        $this->assertEquals("0", $this->sum->sumOfNumber(0));
    }

    public function test_sum_negativ_number(){
        $this->assertEquals("Sorry, I can't calculate sum", $this->sum->sumOfNumber(-3));
    }

    public function test_sum_negativ_float(){
        $this->assertEquals("Sorry, I can't calculate sum", $this->sum->sumOfNumber(1.2));
    }

}
