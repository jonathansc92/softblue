<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$x = 4;
$soma = 1;
for ($i = $x; $i > 1; $i--) {

        $soma *= $i;

}

print "<pre>";
print_r($soma);

