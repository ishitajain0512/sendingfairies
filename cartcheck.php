<?php
    // require_once "login.php";
    // if($flag==1) header("location: cart/index.html");
    // else{
    //     echo"<script>alert('You have not logged in!');</script>";
    // }
    session_start();
    if($_SESSION['f']==1){
        header("location: cart/index.html");
    }
    else{
            echo"<script>alert('You have not logged in!');</script>";
        }
?>