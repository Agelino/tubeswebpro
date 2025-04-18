<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="../css/login.css">
</head>
<body>
  <div class="login-box">
    <form action="proses_login.php" method="POST">
      <h2>LOGIN</h2>
      <input type="text" name="username" placeholder="Username" required><br>
      <input type="password" name="password" placeholder="Password" required><br>
      <input type="submit" value="Login" class="submit"><br>
      <a href="registrasi.php">Belum punya akun?</a><br>
      <a href="forgotpw.php">Lupa password?</a>
    </form>
  </div>
</body>
</html>
