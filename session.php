<?php
session_start();
if (isset($_SESSION['logged-in']) && $_SESSION['logged-in'] == "true") {
  echo "Welcome to the member's area, " . htmlspecialchars($_SESSION['username']) . "!";
  header("location:cart/index.html");
} else {
  echo"<script>alert('Please log in first to open the cart.');</script>";
}




?>
