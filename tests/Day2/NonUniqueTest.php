<?php

namespace Tests\Day2;

use PHPUnit\Framework\TestCase;
use Day2\NonUnique\NonUnique;

class NonUniqueTest extends TestCase{

    private $nonUnique;

    public function setUp()
    {
        $this->nonUnique = new NonUnique();
    }

    /**
     * @dataProvider additionProvider
     * @param $expected
     * @param $array
     */

    public function test_array_non_unique($expected, $array){
        $this->assertEquals($expected, $this->nonUnique->nonUniqueElement($array));
    }

    public function additionProvider(){
        return[
            'nonUnique_1' => [[1],[1,1]],
            'nonUnique_2' => [[2, 1],[2,1,3,1,2]],
            'nonUnique_empty_array' => [[],[]],
            'nonUnique_string' => [["abb"],["as","abb", 123, "abb"]],
            'nonUnique_no_duplicates' => [[],[1,2,3]]
        ];
    }
}
