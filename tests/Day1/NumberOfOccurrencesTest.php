<?php

namespace Tests\Day1;

use PHPUnit\Framework\TestCase;
use Day1\NumberOfOccurrences\NumberOfOccurrences;

class NumberOfOccurrencesTest extends TestCase{
    private $number;

    public function setUp()
    {
        $this->number = new NumberOfOccurrences();
    }

    public function test_number_of_occurrences_1(){
        $this->assertEquals(1, $this->number->number(1,1));
    }

    public function test_number_of_occurrences_2(){
        $this->assertEquals(2, $this->number->number(1,11));
    }

    public function test_number_of_occurrences_4(){
        $this->assertEquals(4, $this->number->number(5, 442158755745));
    }

    public function test_number_of_occurrences_0(){
        $this->assertEquals(0, $this->number->number(9, 442158755745));
    }

    public function test_number_of_occurrences_string(){
        $this->assertEquals(0, $this->number->number(9, "hiut"));
    }

    public function test_number_of_occurrences_null(){
        $this->assertEquals(0, $this->number->number(9, " "));
    }

}


