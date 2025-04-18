<?php
  session_start();
  // Koneksi ke database
  include('db_bukufav.php'); 

  // Proses logout
  if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header("Location: login.php"); // Redirect ke halaman login setelah logout
  }

  // Proses login
  if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query untuk mengambil data pengguna dari database
    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);
    
    if (mysqli_num_rows($result) > 0) {
      $_SESSION['username'] = $username;
      header("Location: index.php"); // Redirect ke halaman utama setelah login sukses
    } else {
      echo "Username atau password salah!";
    }
  }
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kelompok 10</title>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/bukufavorit.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
</head>
<body id="body">
  <div class="container-fluid">

    <!-- Navbar untuk ukuran Hp -->
    <div class="row">
      <!-- navbar untuk ukuran laptop -->
      <nav class="col-lg-2 col-md-3 d-none d-md-block position-fixed navv">
        <div class="d-flex muncul">
          <i class="fa-solid fa-user me-2 mt-1"></i>
          <h5 class="mb-4"><span class="displayUsername"><?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ''; ?></span></h5>
        </div>
        <ul class="nav flex-column">
          <li class="nav-item mb-2">
            <i class="fa-solid fa-house"></i>
            <a class="" href="index.php">HOME</a>
          </li>
          <li class="nav-item mb-2">
            <i class="fa-solid fa-book"></i>
            <a class="" href="genre.php">Genre Buku</a>
          </li>
          <li class="nav-item">
            <i class="fa-solid fa-heart"></i>
            <a class="" href="bukufavorit.php">Buku Favorit</a>
          </li>
          <li class="nav-item mt-2">
            <a href="myprofil.php">My Profil</a>
          </li>
        </ul>
      </nav>

      <!-- Header -->
      <header class="col-lg-10 col-md-9 ms-sm-auto px-5">
        <div>
          <h1>Welcome to Website</h1>
        </div>
        <div>
          <input class="search" type="text" placeholder="Search Books">
        </div>
        <div>
          <form action="" method="post">
            <button type="submit" name="logout" class="logout">Logout</button>
          </form>
        </div>
      </header>

      <!-- Main Content -->
      <main class="col-lg-10 col-md-9 ms-sm-auto px-4">
        <section class="konten">
          <div class="isi">
            <div class="container">
              <h1>Pilih Buku Favorit Anda</h1>

              <!-- Daftar Buku -->
              <section id="availableBooks" class="book-list">
                <?php
                  // Query untuk menampilkan daftar buku dari database
                  $query = "SELECT * FROM books";
                  $result = mysqli_query($conn, $query);
                  while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="book-card" data-title="' . $row['title'] . '" data-author="' . $row['author'] . '">
                            <img src="../img/' . $row['image'] . '" alt="Cover ' . $row['title'] . '">
                            <div class="book-info">
                              <h3>' . $row['title'] . '</h3>
                              <p>Oleh: ' . $row['author'] . '</p>
                              <button class="add-favorite">Tambah ke Favorit</button>
                            </div>
                          </div>';
                  }
                ?>
              </section>

              <h2>Daftar Buku Favorit</h2>
              <section id="favoriteBooks" class="book-list">
                <!-- Daftar buku favorit -->
              </section>
            </div>
          </div>
        </section>
      </main>

      <!-- Footer -->
      <footer class="col-lg-10 col-md-9 ms-sm-auto ms-md-auto px-4">
        <div class="row g-3">
          <div class="col-md-3 text-center">
            <div class="mt-5">
              <img src="../img/logo.png" alt="Logo" class="img-fluid" style="max-width: 200px; height: auto;">
            </div>
          </div>
          <div class="col-md-9">
            <div class="row g-5">
              <div class="col-md-4 text-center"></div>
              <div class="col-md-4 text-center"></div>
              <div class="col-md-4 text-center"></div>
            </div>

            <div class="row g-3 mt-4">
              <h1 class="text-center mt-3 mb-3">Closed Now</h1>
              <div class="col-md-4 col-sm-4">
                <div class="tambahan">
                  <a href="about.php"><h6>About Us</h6></a>
                  <ul>
                    <li><a href="">Mission</a></li>
                    <li><a href="">Team</a></li>
                    <li><a href="">Newsletter</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="tambahan">
                  <a href="contact.php"><h6>Contact</h6></a>
                  <ul>
                    <li><a href="">Fun</a></li>
                    <li><a href="">Refund Policy</a></li>
                    <li><a href="">FAQs</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="tambahan">
                  <h6>Social</h6>
                  <ul>
                    <li><a href="">Instagram</a></li>
                    <li><a href="">Twitter</a></li>
                    <li><a href="">YouTube</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <hr>
        <div class="d-flex bawah">
          <div>
            <p>Copyright &copy; Webcoming</p>
          </div>
          <p>Team Service</p>
          <div>
            <a href="#body">Back to up</a>
          </div>
        </div>
      </footer>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="../js/main.js"></script>
  <script src="../js/bukufavorit.js"></script>
</body>
</html>
