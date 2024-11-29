<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="name" id="" placeholder="Enter name">
        <br><br>
        <button type="submit" name="btn" value="set">Set</button>
        <br><br>
        <button type="submit" name="btn" value="get">Get</button>
        <br><br>
        <button type="submit" name="btn" value="del">Delete</button>
    </form>
</body>
</html>

<?php
    session_start();
    if(isset($_REQUEST['btn'])){
        if($_REQUEST['btn'] == 'set'){
            $val = $_REQUEST['name'];
            $_SESSION['name'] = $val;
        }

        if($_REQUEST['btn'] == 'get'){
            if(isset($_SESSION['name'])){
                echo "Session is: ",$_SESSION['name'];
            }
            else{
                echo "No session to display";
            }
        }

        if($_REQUEST['btn'] == 'del'){
            if(isset($_SESSION['name'])){
                unset($_SESSION['name']);
                echo "Session is deleted";
            }
            else{
                echo "No session to delete";
            }
        }
    }

?>