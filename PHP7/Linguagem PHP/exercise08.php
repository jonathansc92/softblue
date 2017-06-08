<?php

/* / Make a program: 
  If variable $x is even then $y = $x / 2
  If variable $x is odd then $y = 3 * $x + 1
  Show the display $y


  / */

$x = 13;



for ($i = $x; $i > 1; $i--) {
    switch ($x % 2) {
        case 0:
            $y = $x / 2;

            for ($i = 1; $i < $y; $i--) {
                echo $i;
            }


            break;

        default:
            $y = $x / 2;
            if ($i % 2 == 0) {


                echo " $i ";
            } else {
                $y = 3 * $x + 1;

                echo $y;
            }
    }
    break;
}