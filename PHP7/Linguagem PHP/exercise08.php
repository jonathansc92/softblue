<?php

/* / Make a program: 
  If variable $x is even then $y = $x / 2
  If variable $x is odd then $y = 3 * $x + 1
  Show the display $y


  / */


//for ($i = $x; $i > 1; $i--) {
function calc($x) {
    switch ($x % 2) {
        case 0:
            echo $y = $x / 2;

            break;

        default:
            echo $y = 3 * $x + 1;

            break;
        
        if($y !=1)
            calc($x);
    }
}

calc(13);