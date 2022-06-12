<?php
    function sum(int ...$numbers):int{
        $result = 0;
        foreach($numbers as $number){
            $result += $number;
        }
        return $result;
    }

    echo sum(10, 20, 30);