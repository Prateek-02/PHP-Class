<?php
    // echo "Username is: ".$_REQUEST['name'];
    // echo "<br>";
    // echo "Passwors is: ".$_REQUEST['pass'];
    // echo "<br>";
    // echo "Email is: ".$_REQUEST['email'];

    foreach ($_REQUEST as $data) {
        echo $data;
        echo "<br>";
    }
?>