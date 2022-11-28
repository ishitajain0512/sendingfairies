<?php
session_start();
$conn=mysqli_connect('localhost','root','','login');
$errors=array();
if($conn){
    // echo "success";
    echo "<br>";
}
else{
    echo "failed";
    echo "<br>";
}
?>
