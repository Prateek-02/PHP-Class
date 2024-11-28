<?php
    if($_GET){
        echo "Username is: ".$_GET['user_name'];
        echo"<br>";
        echo "Password is: ".$_GET['password'];
    }

    if($_POST){
        echo "Username is: ".$_POST['name'];
        echo "<br>";
        echo "Password is: ".$_POST['pass'];
    }
    
?>