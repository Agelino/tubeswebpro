<?php
  $conn = mysqli_connect("localhost", "root", "", "book_website");
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
?>
