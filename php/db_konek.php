<?php
$conn = mysqli_connect("localhost", "root", "", "book_website");
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
