<?php
    if(isset($_REQUEST['button'])){
        if($_REQUEST['button'] == 'set'){
            $val = $_REQUEST['name'];
            setcookie('name',$val,time()+86400,'/');
        }

        if($_REQUEST['button'] == 'get'){
            if(isset($_COOKIE['name'])){
                echo "Cookie is: ". $_COOKIE['name'];
            }
        }
        if($_REQUEST['button'] == 'delete'){
            if(isset($_COOKIE['name'])){
                setcookie('name',null,-1);
                echo "Cookie is deleted";
            }
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" name="name" id="" placeholder = "Enter name">
        <br><br>
        <button type="submit" name="button" value="set">Set Cookie</button>
        <br><br>
        <button type="submit" name="button" value="get">Get Cookie</button>
        <br><br>
        <button type="submit" name="button" value="delete">Delete Cookie</button>
        <br><br>
        
    </form>
</body>
</html>