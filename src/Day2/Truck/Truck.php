<?php

namespace Day2\Truck;

class Truck{

    public function number_of_trips($count)
    {
        if ($count == 1) {
            return 1;
        }

        $array = array();
        for ($i = 0; $i < $count; $i++) {
            $array[] = rand(1, 20000);
        }

        asort($array);

        $number = 0;
        $sum = $array[$count];

        for ($i = 0; $i < $count; $i ++){

            for ($j = 0; $j <=  30000; $j++) {
                $sum += $array[$j];
                unset($array[$j]);
            }
            $sum = $array[$count-$i-1];
            $number ++;
            return $number;
        }

        return 3;
    }
}