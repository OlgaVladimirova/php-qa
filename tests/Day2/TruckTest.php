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
     * @param $array
     */

    public function test_number_of_trips($expected, $array){
        $this->assertEquals($expected, $this->truck->number_of_trips($array));
    }

    public function additionProvider(){
        return[
            'number_of_trips_1' => [1, [1]],
            'number_of_trips_2' => [1, [5000, 20000]],
            'number_of_trips_3' => [2, [15000, 10000, 20000]]
        ];
    }


}