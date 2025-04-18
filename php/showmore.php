<?php
session_start();
include 'koneksi.php'; // GANTI path ini sesuai posisi file koneksi.php kamu
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Detail Buku</title>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/home.css">
  <link rel="stylesheet" href="../css/showmore.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
</head>
<body id="body">

<div class="container mt-5">
  <?php
  // Query data buku berdasarkan ID tertentu (bisa juga pakai GET untuk dinamis)
  $sql = "SELECT * FROM books WHERE id = 1"; // ID bisa kamu ganti atau buat dinamis
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      echo '<div class="row">';
      echo '  <div class="col-md-4">';
      echo '    <img src="' . $row['image_url'] . '" alt="Book Cover" class="img-fluid">';
      echo '  </div>';
      echo '  <div class="col-md-8">';
      echo '    <h1>' . $row['title'] . '</h1>';
      echo '    <p>' . $row['description'] . '</p>';
      echo '    <div><strong>👁️ ' . $row['read_count'] . ' Reads</strong></div>';
      echo '    <div><strong>⭐ ' . $row['vote_count'] . ' Votes</strong></div>';
      echo '    <a href="baca.php?id=' . $row['id'] . '" class="btn btn-primary mt-3">Start Reading</a>';
      echo '  </div>';
      echo '</div>';
  } else {
      echo '<div class="alert alert-warning">Buku tidak ditemukan.</div>';
  }

  $conn->close();
  ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
