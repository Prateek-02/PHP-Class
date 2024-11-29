<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="name" id="" placeholder = "Enter name">
        <br><br>
        <button type="submit" name="button" value = "set">Set Session</button>
        <br><br>
        <button type="submit" name="button" value = "get">Get Session</button>
        <br><br>
        <button type="submit" name="button" value = "del">Delete Session</button>
        <br><br>
    </form>
</body>
</html>


<?php
    session_start();

    if(isset($_REQUEST['button'])){
        if($_REQUEST['button'] == 'set'){
            $val = $_REQUEST['name'];
            $_SESSION['name'] = $val;
        }

        if($_REQUEST['button'] == 'get'){
            if(isset($_SESSION['name'])){
                echo "Session is: ". $_SESSION['name'];
            }
            else{
                echo "No session to display";
            }
        }

        if($_REQUEST['button'] == 'del'){
            if(isset($_SESSION['name'])){
                session_destroy();
                echo "Session is deleted";
            }
            else{
                echo "No Session to delete";
            }
        }
    }

?>