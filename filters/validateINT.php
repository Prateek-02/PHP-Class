<?php
    $num = 0;
    if(filter_var($num,FILTER_VALIDATE_INT)){
        echo "Valid";
    }
    else{
        echo "Invalid";
    }
?>