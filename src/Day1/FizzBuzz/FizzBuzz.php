<?php

namespace Day1\FizzBuzz;

class FizzBuzz{

    public function fizzBuzz($number)
    {
        if (gettype($number) != "integer" ) {
            return $number;
        }
        $output = "";
        $output = $number % 3 == 0 ? "fizz" : "";
        $output .= $number % 5 == 0 ? "buzz" : "";
        return strlen($output) == 0 ? $number : $output;
    }
}
