<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$soma = 0;
for ($i = 50; $i < 101; $i+=2) {

        $soma += $i;

}

print "<pre>";
print_r($soma);

