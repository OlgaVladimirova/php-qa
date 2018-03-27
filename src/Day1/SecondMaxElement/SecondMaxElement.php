<?php

namespace Day1\SecondMaxElement;

class SecondMaxElement{

    public function getSecond(array $array){
        $array_unique = array_unique($array);

        $count = count($array_unique);

        if ($count == 1 || $count == 0){
            return "In the array there is no second maximum element";
        }
        //$first = $array[0];
        //$second = $array[0];

        /*for ($i = 0; $i < count($secondElement); $i++){
            echo $secondElement[$i];
        }*/

        rsort($array_unique);
        return $array_unique[1];
    }
}