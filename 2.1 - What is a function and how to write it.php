<?php
    function isEvent($n) {
        if($n % 2 == 0) {
            return true;
        } 
        return false;
    }

    if(isEvent(3)) {
        echo "It's an event";
    } else {
        echo "It's not an event";
    }