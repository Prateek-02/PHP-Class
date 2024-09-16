<?php
    function sum(){
        $s = $GLOBALS['a'] + $GLOBALS['b'];
        return $s;
    }

    $a = 10;
    $b = 20;
    echo sum();
?>