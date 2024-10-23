<?php
    $email = "Prateek@gmail.com";
    if(filter_var($email,FILTER_VALIDATE_EMAIL)){
        echo "Valid";
    }
    else{
        echo "Invalid";
    }
?>