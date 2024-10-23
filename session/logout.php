<?php
    session_start();
    unset($_SESSION["USERNAME"]);
    unset($_SESSION["password"]);
    echo "You have been logged out from the session";
?>