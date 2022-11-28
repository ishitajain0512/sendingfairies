
<?php
session_start();
require_once "config.php";
if ($_SERVER['REQUEST_METHOD'] == "POST"){

  $username=$_POST['username'];
  $password=$_POST['password'];

  if(empty($username)){array_push($errors,"username is required");}
  if(empty($password)){array_push($errors,"password is required");}

  if(count($errors)==0){

    $r="SELECT * FROM users WHERE username='$username' AND password='$password' ";
    $results=mysqli_query($conn,$r);
    $num=mysqli_num_rows($results);
    if($num==1){
      echo "logged in successfully";
      $_SESSION['logged-in']="true";
      $_SESSION['username']=$username;
      $_SESSION['password']=$password;

      $_SESSION['b1']="true";
      $_SESSION['b2']="true";
      $_SESSION['b3']="true";
      $_SESSION['details']="true";
      


      header("location: index.php");
      
    }
    else{
      array_push($errors,"wrong password/username");
    }
  }
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

    <title>Login</title>
  </head>
  <body>
  

<div class="container mt-4">
<h3>Please Login Here:</h3>
<hr>

<form action="" method="post">

<?php include 'errors.php';?>
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password">
  </div>
  
  <button type="submit" class="btn btn-primary" name="login_user">Submit</button>
</form>

<p>New user?</p><a href="register.php"> Create account</a>

</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
