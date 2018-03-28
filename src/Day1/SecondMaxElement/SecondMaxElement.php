<?php

namespace Day1\SecondMaxElement;

class SecondMaxElement{

    public function getSecond(array $array){
        $array_unique = array_unique($array);

        $count = count($array_unique);

        for ($i = 0; $i < $count; $i++ ){

            if (! is_numeric($array_unique[$i]) ) {
                return "There is no second maximum element";
            }
        }

        if ($count == 1 || $count == 0){
            return "There is no second maximum element";
        }

        rsort($array_unique);
        return $array_unique[1];
    }
}