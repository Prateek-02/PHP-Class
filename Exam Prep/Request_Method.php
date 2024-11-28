<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request method</title>
</head>
<body>
    <!-- $_Request gives you both get and post type data -->
     <form action="./register.php" method = "GET">
        <input type="text" name="name" id="" placeholder="Enter name">
        <br><br>
        <input type="password" name="pass" id="" placeholder = "Enter password">
        <br><br>
        <input type="email" name="email" id="" placeholder = "Enter email">
        <br><br>
        <button type="submit">Submit</button>

     </form>
</body>
</html>