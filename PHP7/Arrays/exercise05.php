<?php

/* / Create a function similar a function array_pop can't use it

  / */

function arrayPop($array) {

    $element = $array[sizeof($array) - 1];
    unset($array[sizeof($array) - 1]);
    return $element;
}

$arrayPop = array(1, 2, 3, 4, 5);

echo arrayPop($arrayPop);
//print_r(arrayRSort($arraySort));
print_r($arrayPop);