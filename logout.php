
<?php
    session_start();
    unset($_SESSION['username']);
    unset($_SESSION['logged-in']);
    unset($_SESSION['b1']);
    unset($_SESSION['b2']);
    unset($_SESSION['b3']);
    unset($_SESSION['details']);
    echo "logged out";
    session_destroy();
    header("location:index.php");

?>