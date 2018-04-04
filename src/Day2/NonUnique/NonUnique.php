<?php

namespace Day2\NonUnique;

class NonUnique{

    public function nonUniqueElement(array $array){
        $array_count_values = array_count_values($array);
        $array_of_duplicates = array();

        foreach ($array_count_values as $key => $value){
            if ($value > 1){
                array_push($array_of_duplicates, $key);
            }
        }

        return $array_of_duplicates;

        /*$array_result = array();
         *
         * foreach ($array_count_values as $key => $value){
            if ($value < 2){
                $index = array_search($key,$array);
                echo $index;
                array_push($array_result, $key);
            }
        }

        return $array;*/
    }
}
