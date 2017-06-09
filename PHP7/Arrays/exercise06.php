<?php

/* / Create a function similar a function array_shift can't use it

  / */

function arrayShift($array) {

    unset($array[0]);
    return $array;
}

$arrayShift = array(1, 2, 3, 4, 5);

print_r(arrayShift($arrayShift));