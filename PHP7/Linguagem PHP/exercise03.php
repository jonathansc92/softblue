<?php

// Print on display the sum the all numbers even between 50 till 100. The result should 1950
$sum = 0;
for ($i = 50; $i < 101; $i++) {
    if ($i % 2 == 0) {
       $sum += $i;
    }
}

echo "The sum the even numbers beetween 50 till 100 is ".$sum;
