<?php
    $arr = array("Sophia"=>"31","Jacob"=>"41","William" =>"39","Ramesh"=>"48");

    //sort in ascending order by value
    asort($arr);
    print_r($arr);
    //sort in ascending order by key
    echo "<br>";
    ksort($arr);
    print_r($arr);

    echo "<br>";

    $arr = array("Sophia"=>"31","Jacob"=>"41","William" =>"39","Ramesh"=>"48");

    // sort in descending order by value
    arsort($arr);
    print_r($arr);

    echo "<br>";
    // sort in descending order by key
    krsort($arr);
    print_r($arr);
?>