<?php

// Print on display fisrt 10 Fibonacci numbers still the numer 100
$fibonnaci = array(1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144, 233, 377);

echo "The first 10 Fibonnaci numbers: ";
foreach ($fibonnaci as $value) {
    if ($value < 100) {
        echo " $value |";
    }
}

