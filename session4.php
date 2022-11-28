<?php
session_start();
if (isset($_SESSION['details']) && $_SESSION['details'] == "true") {
  echo "Welcome to the member's area, " . htmlspecialchars($_SESSION['username']) . "!";
  header("location:contact-form-02/f5.php");
} else {
  echo"<script>alert('Please log in first to open the cart.');</script>";
}




?>