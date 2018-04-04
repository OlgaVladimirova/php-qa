<?php

namespace Tests\Day2;

use PHPUnit\Framework\TestCase;
use Day2\MaxString\MaxString;

class MaxStringTest extends TestCase{
    private $maxString;

    public function setUp()
    {
        $this->maxString = new MaxString();
    }

    /**
     * @dataProvider additionProvider
     * @param $expected
     * @param $string
     */

    public function test_max_string($expected, $string)
    {
        $this->assertEquals($expected, $this->maxString->maxString($string));
    }

    public function additionProvider(){
        return[
            'max_string_a' => ["a","a"],
            'max_string_empty_string' => ["",""],
            'max_string_abbbb' => ["abbbb","anj gfhk abbbb j"]
        ];
    }

}