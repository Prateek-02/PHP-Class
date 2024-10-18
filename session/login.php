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
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method = "post">
            Username <input type="text" name = "username"><br><br>
            Password <input type="password" name = "password"><br><br>
            <button type="submit" name= "login">Login</button>
            <h4><?php echo $msg ?></h4>
        </form>
        <a href="myProfile.php">My Profile</a>
        <a href="./logout.php">Logout</a>
    </body>
</html>