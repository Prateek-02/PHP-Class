<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        This is my first php website
        <?php
        define('Pi' , 3.14);
            echo "Hello world and this is printed using php";
            echo "<br>";
            

            $var1 = 34;
            $var2 = 12;

            echo $var1+$var2."<br>";

            echo $var1 - $var2;
            echo "<br>";
        ?>

        <?php
            // Data types
            echo
            " Data types - 
            1. string
            2. Integer
            3. Float
            4. Boolean
            5. Array
            6. Object";

            echo "<br>";

            echo Pi;
            
        ?>
    </div>
</body>
</html>