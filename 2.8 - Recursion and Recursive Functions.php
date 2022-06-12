<?php

/*
    recursive function
*/
function printNumbers(int $start, int $end) {
    if($start > $end) {
         return;
    }
    echo $start . "\n";
    printNumbers($start + 1, $end);

}

printNumbers(1, 10);