<?php

/* / Write a function that return the array parammeter,  descending order
  / */

function arrayRSort($array) {
   rsort($array);
   return $array;
}

$arraySort = array('PHP','RUBY','JAVA','C','C++');

print_r(arrayRSort($arraySort));
//print_r(arrayRSort($arraySort));
