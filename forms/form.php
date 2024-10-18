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
            height:300px;
            padding-top: 50px;
            background: gray;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- <form method = "POST" action="./save.php"> -->
        <form method = "GET" action="./form2.php">
            <label for="name">Name:</label>
            <input type="text" name = "name" id = "name" required placeholder = "Enter your name">
            <br><br>
            <label for="email">Email: </label>
            <input type="email" name = "email" id = "em" require placeholder = "Enter your Email">
            <br><br>
            <input type="submit" value="Submit" name = "save" id = "btn">
        </form>
    </div>
    
</body>
</html>