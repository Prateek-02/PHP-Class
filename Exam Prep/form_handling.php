<?php
    $name = $email = $pass = $gender = $city = "";
    $errname = $erremail = $errpass = $errgender = $errcity = "";

    if(isset($_REQUEST["save"])){
        if(empty($_REQUEST['name'])){
            $errname = "Name is required";
        }
        else{
            $name = test_input($_REQUEST['name']);
            echo "Name is: " . $name ,"<br>";
        } 

        if(empty($_REQUEST['email'])){
            $erremail = "Email is required";
        }
        else if(!filter_var($_REQUEST['email'],FILTER_VALIDATE_EMAIL)){
            $erremail = "Invalid email format";
        }
        else{
            $email = test_input($_REQUEST['email']);
            echo "Email is: ". $email . "<br>";
        }

        if(empty($_REQUEST['pass'])){
            $errpass = "Password is required";
        }
        else{
            $pass = test_input($_REQUEST['pass']);
        }

        if(empty($_REQUEST['gender'])){
            $errgender = "Gender is required";
            
        }
        else{
            $pass = test_input($_REQUEST['gender']);
            echo "Gender is: ". $gender ; "<br>";
        }

        if(empty($_REQUEST['gender'])){
            $errpass = "Password is required";
        }
        else{
            $pass = test_input($_REQUEST['gender']);
        }

        

    }


    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form handling</title>
</head>
<body>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        Name: <input type="text" name="name" id="">
        <?php echo $errname; ?>
        <br><br>
        Email: <input type="email" name="email" id="">
        <?php echo $erremail; ?>
        <br><br>
        Password: <input type="password" name="pass" id="">
        <?php echo $errpass; ?>
        <br><br>
        Gender: 
        Male<input type="radio" name="gender" id="" value="male">
        Female<input type="radio" name="gender" id="" value="female">
        <?php echo $errgender; ?>
        <br><br>
        <select name="city" id="">
            <option value="">Select your city</option>
            <option value="Delhi">Delhi</option>
            <option value="Mumbai">Mumbai</option>
            <option value="Bangalore">Bangalore</option>
        </select>
        <?php echo $errcity; ?>
        <br><br>
        <button type="submit" name="save">Submit</button>

    </form>
</body>
</html>