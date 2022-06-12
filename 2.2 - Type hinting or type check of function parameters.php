<?php
 
    function factorial(int $n) {
        // if(gettype($n) != "integer") {
        //     echo "Error: $n is not an integer";
        //     return;
        // }

        $result = 1;
        for($i = $n; $i > 1; $i--) {
            echo $i ."\n";
            $result *= $i;
        }
        return $result;
    }

    // echo gettype(100);

    echo factorial(5);