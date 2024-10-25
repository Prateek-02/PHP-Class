<?php
    $to = "abc@gmail.com";
    $sub = "test email";
    $message = "Good afternoon";
    $from = "xyz@gmail.com";
    $headers = "From: $from";
    mail($to,$sub,$message,$header);

    echo "mailsent";
?>