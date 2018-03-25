<?php

namespace Tests\Day1;

use PHPUnit\Framework\TestCase;
use Day1\FizzBuzz\FizzBuzz;

class FizzBuzzTest extends TestCase{
    private $fb;

    public function setUp(){
        $this->fb =new FizzBuzz();
    }

    public function test_fizz_buzz_for_1() {
        $this->assertEquals(1, $this->fb->fizzBuzz(1));
    }

    public function test_fizz_buzz_for_2() {
        $this->assertEquals(2, $this->fb->fizzBuzz(2));
    }

    public function test_fizz_buzz_for_3() {
        $this->assertEquals("fizz", $this->fb->fizzBuzz(3));
    }

    public function test_fizz_buzz_for_5() {
        $this->assertEquals("buzz", $this->fb->fizzBuzz(5));
    }

    public function test_fizz_buzz_for_15() {
        $this->assertEquals("fizzbuzz", $this->fb->fizzBuzz(15));
    }

    public function test_fizz_buzz_for_0() {
        $this->assertEquals("fizzbuzz", $this->fb->fizzBuzz(0));
    }

    public function test_fizz_buzz_for_string() {
        $this->assertEquals("qwerty", $this->fb->fizzBuzz("qwerty"));
    }

    public function test_fizz_buzz_for_negativ_number() {
        $this->assertEquals(-1, $this->fb->fizzBuzz(-1));
    }

    public function test_fizz_buzz_for_float() {
        $this->assertEquals(0.7, $this->fb->fizzBuzz(0.7));
    }

}
