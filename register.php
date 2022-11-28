<?php
require_once "config.php";

$username=$password=$address=$city="";


$errors=array();

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

  if($user['username']=== $username){
    array_push($errors,"username already exists");
    echo "username already exists ! Please select a different username.";
  }


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



// $sql="INSERT INTO `users`(`username`,`password`,`address`,`city`)VALUES ('$username','$password','$address','$city')";

// $result=mysqli_query($conn,$sql);

// if($result){
//   echo "submitted successfully";
// }

// else{
// echo "failed to submit";

// }


}

    

?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>PHP login system!</title>
  </head>
  <body>
<div class="container mt-4">
<h3>Please Register Here:</h3>
<hr>
<form action="" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Username</label>
      <input type="text" class="form-control" name="username" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" name ="password" id="inputPassword4" placeholder="Password">
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputAddress2">Address</label>
    <input type="text" class="form-control" name="address" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" name="city" id="inputCity">
    </div>
    
    
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>