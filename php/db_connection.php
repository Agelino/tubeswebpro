<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "book_website";  // Ganti dengan nama database yang benar

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
