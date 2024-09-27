<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input{
            border-radius: 12px;
            padding: 10px;
        }
        
        #btn{
            background-color: aqua;
        }

        .container{
            margin-top: 10%;
            margin-left: 30%;
            text-align:center;
            box-shadow: 5px 10px 5px black;
            max-width:600px;
            height:400px;
            background: gray;
        }

        form{
            padding: 20px;
        }
    </style>
</head>
<body>
<div class="container">
        <form method = "POST" action="./req.php">
            <input type="hidden" name="name" value="<?php echo $_REQUEST['name']; ?>">
            <input type="hidden" name="password" value="<?php echo $_REQUEST['password']; ?>">
            <label for="number">Name:</label>
            <input type="number" name = "number" id = "no" required placeholder = "Enter your number">
            <br><br>
            <label for="add">Address: </label>
            <input type="text" name = "add" id = "add" require placeholder = "Enter your address">
            <br><br>
            <input type="submit" value="Submit" name = "save" id = "btn">
        </form>
    </div>
</body>
</html>