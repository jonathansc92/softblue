<?php

/* / Create a function similar a function array_push can't use it

  / */

function arrayPush($array, $element) {
    
    $array[count($array)] = $element;
    return $array;
}

$arrayPush = array(1, 2, 3, 4, 5);

print_r(arrayPush($arrayPush, 6));
//print_r(arrayRSort($arraySort));
