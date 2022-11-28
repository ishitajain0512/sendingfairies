<?php
session_start();

if (isset($_SESSION['b2']) && $_SESSION['b2'] == "true") {
  echo "Welcome to the member's area, " . htmlspecialchars($_SESSION['username']) . "!";
  header("location:contact-form-02/f1.php");
} 
else if (isset($_SESSION['b3']) && $_SESSION['b3'] == "true") {
  echo "Welcome to the member's area, " . htmlspecialchars($_SESSION['username']) . "!";
  header("location:contact-form-02/f1.php");
} 
else {
    echo"<script>alert('Please log in first to open the cart.');</script>";
  }



?>