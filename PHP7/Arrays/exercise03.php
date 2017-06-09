<?php

/* / Write a function that return the size array 
 * Can't using the function sizeof or count
  / */

function arraySize($array) {
    $value = 0;
    foreach ($array as $value) {
        $value++;
    }
    return $value;
}

$arraySort = array(1, 2, 3, 4, 5);

echo arraySize($arraySort);
//print_r(arrayRSort($arraySort));
