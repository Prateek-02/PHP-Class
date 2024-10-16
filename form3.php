<?php
    $errname = "";
    $erremail = "";
    $errnumber = "";
    $email = "";
    $number = "";
    
    if (isset($_POST["save"])) {
        // Name validation
        if(empty($_POST['name'])){
            $errname = "Name is required";
        }
        else{
            $name = test_input($_POST['name']);
            echo "The name is ", $name , "<br>";
        }

        // Email validation
        if(empty($_POST['email'])){
            $erremail = "Email is required";
        }
        elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            $erremail = "Invalid email format";
        }
        else{
            $email = test_input($_POST['email']);
            echo "The email is ", $email , "<br>";
        }

        // Number validation
        if(empty($_POST['number'])){
            $errnumber = "Number is required";
        }
        elseif(!is_numeric($_POST['number'])){
            $errnumber = "Only numbers are allowed";
        }
        else{
            $number = test_input($_POST['number']);
            echo "The number is ", $number, "<br>";
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
    <title>Document</title>
</head>
<body>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
        <span style="color:red">*<?php echo $errname; ?></span><br><br>

        <label for="email">Email:</label>
        <input type="text" name="email" id="email">
        <span style="color:red">*<?php echo $erremail; ?></span><br><br>

        <label for="number">Number:</label>
        <input type="text" name="number" id="number">
        <span style="color:red">*<?php echo $errnumber; ?></span><br><br>
        
        <label for="pw">Password: </label>
        <input type="password" name="password" id="pw"><br><br>

        <input type="submit" name="save">
    </form>
</body>
</html>
