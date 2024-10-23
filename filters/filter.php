<?php
    $str = "<h1>Hello World</h1>";
    if(filter_var($str,FILTER_VALIDATE_STRING)){
        echo "Valid";
    }
    else{
        echo "not valid";
    }

    echo $newstr;
    echo "<br>";
?>