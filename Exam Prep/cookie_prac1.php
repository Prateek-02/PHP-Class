<?php
$cookie_name = "category";
$cookie_value = "Books";

$message="";

    if(isset($_REQUEST['set_cookie'])){
        setcookie($cookie_name,$cookie_value,time()+86400,'/');
        $message = "Cookie is set with name ".$_COOKIE[$cookie_name];
    }
    else if(isset($_REQUEST['delete_cookie'])){
        setcookie($cookie_name,$cookie_value,time()-86400,'/');
        $message = "Cookie is deleted";
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
    <form action="" method="post">
        <button type="submit" name = "set_cookie">Set Cookie</button>
        <button type="submit" name = "delete_cookie">Delete Cookie</button>
    </form>

    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(isset($message)){
                echo "<p><strong>$message</strong></p>";
            }
        }

    ?>
</body>
</html>