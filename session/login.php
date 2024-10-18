<?php
    session_start();
?>
<html>
    <body>
        <h2>Eneter username and password</h2>
        <?php
            $msg='';
            if(isset($_POST['login']) && !empty($_POST['password'])){
                if($_POST['username'] == 123 && $_POST['password'] == 123){
                    $_SESSION['username'] = 123;
                    echo "you have entered valid username and password";
                }
                else{
                    echo "Invalid usename and password";
                }
            }
        ?>
    </body>
</html>