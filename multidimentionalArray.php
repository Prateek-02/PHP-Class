<?php
    $result = array(
        array('Manoj',7.8,'pass'),
        array('Aditya',8.5,'pass'),
        array('Anuj',4.9,'fail')
    );

    foreach($result as $res){
        foreach($res as $r){
            echo $r," ";
        }
        echo"<br>";
    }
?>