<?php
    $name = $email = "";
    $errname = $erremail = "";
    if(isset($_REQUEST['save'])){
        if(empty($_REQUEST['name'])){
            $errname = "Please enter name";
        }
        else{
            $name = test_input($_REQUEST['name']);
            echo "Name is: ". $name . "<br>"; 
        }

        if(empty($_REQUEST['email'])){
            $erremail = "Please enter email";
        }
        else if(!filter_var($_REQUEST['email'],FILTER_VALIDATE_EMAIL)){
            $erremail = "Please enter a valid email";
        }
        else{
            $email = test_input($_REQUEST['email']);
            echo "Email is: ".$email;
        }
    }

    function test_input($data){
        $data = trim($data);
        $data = htmlspecialchars($data);
        $data = stripslashes($data);
        return $data;
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
    <form method = "POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Name: <input type="text" name="name" id="">
        <?php echo $errname?><br><br>
        Email: <input type="email" name="email" id="">
        <?php echo $erremail?><br><br>
        Password: <input type="password" name="pass" id="">
        <br><br>
        <button type="submit" name="save">Submit</button>
    </form>
</body>
</html>