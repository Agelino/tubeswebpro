<?php
include 'includes/db.php';

if (isset($_POST['setuju'])) {
    $nama_depan    = $_POST['nama_depan'];
    $nama_belakang = $_POST['nama_belakang'];
    $username      = $_POST['username'];
    $password      = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (nama_depan, nama_belakang, username, password) 
            VALUES ('$nama_depan', '$nama_belakang', '$username', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Registrasi berhasil! Silakan login.'); window.location='login.php';</script>";
    } else {
        echo "<script>alert('Username sudah digunakan!'); window.location='registrasi.php';</script>";
    }
} else {
    echo "<script>alert('Silakan setujui syarat terlebih dahulu'); window.location='registrasi.php';</script>";
}
?>
