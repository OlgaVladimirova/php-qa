<?php

namespace Tests\Day2;

use Day2\Truck\Truck;
use PHPUnit\Framework\TestCase;

class TruckTest extends TestCase {
    private $truck;

    public function setUp()
    {
        $this->truck = new Truck();
    }

    /**
     * @dataProvider additionProvider
     * @param $expected
     * @param $arrayCount
     */

    public function test_number_of_trips($expected, $arrayCount){
        $this->assertEquals($expected, $this->truck->number_of_trips($arrayCount));
    }

    public function additionProvider(){
        return[
            'number_of_trips_1' => [1, 1],
            'number_of_trips_1' => [3, 3]
        ];
    }


}