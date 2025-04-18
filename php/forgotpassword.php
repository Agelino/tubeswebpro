<?php
  // Mulai session
  session_start();
  include('db_connection.php'); // koneksi ke database

  $message = '';

  if (isset($_POST['submit'])) {
    $input = $_POST['email_or_phone'];

    // Cek apakah data cocok di database
    $query = "SELECT * FROM users WHERE email = '$input' OR phone = '$input'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
      // Di sini kamu bisa tambahkan logika kirim email reset / link token
      $message = "Link reset password telah dikirim ke email/nomor Anda (simulasi).";
    } else {
      $message = "Email atau nomor tidak ditemukan.";
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Forgot Password</title>
  <link rel="stylesheet" href="../css/forgotpw.css">
</head>
<body>
  <div class="forgot-container">
    <img src="lock_icon-removebg-preview.png" alt="">
    <h1>Forgot Password</h1>
    <p>Enter your email address or phone number to reset your password.</p>

    <?php if (!empty($message)): ?>
      <p style="color: red;"><?php echo $message; ?></p>
    <?php endif; ?>

    <form action="" method="POST">
      <input id="emailInput" type="text" name="email_or_phone" placeholder="Enter here" required>
      <button id="resetButton" type="submit" name="submit">Reset Password</button>
    </form>

    <a class="back-link" href="login.php">Back to Login</a>
  </div>

  <script src="../js/forgotpw.js"></script>
</body>
</html>
