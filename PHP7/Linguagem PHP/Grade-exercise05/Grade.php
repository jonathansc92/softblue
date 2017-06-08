<?php

// Write a function that return the factorial number on parammeter. The value 4 the result is 24
class Grade {

    public function totalGrade($grade01, $grade02, $grade03, $max01, $max02, $max03) {

        $result= (($grade01 / 10) * $max01) + (($grade02 / 10) * $max02) +(($grade03 / 10) * $max03);
        return "The result is " . $result;
    }

}

?>