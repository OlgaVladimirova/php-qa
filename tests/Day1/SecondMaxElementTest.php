<?php

namespace Tests\Day1;

use PHPUnit\Framework\TestCase;
use Day1\SecondMaxElement\SecondMaxElement;

class SecondMaxElementTest extends TestCase{

    private $secondMaxElenemt;

    public function setUp()
    {
       $this->secondMaxElenemt = new SecondMaxElement();
    }

    public function test_get_second_element_for_1(){
        $this->assertEquals("There is no second maximum element", $this->secondMaxElenemt->getSecond([1]));
    }

    public function test_get_second_element_for_empty(){
        $this->assertEquals("There is no second maximum element", $this->secondMaxElenemt->getSecond([]));
    }

    public function test_get_second_element_dublicate(){
        $this->assertEquals("There is no second maximum element", $this->secondMaxElenemt->getSecond([1,1]));
    }

    public function test_get_second_element_3(){
        $this->assertEquals(3, $this->secondMaxElenemt->getSecond([4,2,1,3,0]));
    }

    public function test_get_second_element_float(){
        $this->assertEquals(1.1, $this->secondMaxElenemt->getSecond([0.4,2.9,1.1]));
    }

    public function test_get_second_element_negativ_number(){
        $this->assertEquals(-1, $this->secondMaxElenemt->getSecond([-4,2,-1,-7]));
    }

    public function test_get_second_element_string(){
        $this->assertEquals( "There is no second maximum element", $this->secondMaxElenemt->getSecond(["abn","lki","iueiuw","om"]));
    }

    public function test_get_second_element_mix(){
        $this->assertEquals( "There is no second maximum element", $this->secondMaxElenemt->getSecond([4,0.1,"iueiuw",-9]));
    }
}