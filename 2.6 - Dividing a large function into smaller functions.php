<?php
    function doTheLagerTask() {
        echo "Completed 1".PHP_EOL;
        echo "Completed 2".PHP_EOL;
        echo "Completed 3".PHP_EOL;
    }

    doTheLagerTask();


    function sum($a, $b){
        echo $a+$b;
        echo "\n";
    }
    function sub($a, $b){
        echo $a-$b;
        echo "\n";
    }
    function mul($a, $b){
        echo $a*$b;
        echo "\n";
    }
    function div($a, $b){
        echo $a/$b;
        echo "\n";
    }
    function mod($a, $b){
        echo $a%$b;
        echo "\n";
    }
 
 
    

    function calculator($a, $b) {
        sum($a, $b);
        sub($a, $b);
        mul($a, $b);
        div($a, $b);
    }

    calculator(10, 20);