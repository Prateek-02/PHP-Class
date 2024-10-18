<?php
    session_start();
    unset($_SESSION["USERNAME"]);
    unset($_SESSION["password"]);
    echo "You haev been logged out from the session";
?>