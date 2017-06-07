<?php

// Write a function that return the factorial number on parammeter. The value 4 the result is 24
class Sum {

    public function valueFactorial($value) {
        $result = 1;
        for ($i = $value; $i > 1; $i--) {
            $result *= $i; 
            
        }
        return "The factorial the " . $value . " is " . $result;
    }

}

?>