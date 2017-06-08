<?php

// Create a function look like the function strposwithout using it

function pos(string $string) {
    $result = "";

    for ($x = strlen($string) - 1; $x >= 0; $x--) {
        $result .= substr($string, $x, 1);
    }
    return $result;
}

echo pos("Exemplo de string");
?>