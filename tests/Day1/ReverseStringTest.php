<?php

namespace Tests\Day1;

use PHPUnit\Framework\TestCase;
use Day1\ReverseString\ReverseString;

class ReverseStringTest extends TestCase {

    private $reverseString;

    public function setUp()
    {
        $this->reverseString = new ReverseString();
    }

    public function test_reverse_string_for_null() {
        $this->assertEquals(" ", $this->reverseString->reverseString(" "));
    }

    public function test_reverse_string_for_1() {
        $this->assertEquals("a", $this->reverseString->reverseString("a"));
    }

    public function test_reverse_string_for_2() {
        $this->assertEquals("ba", $this->reverseString->reverseString("ab"));
    }

    public function test_reverse_string_for_number() {
        $this->assertEquals("c^a4", $this->reverseString->reverseString("4a^c"));
    }
}
