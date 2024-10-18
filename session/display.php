<?php
    session_start();
    echo "The session is being created <br>";
    echo "The session value is ",$_SESSION["USERNAME"];
?>
<html>
    <body>
        <a href="./logout.php">Log out</a>
    </body>
</html>