<?php

/* / Create a function similar a function array_keys_exists can't use it

  / */

function arrayKeysExist($array, $keySearch) {
    foreach ($array as $key => $value) {
        if ($key == $keySearch) {
            return TRUE . "(TRUE)";
        }
    }
    return FALSE . "(FALSE)";
}

$arrayKeysExist = array("Linguagem1" => "PHP", "Linguagem2" => "C");

print_r(arrayKeysExist($arrayKeysExist, "Linguagem3"));
