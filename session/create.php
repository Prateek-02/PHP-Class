<?php
    session_start();
    $_SESSION ["USERNAME"]= "PRATEEK";
?>

<html>
    <body>
        <?php
            if(isset($_SESSION["USERNAME"])){
                echo "The session is created", $_SESSION["USERNAME"];
            }
            else{
                echo "The session is not set";
            }
        ?>
        <a href="./display.php">Display Session</a>
    </body>
</html>