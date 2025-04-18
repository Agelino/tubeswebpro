<?php

?>



<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>kelompok 10</title>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/home.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
  <script src="https://kit.fontawesome.com/e7699726d6.js" crossorigin="anonymous"></script>
</head>
<body id="body">
<div class="container-fluid ">

  <!-- Sidebar - Desktop -->
  <div class="row">
    <nav class="col-lg-2 col-md-3 d-none d-md-block position-fixed navv">
      <div class="d-flex muncul">
        <i class="fa-solid fa-user me-2 mt-1"></i>
        <h5 class="mb-4"><span class="displayUsername"></span></h5>
      </div>
      <ul class="nav flex-column">
        <li class="nav-item mb-2">
          <i class="fa-solid fa-house"></i>
          <a href="index.php">HOME</a>
        </li>
        <li class="nav-item mb-2">
          <i class="fa-solid fa-book"></i>
          <a href="genre.php">Genre Buku</a>
          <i class="fa-solid fa-circle-down"></i>
          <div class="linear"></div>
        </li>
        <li class="nav-item">
          <i class="fa-solid fa-heart"></i>
          <a href="bukufavorit.php">Buku Favorit</a>
        </li>
        <li class="nav-item mt-2">
          <a href="myprofil.php">Profil Saya</a>
        </li>
      </ul>
    </nav>

    <!-- Header -->
    <header class="col-lg-10 col-md-9 ms-sm-auto px-5">
      <div><h1 class="nama" style="font-family:'Times New Roman', Times, serif">Safae</h1></div>
      <div class="search-box">
        <input class="search" type="text" placeholder="Cari Buku">
        <i class="fa-solid fa-magnifying-glass"></i>
      </div>
      <div>
        <button type="button" class="logout logoutButton">Logout</button>
      </div>
    </header>

    <!-- Navbar Mobile -->
    <nav class="navbar navbar-dark bg-dark d-md-none mb-3" style="margin-top: 5px;">
      <div class="container-fluid">
        <div class="d-flex muncul">
          <i class="fa-solid fa-user me-2 mt-1"></i>
          <h5 class="mb-4"><span class="displayUsername"></span></h5>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="nav">
            <li class="nav-item me-5">
              <i class="fa-solid fa-house"></i>
              <a href="index.php" target="_blank">HOME</a>
            </li>
            <li class="nav-item me-5">
              <i class="fa-solid fa-book"></i>
              <a href="genre.php">Genre Buku</a>
            </li>
            <li class="nav-item me-5">
              <i class="fa-solid fa-heart"></i>
              <a href="bukufavorit.php">Buku Favorit</a>
            </li>
            <li class="nav-item">
              <a href="myprofil.php">My Profil</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Main Content -->
    <main class="col-lg-10 col-md-9 ms-sm-auto px-4">
      <section class="konten">
        <div class="isi">
          <div class="semua">
            <h1 class="judul text-center mb-5 col">Berbagai buku anda akan temukan di sini </h1>
            <div class="row g-5 Atas " >
            <div class="col-md-6 col-sm-12 p-5" >
              <h2>Temukan buku yang bisa dibaca</h2>
              <h2>Setiap Saat</h2>
              <p>Sudah tersedia banyak buku dari berbagai genre menarik seperti horor, fiksi, komedi, dan lainnya yang siap untuk dibaca kapan saja.</p>
            </div>
            <div class="col-md-6 col-sm-12 ps-5 pt-3 " >
                <div class="row  ">
                  <div class="col-5  ">
                    <div class="satuan1">
                     <h3>21K+</h3>
                     <p>jumlah buku</p>
                    </div>
                  </div>

                  <div class="col-7 ">
                    <div class="satuan2 ">
                      <h3>51K+</h3>
                      <p>user yang aktif</p>
                     </div>

                  </div>
                  <div class="col-12 mb-5 mt-5">
                    <div class="satuan3 " style="display: flex; justify-content: center; ">
                      <img src="../img/home1.png" alt="" class="rounded-1" style="width: 300px;">
                     </div>

                  </div>

                </div>
            </div>
            </div>

           <div class="row  mt-4 pb-4" style="background-color: lightgrey; border-radius: 10px; box-shadow: 2px 2px 2px gray;">
           <h1 class="text-center m-5 text-dark">Ada banyak buku yang menarik</h1>
            <div class="col-md-3 col-sm-6">
              <div class="book-card">
                  <div class="image">
                      <img src="../img/horor12.jpeg" alt="" class="book-image" id="bookImage-12" onclick="openPopup()">
                  </div>
                  <p><strong>Janur Ireno</strong></p>
                  <div class="view-grid">
                      <i class="fa-solid fa-eye fa-1x">100k</i>
                      <i class="fa-solid fa-list"></i>
                  </div>
              </div>
            </div>

            

            <div class="col-md-3 col-sm-6">
              <div class="book-card">
                  <div class="image">
                      <img src="../img/horor1.jpeg" alt="" class="book-image" id="bookImage-1" onclick="openPopup()">
                  </div>
                  <p><strong>Sewu Dino</strong></p>
                  <div class="view-grid">
                      <i class="fa-solid fa-eye fa-1x">100k</i>
                      <i class="fa-solid fa-list"></i>
                  </div>
              </div>
          </div>

          <div class="col-md-3 col-sm-6">
            <div class="book-card">
                <div class="image">
                    <img src="../img/horor4.jpeg" alt="" class="book-image" id="bookImage-4" onclick="openPopup()">
                </div>
                <p><strong>Ranjat Kembang</strong></p>
                <div class="view-grid">
                    <i class="fa-solid fa-eye fa-1x">100k</i>
                    <i class="fa-solid fa-list"></i>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6">
          <div class="book-card">
              <div class="image">
                  <img src="../img/horor5.jpeg" alt="" class="book-image" id="bookImage-5" onclick="openPopup()">
              </div>
              <p><strong>Hilang Dalam</strong></p>
              <div class="view-grid">
                  <i class="fa-solid fa-eye fa-1x">100k</i>
                  <i class="fa-solid fa-list"></i>
              </div>
          </div>
        </div>


            </div>
           <div class="row  mt-4 pb-4 dikolom" style="background-color: lightgrey; border-radius: 10px; box-shadow: 2px 2px 2px gray; color: black;">
           <h1 class="text-center m-5 text-dark">Membaca buku adalah jembatan ilmu</h1>
            <div class="col-md-3 col-sm-6">
              <div class="book-card">
                  <div class="image">
                      <img src="../img/horor12.jpeg" alt="" class="book-image" id="bookImage-12" onclick="openPopup()">
                  </div>
                  <p><strong>Janur Ireno</strong></p>
                  <div class="view-grid">
                      <i class="fa-solid fa-eye fa-1x">100k</i>
                      <i class="fa-solid fa-list"></i>
                  </div>
              </div>
            </div>

            

            <div class="col-md-3 col-sm-6">
              <div class="book-card">
                  <div class="image">
                      <img src="../img/horor1.jpeg" alt="" class="book-image" id="bookImage-1" onclick="openPopup()">
                  </div>
                  <p><strong>Sewu Dino</strong></p>
                  <div class="view-grid">
                      <i class="fa-solid fa-eye fa-1x">100k</i>
                      <i class="fa-solid fa-list"></i>
                  </div>
              </div>
          </div>

          <div class="col-md-3 col-sm-6">
            <div class="book-card">
                <div class="image">
                    <img src="../img/horor4.jpeg" alt="" class="book-image" id="bookImage-4" onclick="openPopup()">
                </div>
                <p><strong>Ranjat Kembang</strong></p>
                <div class="view-grid">
                    <i class="fa-solid fa-eye fa-1x">100k</i>
                    <i class="fa-solid fa-list"></i>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6">
          <div class="book-card">
              <div class="image">
                  <img src="../img/horor5.jpeg" alt="" class="book-image" id="bookImage-5" onclick="openPopup()">
              </div>
              <p><strong>Hilang Dalam</strong></p>
              <div class="view-grid">
                  <i class="fa-solid fa-eye fa-1x">100k</i>
                  <i class="fa-solid fa-list"></i>
              </div>
          </div>
        </div>


            </div>
           <div class="row  mt-4 pb-4" style="background-color: lightgrey; border-radius: 10px; box-shadow: 2px 2px 2px gray;">
           <h1 class="text-center m-5 text-dark">Tersedia Beberpa banyak genre buku di halaman genre</h1>
           
            <div class="col-md-6">
              <!-- The video -->
              <video autoplay muted loop id="myVideo">
                <source src="../video/buku.mp4" type="video/mp4">
               </video>
            </div>
            <div class="col-md-6">
              <!-- The video -->
              <video autoplay muted loop id="myVideo">
                <source src="../video/buku.mp4" type="video/mp4">
               </video>
                </div>
              </div>
              </div> 
            </div>
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
                  <li><a href="#">Mission</a></li>
                  <li><a href="#">Team</a></li>
                  <li><a href="#">Newsletter</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-4 col-sm-4">
              <div class="tambahan">
                <a href="contactct.php"><h6>Contact</h6></a>
                <ul>
                  <li><a href="#">Fun</a></li>
                  <li><a href="#">Refund Policy</a></li>
                  <li><a href="#">FAQs</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-4 col-sm-4">
              <div class="tambahan">
                <h6>Social</h6>
                <ul>
                  <li><a href="#">Instagram</a></li>
                  <li><a href="#">Twitter</a></li>
                  <li><a href="#">YouTube</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr>
      <div class="d-flex bawah">
        <div><p>&copy; Webcoming</p></div>
        <p>Team Service</p>
        <div><a href="#body">Back to up</a></div>
      </div>
    </footer>

  </div> <!-- Container End -->
</div> <!-- Wrapper End -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="../js/main.js"></script>
</body>
</html>
