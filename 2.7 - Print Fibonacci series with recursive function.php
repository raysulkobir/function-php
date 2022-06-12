<?php
    function fibonacci(int $old, int $new, int $end) {
        static $start;
        $start = $start ?? 1;

        if($start > $end) {
            return;
        }
        $start ++;

        echo $old."\n";

        $temp = $old + $new;
        $old = $new;
        $new = $temp;

        fibonacci($old, $new, $end);
    }

    fibonacci(0, 1, 30);