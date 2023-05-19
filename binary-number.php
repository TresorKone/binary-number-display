<?php

class Binary {
    public function binary($num) {
        // variable that increment during the while loop
        $i = 0;
        // variable that "control" or "determine" when putting a =
        $zero = 0;
        // constant value to use later
        $k = 2;
        //numbers array
        $numbersArray = [];


        // while loop
        while ($i < $num) {
            if ($i == $zero) {
                // i push in the numbers array
                $numbersArray[] = 0;
                $zero = $zero + $k;
                $k += 1;
            } else {
                $numbersArray[] = 1;
            }
            // this might be an infinite loop, so we need to increment also i
            $i += 1;
        }
        print_r($numbersArray);

    }
}

$result = new Binary();
$result -> binary(30);