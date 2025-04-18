<?php
// halaman registrasi
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Registrasi</title>
  <link rel="stylesheet" href="css/registrasi.css">
</head>
<body>
  <div class="kotak">
    <video autoplay muted loop>
      <source src="video/buku.mp4" type="video/mp4">
    </video>
    <form action="proses_register.php" method="POST">
      <h2>REGISTRASI</h2>
      <input type="text" name="nama_depan" placeholder="Nama Depan" required><br>
      <input type="text" name="nama_belakang" placeholder="Nama Belakang" required><br>
      <input type="text" name="username" placeholder="Username" required><br>
      <input type="password" name="password" placeholder="Password" required><br>
      <label>
        <input type="checkbox" name="setuju" required> Saya setuju
      </label><br>
      <button type="submit">Buat Akun</button>
      <p>Sudah punya akun? <a href="login.php">Login</a></p>
    </form>
  </div>
</body>
</html>
