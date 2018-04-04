<?php

namespace Day2\MaxString;

class MaxString{

    public function maxString($string){

        $array = explode(" ", $string);

        $count = count($array);

        if ($count == 1|| $count == 0){
            return $string;
        }

        $max = $array[0];

        for ($i=0; $i<$count; $i++) {
            if(strlen($array[$i]) > strlen($max)){
                $max = $array[$i];
            }
        }

        return $max;

    }
}