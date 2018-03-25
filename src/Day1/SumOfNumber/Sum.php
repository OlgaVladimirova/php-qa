<?php

namespace Day1\SumOfNumber;

class Sum{
    public function sumOfNumber($number){
        if (gettype($number) != "integer" || $number < 0 ) {
            return "Sorry, I can't calculate sum";
        }

        $sum = 0;

        for ($i =0; $i<=$number; $i++){
            $sum += $i;
        }

        return $sum;
    }
}
