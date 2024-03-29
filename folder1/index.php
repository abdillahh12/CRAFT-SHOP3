<?php 
session_start();

if(!isset($_SESSION["login"])) {
  header("Location: index.php");
  exit;
}

?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>WEBSITE KUE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="../folder css/style.css" />
    <link rel="stylesheet" href="../folder css/lightbox.css" />
    <link rel="stylesheet" href="../folder css/magnify.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
  </head>
  <body id="home">
    <!-- NAVBAR -->
    <div class="container-fluid p-0 m-0">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="../folder foto/LOGO.png" width="50" height="50" class="rounded-circle me-2 mt-1 mb-3" />
            <p class="text-1 mt-3"><strong></strong></p>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item bag-1">
                <a class="nav-link" aria-current="page" href="#home">Home</a>
              </li>
              <li class="nav-item bag-2">
                <a class="nav-link" href="#about">About Us</a>
              </li>
              <li class="nav-item bag-3">
                <a class="nav-link" href="#product">Product</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#gallery">Gallery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="datapemesanan.php">Pesanan Saya</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- AKHIR NAVBAR -->

      <!-- Carousel -->

      <div class="container-fluid container-1 p-0 m-0">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active carousel-1">
              <img src="../folder foto/foto 7.jpg" class="w-100" alt="..." />
              <div class="carousel-caption">
                <div class="container">
                  <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                      <!-- <h1>Welcome to <strong>Craft Shop</strong></h1>
                  <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores rerum totam ipsa! Sint facere nisi recusandae vero, quisquam tempore unde molestias dolore veniam doloremque ex magni voluptatum id ipsa incidunt quis
                    illum! Adipisci eveniet inventore facilis non accusamus sint alias saepe molestias cupiditate cum corporis consectetur reiciendis sed, quaerat ut.
                  </p>
                  <a class="btn btn-lg btn-info" href="#product" role="button">Beli sekarang</a> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item carousel-2">
              <img src="../folder foto/IMG_20230421_071332.jpg" class="w-100" alt="..." />
              <div class="carousel-caption">
                <div class="container">
                  <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                      <!-- <h1>Welcome to <strong>Craft Shop</strong></h1>
                  <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores rerum totam ipsa! Sint facere nisi recusandae vero, quisquam tempore unde molestias dolore veniam doloremque ex magni voluptatum id ipsa incidunt quis
                    illum! Adipisci eveniet inventore facilis non accusamus sint alias saepe molestias cupiditate cum corporis consectetur reiciendis sed, quaerat ut.
                  </p>
                  <a class="btn btn-lg btn-info" href="#product" role="button">Beli sekarang</a> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
          <path
            fill="#ffff"
            fill-opacity="1"
            d="M0,224L48,208C96,192,192,160,288,170.7C384,181,480,235,576,240C672,245,768,203,864,202.7C960,203,1056,245,1152,240C1248,235,1344,181,1392,154.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
          ></path>
        </svg>
      </div>

      <!-- Akhir Carousel -->

      <!-- About -->
      <section id="about">
        <div class="container container-5" data-aos="fade-down">
          <div class="row text-center mb-3">
            <div class="col">
              <h2>About Us</h2>
            </div>
          </div>
          <div class="row d-flex justify-content-center fs-5 text-center">
            <div class="col-4">
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur facilis nobis at distinctio minima, cupiditate quis? Hic quae suscipit magni.</p>
            </div>
            <div class="col-4">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque nihil possimus, maxime, tempore quo officiis fuga harum nesciunt quas alias ipsum ad aut, ipsa et.</p>
            </div>
          </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
          <path
            fill="#aeaeae"
            fill-opacity="1"
            d="M0,128L34.3,133.3C68.6,139,137,149,206,154.7C274.3,160,343,160,411,138.7C480,117,549,75,617,74.7C685.7,75,754,117,823,138.7C891.4,160,960,160,1029,170.7C1097.1,181,1166,203,1234,186.7C1302.9,171,1371,117,1406,90.7L1440,64L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"
          ></path>
        </svg>
      </section>

      <!-- Card -->
      <section id="product">
        <div class="container conn-1">
          <div class="row row-container ms-4 me-4">
            <div class="judul-produk">
              <h3 class="text-3 ms-4 me-4 p-2 text-center mt-2">PRODUCT</h3>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
              <div class="card card-1">
                <img src="../folder foto/foto 5.jpg" height="140px" />
                <div class="card-body text-center">
                  <h5 class="card-title">Kue Cucur</h5>
                  <p class="card-text">Rp. 4.000</p>
                  <a href="../folder produk/kue_cucur.php" class="btn btn-dark d-grid">Lihat Produk</a>
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
              <div class="card card-1">
                <img src="../folder foto/foto1.jpg" height="140px" />
                <div class="card-body text-center">
                  <h5 class="card-title">Kue Klepon</h5>
                  <p class="card-text">Rp. 2.000</p>
                  <a href="../folder produk/kue_klepon.php" class="btn btn-dark d-grid">Lihat Produk</a>
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
              <div class="card card-1">
                <img src="../folder foto/foto2.jpg" height="140px" />
                <div class="card-body text-center">
                  <h5 class="card-title">Onde-Onde</h5>
                  <p class="card-text">Rp. 3.500</p>
                  <a href="../folder produk/kue_ondeonde.php" class="btn btn-dark d-grid">Lihat Produk</a>
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
              <div class="card card-1">
                <img src="../folder foto/foto3.jpg" height="140px" />
                <div class="card-body text-center">
                  <h5 class="card-title">Kue Lemper</h5>
                  <p class="card-text">Rp. 2.500</p>
                  <a href="../folder produk/kue_lemper.php" class="btn btn-dark d-grid">Lihat Produk</a>
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
              <div class="card card-1">
                <img src="../folder foto/foto4.jpg" height="140px" />
                <div class="card-body text-center">
                  <h5 class="card-title">Kue Talam</h5>
                  <p class="card-text">Rp. 3.000</p>
                  <a href="../folder produk/kue_talam.php" class="btn btn-dark d-grid">Lihat Produk</a>
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
              <div class="card card-1">
                <img src="../folder foto/foto5.jpg" height="140px" />
                <div class="card-body text-center">
                  <h5 class="card-title">Kue Serabi</h5>
                  <p class="card-text">Rp. 2.000</p>
                  <a href="../folder produk/kue_serabi.php" class="btn btn-dark d-grid">Lihat Produk</a>
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-3">
              <div class="card card-1">
                <img src="../folder foto/foto6.jpg" height="140px" />
                <div class="card-body text-center">
                  <h5 class="card-title">Kue Lapis</h5>
                  <p class="card-text">Rp. 2.000</p>
                  <a href="../folder produk/kue_lapis.php" class="btn btn-dark d-grid">Lihat Produk</a>
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-3 mb-2">
              <div class="card card-1">
                <img src="../folder foto/foto7.jpg" height="140px" />
                <div class="card-body text-center">
                  <h5 class="card-title">Kue Lumpur</h5>
                  <p class="card-text">Rp. 2.500</p>
                  <a href="../folder produk/kue_lumpur.php" class="btn btn-dark d-grid">Lihat Produk</a>
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-3 mb-3">
              <div class="card card-1">
                <img src="../folder foto/foto8.jpg" height="140px" />
                <div class="card-body text-center">
                  <h5 class="card-title">Kue Jentik Manis</h5>
                  <p class="card-text">Rp. 3.000</p>
                  <a href="../folder produk/kue_jentikmanis.php" class="btn btn-dark d-grid">Lihat Produk</a>
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-3">
              <div class="card card-1">
                <img src="../folder foto/foto9.jpg" height="140px" />
                <div class="card-body text-center">
                  <h5 class="card-title">Kue Mangkok</h5>
                  <p class="card-text">Rp. 3.500</p>
                  <a href="../folder produk/kue_mangkok.php" class="btn btn-dark d-grid">Lihat Produk</a>
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-3">
              <div class="card card-1">
                <img src="../folder foto/foto10.jpg" height="140px" />
                <div class="card-body text-center">
                  <h5 class="card-title">Kue Lapis Legit</h5>
                  <p class="card-text">Rp. 2.000</p>
                  <a href="../folder produk/kue_lapislegit.php" class="btn btn-dark d-grid">Lihat Produk</a>
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-3 mb-2">
              <div class="card card-1">
                <img src="../folder foto/foto11.jpg" height="140px" />
                <div class="card-body text-center">
                  <h5 class="card-title">Kue Mendut</h5>
                  <p class="card-text">Rp. 2.500</p>
                  <a href="../folder produk/kue_mendut.php" class="btn btn-dark d-grid">Lihat Produk</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
          <path
            fill="#ffff"
            fill-opacity="1"
            d="M0,288L48,250.7C96,213,192,139,288,112C384,85,480,107,576,138.7C672,171,768,213,864,202.7C960,192,1056,128,1152,112C1248,96,1344,128,1392,144L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
          ></path>
        </svg>
      </section>

      <!-- Gallery -->
      <section id="gallery">
        <div class="container-fluid">
          <div class="judul-produk">
            <h2 class="text-2 ms-4 me-4 p-2 text-center">Gallery</h2>
          </div>
          <div class="row me-2 ms-2">
            <div class="col-sm-4 mt-3">
              <a href="../folder foto/media-profile-NRtWpgpVDaw-unsplash.jpg" data-lightbox="models">
                <img src="../folder foto/media-profile-NRtWpgpVDaw-unsplash.jpg" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-left" data-aos-duration="1000" />
              </a>
            </div>
            <div class="col-sm-4 mt-3">
              <a href="../folder foto/mink-mingle-qZ5lPCPvdXE-unsplash.jpg" data-lightbox="models">
                <img src="../folder foto/mink-mingle-qZ5lPCPvdXE-unsplash.jpg" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-left" data-aos-duration="1000" />
              </a>
            </div>
            <div class="col-sm-4 mt-3">
              <a href="../folder foto/fotoooo.jpg" data-lightbox="models">
                <img src="../folder foto/fotoooo.jpg" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-left" data-aos-duration="3000" />
              </a>
            </div>
            <div class="col-sm-4 mt-3">
              <a href="../folder foto/sera-iZgQKxuMRHc-unsplash.jpg" data-lightbox="models">
                <img src="../folder foto/sera-iZgQKxuMRHc-unsplash.jpg" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-right" data-aos-duration="1000" />
              </a>
            </div>
            <div class="col-sm-4 mt-3">
              <a href="../folder foto/toa-heftiba-S1Z_Cudra0k-unsplash.jpg" data-lightbox="models">
                <img src="../folder foto/toa-heftiba-S1Z_Cudra0k-unsplash.jpg" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-right" data-aos-duration="2000" />
              </a>
            </div>
            <div class="col-sm-4 mt-3">
              <a href="../folder foto/foto 11.jpg" data-lightbox="models">
                <img src="../folder foto/foto 11.jpg" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-right" data-aos-duration="3000" />
              </a>
            </div>
            <div class="col-sm-4 mt-3">
              <a href="../folder foto/foto 12.jpg" data-lightbox="models">
                <img src="../folder foto/foto 12.jpg" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-left" data-aos-duration="1000" />
              </a>
            </div>
            <div class="col-sm-4 mt-3">
              <a href="../folder foto/foto 13.jpg" data-lightbox="models">
                <img src="../folder foto/foto 13.jpg" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-left" data-aos-duration="2000" />
              </a>
            </div>
            <div class="col-sm-4 mt-3">
              <a href="../folder foto/foto 14.jpg" data-lightbox="models">
                <img src="../folder foto/foto 14.jpg" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-left" data-aos-duration="3000" />
              </a>
            </div>
            <div class="col-sm-4 mt-3" data-lightbox="models">
              <a href="foto 15.jpg" data-lightbox="models">
                <img src="foto 15.jpg" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-right" data-aos-duration="1000" />
              </a>
            </div>
            <div class="col-sm-4 mt-3">
              <a href="../folder foto/foto 16.jpg" data-lightbox="models">
                <img src="../folder foto/foto 16.jpg" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-right" data-aos-duration="2000" />
              </a>
            </div>
            <div class="col-sm-4 mt-3">
              <a href="../folder foto/foto 17.jpg" data-lightbox="models">
                <img src="../folder foto/foto 17.jpg" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-right" data-aos-duration="3000" />
              </a>
            </div>
            <div class="col-sm-4 mt-3">
              <a href="../folder foto/foto 18.jpg" data-lightbox="models">
                <img src="../folder foto/foto 18.jpg" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-left" data-aos-duration="1000" />
              </a>
            </div>
            <div class="col-sm-4 mt-3">
              <a href="../folder foto/foto 19.jpg" data-lightbox="models">
                <img src="../folder foto/foto 19.jpg" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-left" data-aos-duration="2000" />
              </a>
            </div>
            <div class="col-sm-4 mt-3">
              <a href="../folder foto/foto 20.jpg" data-lightbox="models">
                <img src="../folder foto/foto 20.jpg" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-left" data-aos-duration="3000" />
              </a>
            </div>
            <div class="col-sm-4 mt-3">
              <a href="../folder foto/foto 21.jpg" data-lightbox="models">
                <img src="../folder foto/foto 21.jpg" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-right" data-aos-duration="1000" />
              </a>
            </div>
            <div class="col-sm-4 mt-3">
              <a href="../folder foto/foto 22.jpg" data-lightbox="models">
                <img src="../folder foto/foto 22.jpg" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-right" data-aos-duration="2000" />
              </a>
            </div>
            <div class="col-sm-4 mt-3">
              <a href="../folder foto/foto 23.jpg" data-lightbox="models">
                <img src="../folder foto/foto 23.jpg" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-right" data-aos-duration="3000" />
              </a>
            </div>
            <div class="col-sm-4 mt-3">
              <a href="../folder foto/foto 24.jpg" data-lightbox="models">
                <img src="../folder foto/foto 24.jpg" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-left" data-aos-duration="1000" />
              </a>
            </div>
            <div class="col-sm-4 mt-3">
              <a href="../folder foto/foto 25.jpg" data-lightbox="models">
                <img src="../folder foto/foto 25.jpg" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-left" data-aos-duration="2000" />
              </a>
            </div>
            <div class="col-sm-4 mt-3">
              <a href="../folder foto/katarzyna-grabowska-GZ0TGTwiCiQ-unsplash.jpg" data-lightbox="models">
                <img src="../folder foto/katarzyna-grabowska-GZ0TGTwiCiQ-unsplash.jpg" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-left" data-aos-duration="3000" />
              </a>
            </div>
            <div class="col-sm-4 mt-3">
              <a href="../folder foto/foto 26.jpg" data-lightbox="models">
                <img src="../folder foto/foto 26.jpg" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-left" data-aos-duration="2000" />
              </a>
            </div>
            <div class="col-sm-4 mt-3">
              <a href="../folder foto/foto 27.jpg" data-lightbox="models">
                <img src="../folder foto/foto 27.jpg" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-left" data-aos-duration="2000" />
              </a>
            </div>
            <div class="col-sm-4 mt-3">
              <a href="../folder foto/foto 28.jpg" data-lightbox="models">
                <img src="../folder foto/foto 28.jpg" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-left" data-aos-duration="2000" />
              </a>
            </div>
            <div class="col-sm-4 mt-3">
              <a href="../folder foto/foto 29.jpg" data-lightbox="models">
                <img src="../folder foto/foto 29.jpg" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-left" data-aos-duration="2000" />
              </a>
            </div>
            <div class="col-sm-4 mt-3">
              <a href="../folder foto/foto 30.jpg" data-lightbox="models">
                <img src="../folder foto/foto 30.jpg" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-left" data-aos-duration="2000" />
              </a>
            </div>
            <div class="col-sm-4 mt-3">
              <a href="../folder foto/foto 31.jpg" data-lightbox="models">
                <img src="../folder foto/foto 31.jpg" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-left" data-aos-duration="2000" />
              </a>
            </div>
            <div class="col-sm-4 mt-3">
              <a href="../folder foto/foto 32.jpg" data-lightbox="models">
                <img src="../folder foto/foto 32.jpg" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-left" data-aos-duration="2000" />
              </a>
            </div>
            <div class="col-sm-4 mt-3">
              <a href="../folder foto/foto 33.jpg" data-lightbox="models">
                <img src="../folder foto/foto 33.jpg" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-left" data-aos-duration="2000" />
              </a>
            </div>
            <div class="col-sm-4 mt-3">
              <a href="../folder foto/foto 34.jpg" data-lightbox="models">
                <img src="../folder foto/foto 34.jpg" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-left" data-aos-duration="2000" />
              </a>
            </div>
            <div class="col-sm-4 mt-3">
              <a href="../folder foto/foto 35.jpg" data-lightbox="models">
                <img src="../folder foto/foto 35.jpg" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-left" data-aos-duration="2000" />
              </a>
            </div>
            <div class="col-sm-4 mt-3">
              <a href="../folder foto/foto 36.jpg" data-lightbox="models">
                <img src="../folder foto/foto 36.jpg" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-left" data-aos-duration="2000" />
              </a>
            </div>
            <div class="col-sm-4 mt-3">
              <a href="../folder foto/foto 37.jpg" data-lightbox="models">
                <img src="../folder foto/foto 37.jpg" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-left" data-aos-duration="2000" />
              </a>
            </div>
          </div>
        </div>
      </section>
      <!-- Akhir gallery -->

      <!-- contact form -->
      <section id="contact">
        <div class="container mt-0">
          <div class="row text-center mb-3">
            <div class="col">
              <h2>Hubungi Kami</h2>
            </div>
          </div>
          <div class="row justify-content-center mt-5">
            <div class="col-md-6">
              <form name="Craft-Shop-Contact">
                <div class="alert alert-success alert-dismissible fade show d-none my-alert" role="alert">
                  <strong>Terimakasih!</strong> Pesan anda sudah kami terima.
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <div class="mb-3">
                  <label for="name" class="form-label">Nama Lengkap</label>
                  <input type="text" class="form-control" id="name" aria-describedby="name" name="nama" />
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="email" aria-describedby="email" name="email" />
                </div>
                <div class="mb-3">
                  <label for="nomor" class="form-label">No. Handphone</label>
                  <input type="text" class="form-control" id="email" aria-describedby="text" name="no handphone" />
                </div>
                <div class="mb-3">
                  <label for="pesan" class="form-label">Pesan</label>
                  <textarea class="form-control" id="pesan" rows="3" name="pesan"></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-kirim mb-5">Kirim</button>
                <button class="btn btn-primary btn-loading d-none" type="button" disabled>
                  <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                  Loading...
                </button>
              </form>
            </div>
          </div>
        </div>
      </section>

      <!-- Akhir contact form -->

      <!-- Footer -->
      <footer class="p-5 mt-5" style="background-color: #aeaeae">
        <div class="container">
          <div class="row">
            <div class="col md-6 text-md-start text-center">
              <a href="#" style="text-decoration: none">
                <img src="../folder foto/LOGO.png" style="width: 60px" class="rounded-circle" />
              </a>
              <span class="ps-1">Copyright @2023 | Created with love by <a href="https://www.instagram.com/m_abdillah_234/" class="text-dark fw-bold">Muhammad Abdillah Asyhar</a></span>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- Akhir Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <!-- Link AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

    <!-- Link GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>

    <!-- Link Text Plugin -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/TextPlugin.min.js"></script>

    <script src="../folder js/lightbox-plus-jquery.js"></script>
    <script src="index.js"></script>

    <script src="../folder js/jquery.magnify.js"></script>
    <script>
      $(document).ready(function () {
        $(".img-thumbnail").magnify();
      });
    </script>

    <script type="text/javascript" src="../folder js/vanilla-tilt.babel.js"></script>
    <script>
      VanillaTilt.init(document.querySelectorAll(".card-1"), {
        max: 20,
        speed: 300,
      });
    </script>

    <script>
      // Navbar text
      gsap.registerPlugin(TextPlugin);
      gsap.to(".text-1", { duration: 4, delay: 0.5, text: "CRAFT SHOP" });

      gsap.from(".card-produk", { duration: 2, rotateY: 360, opacity: 0 });
    </script>

    <script>
      const scriptURL = "https://script.google.com/macros/s/AKfycbxJVzQ4zQJZVfaaL3cJoaq9sBTj0nzQBlHb8IR8TUU46u9BgvL5xzIGDussFe6RgzQV6A/exec";
      const form = document.forms["Craft-Shop-Contact"];
      const btnKirim = document.querySelector(".btn-kirim");
      const btnLoading = document.querySelector(".btn-loading");
      const myAlert = document.querySelector(".my-alert");

      form.addEventListener("submit", (e) => {
        e.preventDefault();
        btnLoading.classList.toggle("d-none");
        btnKirim.classList.toggle("d-none");
        fetch(scriptURL, { method: "POST", body: new FormData(form) })
          .then((response) => {
            btnLoading.classList.toggle("d-none");
            btnKirim.classList.toggle("d-none");
            myAlert.classList.toggle("d-none");
            form.reset();
            console.log("Success!", response);
          })
          .catch((error) => console.error("Error!", error.message));
      });
    </script>
  </body>
</html>
