<?php
    // $name = "Md.Raysul kobir";

    function doSomething(){
        // global $name;
        // echo $name;
        echo $GLOBALS['name'];
    }

    // doSomething();

    function vCheck(){
        global $name;
        $name = "Md.Sajid Rana".PHP_EOL;
        echo $name;
    }
    // vCheck();
    // echo $name;


    function fCheck(){
        static $i;
        $i = $i ?? 0;
        $i++;
        echo $i.PHP_EOL;
    }
    fCheck();
    fCheck();