<?php

namespace Day2\Truck;


// Не доделано.
class Truck{

    public function number_of_trips($array)
    {
        $count = count($array);

        if ($count == 1) {
            return 1;
        }

        asort($array);

        $truck = 0;
        $sum = $array[$count-1];

        for ($i = 0; $i < $count; $i++) {

            while (($sum + $array[$i]) <= 30000){
                $sum += $array[$i];
                unset($array[$i]);
                 $i ++;
            }

            $truck ++;
            $sum = [$count-$i-1];
        }
        return $truck;
    }
}