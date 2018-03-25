<?php

namespace Day1\NumberOfOccurrences;

class NumberOfOccurrences{

    public function number($number, $string){
        return substr_count($string, $number);
    }
}
