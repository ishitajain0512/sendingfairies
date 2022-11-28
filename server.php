<?php
require_once "config.php";

$username=$password=$address=$city="";




if ($_SERVER['REQUEST_METHOD'] == "POST"){

$username=$_POST['username'];
$password=$_POST['password'];
$address=$_POST['address'];
$city=$_POST['city'];

if(empty($username)){array_push($errors,"username is required");}
if(empty($password)){array_push($errors,"password is required");}
if(empty($address)){array_push($errors,"address is required");}
if(empty($city)){array_push($errors,"city is required");}

$user_check_qyery="SELECT * FROM users WHERE username='$username' LIMIT 1";


$results=mysqli_query($conn,$user_check_qyery);
$user=mysqli_fetch_assoc($results);


if($user){

  if($user['username']=== $username){array_push($errors,"username already exists");}


}

if(count($errors)==0){

  $sql="INSERT INTO `users`(`username`,`password`,`address`,`city`)VALUES ('$username','$password','$address','$city')";

  $result=mysqli_query($conn,$sql);

if($result){
   echo "submitted successfully";
   header("location: index.php");
 }

 else{
 echo "failed to submit";

}
}


}
?>

