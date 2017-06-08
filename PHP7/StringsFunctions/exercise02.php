<?php

// Create a function look like the function strrev without using it

function rev(string $string) {
    $result = "";

    for ($x = strlen($string) - 1; $x >= 0; $x--) {
        $result .= substr($string, $x, 1);
    }
    return $result;
}

echo rev("Exemplo de string");
?>