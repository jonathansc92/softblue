<?php

/* / Make a program: 
  Write a function with two parammeters and return the interval sum of the value parammeters 
 To parammeters (5,10) the result is 45 


  / */


//for ($i = $x; $i > 1; $i--) {
function sum(int $value01, int $value02) {
    $result  = 0;
    for($i=$value01;$i<=$value02;$i++){
       $result += $i;
    }
    return $result;
}

echo sum(5,10);