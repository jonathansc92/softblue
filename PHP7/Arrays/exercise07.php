<?php

/* / Create a function similar a function array_unshift can't use it

  / */

function arrayUNShift($array, $elemment) {
    for ($x = sizeof($array); $x > 0; $x--) {
        $array[$x] = $array[$x - 1];
    }

    $array[0] = $elemment;
    return $array;
}

$arrayUNShift = array(1, 2, 3, 4, 5);

print_r(arrayUNShift($arrayUNShift, 6));
