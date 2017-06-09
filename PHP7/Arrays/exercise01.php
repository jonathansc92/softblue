<?php

/* / Write a function that receive 2 arrays(1 grade, 1 average) and show a final grade.
  To array(7, 8, 10) and array(2,3,5) the result is 8.8
  / */

function arrayGrade($array1, $array2) {

    return (($array1[0] / 10 ) * $array2[0]) + (($array1[1] / 10 ) * $array2[1]) + (($array1[2] / 10 ) * $array2[2]);

}

echo arrayGrade(array(7, 8, 10), array(2, 3, 5));
