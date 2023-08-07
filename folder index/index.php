<?php 
session_start();

if(!isset($_SESSION["login"])) {
  header("Location: ../folder_login/index.php");
  exit;
}

$connect = mysqli_connect("localhost", "root", "", "toko_kue2");

if(isset($_POST["kirim"])) {

  $nama = $_POST["nama"];
  $email = $_POST["email"];
  $no_hp = $_POST["no_hp"];
  $pesan = $_POST["pesan"];
  $tanggal = date("Y-m-d");


  // insert data nya ke database
  $query = "INSERT INTO contact VALUES
  ('', '$nama', '$email', '$no_hp', '$pesan', '$tanggal')";

  mysqli_query($connect, $query);


  // cek apakah data berhasil dikirimkan atau tidak

  if(mysqli_affected_rows($connect) > 0) {
    echo "<script>alert('Pesan berhasil terkirim')</script>";
  } else {
    echo mysqli_error($connect);
  }
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
    <link rel="stylesheet" href="../folder css/styleindex.css" />
    <link rel="stylesheet" href="../folder css/lightbox.css" />
    <link rel="stylesheet" href="../folder css/magnify.css" />
    <link rel="stylesheet" href="stylemarquee1.css">
    <link rel="stylesheet" href="../fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../folder css/product.css">
    <link rel="stylesheet" href="../folder_plugin/css/lightgallery.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT"crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Alkatra:wght@700&family=Anton&family=Geologica:wght@500&family=Lobster&family=Mukta:wght@200;300;400;500;600;700;800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
  </head>
  <body id="home">
    <!-- NAVBAR -->
    <div class="container-fluid p-0 m-0">
      <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: black;">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="../folder foto/Logo.png" width="70" height="70" class="rounded-circle me-2 mt-0 mb-2" />
            <p class="text-1 mt-4"><strong></strong></p>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto mt-2 mb-1">
              <li class="nav-item bag-1">
                <a class="nav-link" aria-current="page" href="#home">Home</a>
              </li>
              <li class="nav-item bag-2">
                <a class="nav-link" href="#about">About Us</a>
              </li>
              <li class="nav-item bag-3">
                <a class="nav-link" href="#product">Product</a>
              </li>
              <li class="nav-item bag-4">
                <a class="nav-link" href="#gallery">Gallery</a>
              </li>
              <li class="nav-item bag-5">
                <a class="nav-link" href="#contact">Contact</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Log-out
                </a>
                  <ul class="dropdown-menu bag-6">
                    <li><a class="dropdown-item" href="../folder_login/logout.php"><i class="fa fa-sign-out" aria-hidden="true">Keluar</i></a></li>
                  </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- AKHIR NAVBAR -->

      <!-- Carousel -->
      <div class="container-fluid container-1 p-0 m-0">
        <div id="carouselExampleCaptions" class="carousel slide mt-2" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active carousel-1">
              <img src="../folder foto/foto 7.jpg" class="w-100" alt="..." />
              <div class="carousel-caption carousel-gambar-1 d-none d-md-block fs-5"></div>
            </div>
            <div class="carousel-item carousel-2">
              <img src="../folder foto/IMG_20230421_071332.jpg" class="w-100" alt="..." />
              <div class="carousel-caption d-none d-md-block"></div>
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
      </div>

      <!-- Akhir Carousel -->

      <!-- About -->
      <section id="about">
        <div class="container container-5" data-aos="fade-down">
          <div class="row text-center mb-3">
            <div class="col">
              <h2 class="text-about">About Us</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-md-6">
              <img src="../folder foto/jonathan-borba-5G9uIkAXLSc-unsplash.jpg" height="400px" width="600px">
            </div>
            <div class="col-12 col-md-6 align-self-center">
              <p class="text-about-2">
                <?php echo "Selamat datang ". $_SESSION["username"] . " ";?>di toko Kami! kami bangga dengan menghadirkan kelezatan dan 
                keindahan dalam setiap gigitan kue kami. kami memiliki visi menjadi toko kue yang unggul dengan citarasa. 
                dalam usaha kami, kami selalu mengutamakan
                kepuasan konsumen, kualitas, gizi dan juga keindahan kue yang Anda pesan. 
                serta pelayanan dari crew kami yang sangat ramah terhadap para konsumen kami. 
                Terimakasih atas kepercayaan Anda dan selamat menikmati pengalaman
                menikmati kue kami! Salam manis, Tim CraftShop
              </p>
            </div>
          </div>
        </div>
      </section>

      <!-- Akhir About -->


      <!-- card -->
    <section id="product">
      <div class="container mt-5">
        <div class="row text-center mb-5">
            <div class="col">
              <h2 class="text-product">PRODUCT</h2>
            </div>
        </div>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner" class="inner-carousel">
            <div class="carousel-item active" class="item-carousel">
              <div class="row d-flex justify-content-center ms-4 me-4">
                <div class="col-lg-2 col-md-2 col-sm-4 col-3 mt-2">
                  <div class="card card-1">
                    <img src="../folder foto/foto 5.jpg" height="180px"/>
                    <div class="card-body text-center">
                      <h5 class="card-title">Kue Cucur</h5>
                      <p class="card-text">Rp. 4.000</p>
                      <a href="../folder produk/kue_cucur.php" class="btn btn-dark d-grid">Lihat Produk</a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-4 col-3 mt-2">
                  <div class="card card-1">
                    <img src="../folder foto/foto1.jpg" height="180px"/>
                    <div class="card-body text-center">
                      <h5 class="card-title">Kue Klepon</h5>
                      <p class="card-text">Rp. 2.000</p>
                      <a href="../folder produk/kue_klepon.php" class="btn btn-dark d-grid">Lihat Produk</a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-4 col-3 mt-2">
                  <div class="card card-1">
                    <img src="../folder foto/foto2(2).png" height="180px"/>
                    <div class="card-body text-center">
                      <h5 class="card-title">Onde-Onde</h5>
                      <p class="card-text">Rp. 3.500</p>
                      <a href="../folder produk/kue_ondeonde.php" class="btn btn-dark d-grid">Lihat Produk</a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-4 col-3 mt-2">
                  <div class="card card-1">
                    <img src="../folder foto/foto3(3).png" height="180px"/>
                    <div class="card-body text-center">
                      <h5 class="card-title">Kue Lemper</h5>
                      <p class="card-text">Rp. 2.500</p>
                      <a href="../folder produk/kue_lemper.php" class="btn btn-dark d-grid">Lihat Produk</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row d-flex justify-content-center ms-4 me-4">
                <div class="col-lg-2 col-md-2 col-sm-4 col-3 mt-2">
                  <div class="card card-1">
                    <img src="../folder foto/foto4(4).png" height="180px"/>
                    <div class="card-body text-center">
                      <h5 class="card-title">Kue Talam</h5>
                      <p class="card-text">Rp. 3.000</p>
                      <a href="../folder produk/kue_talam.php" class="btn btn-dark d-grid">Lihat Produk</a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-4 col-3 mt-2">
                  <div class="card card-1">
                    <img src="../folder foto/foto5(2).jpg" height="180px"/>
                    <div class="card-body text-center">
                      <h5 class="card-title">Kue Serabi</h5>
                      <p class="card-text">Rp. 2.000</p>
                      <a href="../folder produk/kue_serabi.php" class="btn btn-dark d-grid">Lihat Produk</a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-4 col-3 mt-2">
                  <div class="card card-1">
                    <img src="../folder foto/foto6(6).png" height="180px"/>
                    <div class="card-body text-center">
                      <h5 class="card-title">Kue Lapis</h5>
                      <p class="card-text">Rp. 2.000</p>
                      <a href="../folder produk/kue_lapis.php" class="btn btn-dark d-grid">Lihat Produk</a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-4 col-3 mt-2">
                  <div class="card card-1">
                    <img src="../folder foto/foto7(7).png" height="180px"/>
                    <div class="card-body text-center">
                      <h5 class="card-title">Kue Lumpur</h5>
                      <p class="card-text">Rp. 2.500</p>
                      <a href="../folder produk/kue_lumpur.php" class="btn btn-dark d-grid">Lihat Produk</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row ms-4 me-4 d-flex justify-content-center">
                <div class="col-lg-2 col-md-2 col-sm-4 col-3 mt-2">
                  <div class="card card-1">
                    <img src="../folder foto/foto8(8).png" height="180px"/>
                    <div class="card-body text-center">
                      <h5 class="card-title">Kue Jentik</h5>
                      <p class="card-text">Rp. 3.000</p>
                      <a href="../folder produk/kue_jentikmanis.php" class="btn btn-dark d-grid">Lihat Produk</a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-4 col-3 mt-2">
                  <div class="card card-1">
                    <img src="../folder foto/foto9(9).png" height="180px"/>
                    <div class="card-body text-center">
                      <h5 class="card-title">Kue Mangkok</h5>
                      <p class="card-text">Rp. 3.500</p>
                      <a href="../folder produk/kue_mangkok.php" class="btn btn-dark d-grid">Lihat Produk</a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-4 col-3 mt-2">
                  <div class="card card-1">
                    <img src="../folder foto/foto10(10).png" height="180px"/>
                    <div class="card-body text-center">
                      <h5 class="card-title">Kue Lapis Legit</h5>
                      <p class="card-text">Rp. 2.000</p>
                      <a href="../folder produk/kue_lapislegit.php" class="btn btn-dark d-grid">Lihat Produk</a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-4 col-3 mt-2">
                  <div class="card card-1">
                    <img src="../folder foto/foto11(11).png" height="180px"/>
                    <div class="card-body text-center">
                      <h5 class="card-title">Kue Mendut</h5>
                      <p class="card-text">Rp. 2.500</p>
                      <a href="../folder produk/kue_mendut.php" class="btn btn-dark d-grid">Lihat Produk</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>
      </div>
    </section>

      <!-- Gallery -->
      <section id="gallery">
        <div class="container-fluid">
          <div class="judul-produk">
            <h2 class="text-2 ms-4 me-4 p-2 text-center mb-5">Gallery</h2>
          </div>
          <div class="row me-2 ms-2" id="lightgallery">
            <div class="col-sm-4 mt-3" data-src="../folder foto gallery/kue cucur/foto3.jpg">
              <a href="../folder foto gallery/kue cucur/foto3.jpg">
                <img src="../folder foto gallery/kue cucur/foto3.jpg" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-left" data-aos-duration="1000" />
              </a>
            </div>
            <div class="col-sm-4 mt-3" data-src="../folder foto gallery/kue cucur/foto2.jpg">
              <a href="../folder foto gallery/kue cucur/foto2.jpg">
                <img src="../folder foto gallery/kue cucur/foto2.jpg" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-left" data-aos-duration="1000" />
              </a>
            </div>
            <div class="col-sm-4 mt-3" data-src="../folder foto gallery/kue cucur/foto4.jpg">
              <a href="../folder foto gallery/kue cucur/foto4.jpg">
                <img src="../folder foto gallery/kue cucur/foto4.jpg" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-left" data-aos-duration="3000" />
              </a>
            </div>
            <div class="col-sm-4 mt-3" data-src="../folder foto gallery/kue klepon/foto1.png">
              <a href="../folder foto gallery/kue klepon/foto1.png">
                <img src="../folder foto gallery/kue klepon/foto1.png" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-right" data-aos-duration="1000" />
              </a>
            </div>
            <div class="col-sm-4 mt-3" data-src="../folder foto gallery/kue klepon/foto2.png">
              <a href="../folder foto gallery/kue klepon/foto2.png">
                <img src="../folder foto gallery/kue klepon/foto2.png" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-right" data-aos-duration="2000" />
              </a>
            </div>
            <div class="col-sm-4 mt-3" data-src="../folder foto gallery/kue klepon/foto3.png">
              <a href="../folder foto gallery/kue klepon/foto3.png">
                <img src="../folder foto gallery/kue klepon/foto3.png" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-right" data-aos-duration="3000" />
              </a>
            </div>
            <div class="col-sm-4 mt-3" data-src="../folder foto gallery/kue onde-onde/foto1.png">
              <a href="../folder foto gallery/kue onde-onde/foto1.png">
                <img src="../folder foto gallery/kue onde-onde/foto1.png" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-left" data-aos-duration="1000" />
              </a>
            </div>
            <div class="col-sm-4 mt-3" data-src="../folder foto gallery/kue onde-onde/foto2.png">
              <a href="../folder foto gallery/kue onde-onde/foto2.png">
                <img src="../folder foto gallery/kue onde-onde/foto2.png" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-left" data-aos-duration="2000" />
              </a>
            </div>
            <div class="col-sm-4 mt-3" data-src="../folder foto gallery/kue onde-onde/foto3.png">
              <a href="../folder foto gallery/kue onde-onde/foto3.png">
                <img src="../folder foto gallery/kue onde-onde/foto3.png" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-left" data-aos-duration="3000" />
              </a>
            </div>
            <div class="col-sm-4 mt-3" data-src="../folder foto gallery/kue lemper/foto1.png">
              <a href="../folder foto gallery/kue lemper/foto1.png">
                <img src="../folder foto gallery/kue lemper/foto1.png" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-right" data-aos-duration="1000" />
              </a>
            </div>
            <div class="col-sm-4 mt-3" data-src="../folder foto gallery/kue lemper/foto2.png">
              <a href="../folder foto gallery/kue lemper/foto2.png">
                <img src="../folder foto gallery/kue lemper/foto2.png" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-right" data-aos-duration="2000" />
              </a>
            </div>
            <div class="col-sm-4 mt-3" data-src="../folder foto gallery/kue lemper/foto3.png">
              <a href="../folder foto gallery/kue lemper/foto3.png">
                <img src="../folder foto gallery/kue lemper/foto3.png" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-right" data-aos-duration="3000" />
              </a>
            </div>
            <div class="col-sm-4 mt-3" data-src="../folder foto gallery/kue talam/foto1.png">
              <a href="../folder foto gallery/kue talam/foto1.png">
                <img src="../folder foto gallery/kue talam/foto1.png" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-left" data-aos-duration="1000" />
              </a>
            </div>
            <div class="col-sm-4 mt-3" data-src="../folder foto gallery/kue talam/foto2.png">
              <a href="../folder foto gallery/kue talam/foto2.png">
                <img src="../folder foto gallery/kue talam/foto2.png" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-left" data-aos-duration="2000" />
              </a>
            </div>
            <div class="col-sm-4 mt-3" data-src="../folder foto gallery/kue talam/foto3.png">
              <a href="../folder foto gallery/kue talam/foto3.png">
                <img src="../folder foto gallery/kue talam/foto3.png" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-left" data-aos-duration="3000" />
              </a>
            </div>
            <div class="col-sm-4 mt-3" data-src="../folder foto gallery/kue serabi/foto1.png">
              <a href="../folder foto gallery/kue serabi/foto1.png">
                <img src="../folder foto gallery/kue serabi/foto1.png" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-right" data-aos-duration="1000" />
              </a>
            </div>
            <div class="col-sm-4 mt-3" data-src="../folder foto gallery/kue serabi/foto2.png">
              <a href="../folder foto gallery/kue serabi/foto2.png">
                <img src="../folder foto gallery/kue serabi/foto2.png" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-right" data-aos-duration="2000" />
              </a>
            </div>
            <div class="col-sm-4 mt-3" data-src="../folder foto gallery/kue serabi/foto3.png">
              <a href="../folder foto gallery/kue serabi/foto3.png">
                <img src="../folder foto gallery/kue serabi/foto3.png" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-right" data-aos-duration="3000" />
              </a>
            </div>
            <div class="col-sm-4 mt-3" data-src="../folder foto gallery/kue lapis/foto1.png">
              <a href="../folder foto gallery/kue lapis/foto1.png">
                <img src="../folder foto gallery/kue lapis/foto1.png" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-left" data-aos-duration="1000" />
              </a>
            </div>
            <div class="col-sm-4 mt-3" data-src="../folder foto gallery/kue lapis/foto2.png">
              <a href="../folder foto gallery/kue lapis/foto2.png">
                <img src="../folder foto gallery/kue lapis/foto2.png" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-left" data-aos-duration="2000" />
              </a>
            </div>
            <div class="col-sm-4 mt-3" data-src="../folder foto gallery/kue lapis/foto3.png">
              <a href="../folder foto gallery/kue lapis/foto3.png">
                <img src="../folder foto gallery/kue lapis/foto3.png" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-left" data-aos-duration="3000" />
              </a>
            </div>
            <div class="col-sm-4 mt-3" data-src="../folder foto gallery/kue lumpur/foto1.png">
              <a href="../folder foto gallery/kue lumpur/foto1.png">
                <img src="../folder foto gallery/kue lumpur/foto1.png" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-left" data-aos-duration="2000" />
              </a>
            </div>
            <div class="col-sm-4 mt-3" data-src="../folder foto gallery/kue lumpur/foto2.png">
              <a href="../folder foto gallery/kue lumpur/foto2.png">
                <img src="../folder foto gallery/kue lumpur/foto2.png" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-left" data-aos-duration="2000" />
              </a>
            </div>
            <div class="col-sm-4 mt-3" data-src="../folder foto gallery/kue lumpur/foto3.png">
              <a href="../folder foto gallery/kue lumpur/foto3.png">
                <img src="../folder foto gallery/kue lumpur/foto3.png" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-left" data-aos-duration="2000" />
              </a>
            </div>
            <div class="col-sm-4 mt-3" data-src="../folder foto gallery/kue jentik manis/foto1.png">
              <a href="../folder foto gallery/kue jentik manis/foto1.png">
                <img src="../folder foto gallery/kue jentik manis/foto1.png" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-left" data-aos-duration="2000" />
              </a>
            </div>
            <div class="col-sm-4 mt-3" data-src="../folder foto gallery/kue jentik manis/foto2.png">
              <a href="../folder foto gallery/kue jentik manis/foto2.png">
                <img src="../folder foto gallery/kue jentik manis/foto2.png" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-left" data-aos-duration="2000" />
              </a>
            </div>
            <div class="col-sm-4 mt-3" data-src="../folder foto gallery/kue jentik manis/foto3.png">
              <a href="../folder foto gallery/kue jentik manis/foto3.png">
                <img src="../folder foto gallery/kue jentik manis/foto3.png" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-left" data-aos-duration="2000" />
              </a>
            </div>
            <div class="col-sm-4 mt-3" data-src="../folder foto gallery/kue mangkok/foto1.png">
              <a href="../folder foto gallery/kue mangkok/foto1.png">
                <img src="../folder foto gallery/kue mangkok/foto1.png" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-left" data-aos-duration="2000" />
              </a>
            </div>
            <div class="col-sm-4 mt-3" data-src="../folder foto gallery/kue mangkok/foto2.png">
              <a href="../folder foto gallery/kue mangkok/foto2.png">
                <img src="../folder foto gallery/kue mangkok/foto2.png" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-left" data-aos-duration="2000" />
              </a>
            </div>
            <div class="col-sm-4 mt-3" data-src="../folder foto gallery/kue mangkok/foto3.png">
              <a href="../folder foto gallery/kue mangkok/foto3.png">
                <img src="../folder foto gallery/kue mangkok/foto3.png" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-left" data-aos-duration="2000" />
              </a>
            </div>
            <div class="col-sm-4 mt-3" data-src="../folder foto gallery/kue lapis legit/foto1.png">
              <a href="../folder foto gallery/kue lapis legit/foto1.png">
                <img src="../folder foto gallery/kue lapis legit/foto1.png" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-left" data-aos-duration="2000" />
              </a>
            </div>
            <div class="col-sm-4 mt-3" data-src="../folder foto gallery/kue lapis legit/foto2.png">
              <a href="../folder foto gallery/kue lapis legit/foto2.png">
                <img src="../folder foto gallery/kue lapis legit/foto2.png" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-left" data-aos-duration="2000" />
              </a>
            </div>
            <div class="col-sm-4 mt-3" data-src="../folder foto gallery/kue lapis legit/foto3.png">
              <a href="../folder foto gallery/kue lapis legit/foto3.png">
                <img src="../folder foto gallery/kue lapis legit/foto3.png" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-left" data-aos-duration="2000" />
              </a>
            </div>
            <div class="col-sm-4 mt-3" data-src="../folder foto gallery/kue mendut/foto1.png">
              <a href="../folder foto gallery/kue mendut/foto1.png">
                <img src="../folder foto gallery/kue mendut/foto1.png" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-left" data-aos-duration="2000" />
              </a>
            </div>
            <div class="col-sm-4 mt-3" data-src="../folder foto gallery/kue mendut/foto2.png">
              <a href="../folder foto gallery/kue mendut/foto2.png">
                <img src="../folder foto gallery/kue mendut/foto2.png" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-left" data-aos-duration="2000" />
              </a>
            </div>
            <div class="col-sm-4 mt-3" data-src="../folder foto gallery/kue mendut/foto3.png">
              <a href="../folder foto gallery/kue mendut/foto3.png">
                <img src="../folder foto gallery/kue mendut/foto3.png" class="img-thumbnail" style="border-radius: 2rem" data-aos="flip-left" data-aos-duration="2000" />
              </a>
            </div>
          </div>
        </div>
      </section>
      <!-- Akhir gallery -->

      <!-- contact -->
      <section id="contact">
        <div class="container-sm container-contact mt-0 mb-5">
          <div class="row row-contact text-center mb-3">
            <div class="col">
              <h1 class="contact">Contact</h1>
            </div>
          </div>
          <div class="row mt-5 p-0 m-0" style="background-color: #222;">
            <div class="col d-flex p-0 m-0">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7931.040947428667!2d107.2841172!3d-6.3265305999999955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1687165691953!5m2!1sid!2sid" 
              width="550" height="700" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-md-5 mt-5 hubungi-kami">
              <div class="row row-contact-3 text-center mb-3">
                <div class="col">
                  <h1 class="hubungi-kami-2">Hubungi Kami</h1>
                </div>
               </div>
              <form action="" method="post">
                <div class="mb-3">
                  <label for="nama" class="form-label">Nama Lengkap</label>
                  <input type="text" class="form-control" id="nama" aria-describedby="name" name="nama" />
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="email" aria-describedby="email" name="email" />
                </div>
                <div class="mb-3">
                  <label for="no_hp" class="form-label">No. Handphone</label>
                  <input type="text" class="form-control" id="no_hp" aria-describedby="text" name="no_hp" />
                </div>
                <div class="mb-3">
                  <label for="pesan" class="form-label">Pesan</label>
                  <textarea class="form-control" id="pesan" rows="3" name="pesan"></textarea>
                </div>
                <button type="submit" name= "kirim" class="btn btn-primary btn-kirim mb-5">Kirim</button>
                <button class="btn btn-primary btn-loading d-none" type="button" disabled>
                </button>
              </form>
            </div>
          </div>
        </div>
      </section>

      <!-- Akhir contact-->

      
      <!-- Anggota Tim -->
      <!-- <div class="container mt-5">
        <div class="judul-produk" style="background-color: #aeaeae;">
          <h2 class="text-tim ms-4 me-4 p-2 text-center">Tim Kami</h2>
        </div>
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active p-5" style="background-color: #aeaeae">
              <div class="container container-item1">
                <img src="../folder foto tim/foto tim1.jpg" class="rounded-circle" height="400px" width="400px" />
                <h2 class="d-flex align-self-center m-5 text-center">
                  Muhammad Abdillah Asyhar <br />
                  <br />(12220927)
                </h2>
              </div>
            </div>
            <div class="carousel-item p-5" style="background-color: #aeaeae">
              <div class="container container-item1">
                <img src="../folder foto tim/foto tim 2.jpeg" class="rounded-circle" height="400px" width="400px" />
                <h2 class="d-flex align-self-center m-5 text-center">
                  Dimas Aditya <br />
                  <br />(12220185)
                </h2>
              </div>
            </div>
            <div class="carousel-item p-5" style="background-color: #aeaeae">
              <div class="container container-item1">
                <img src="../folder foto tim/foto tim3.jpg" class="rounded-circle" height="400px" width="400px" />
                <h2 class="d-flex align-self-center m-5 text-center">
                  Ayu Permatasari <br />
                  <br />(12220926)
                </h2>
              </div>
            </div>
            <div class="carousel-item p-5" style="background-color: #aeaeae">
              <div class="container container-item1">
                <img src="../folder foto tim/foto tim4.jpg" class="rounded-circle" height="400px" width="400px" />
                <h2 class="d-flex align-self-center m-5 text-center">
                  Rendi Cahya Pradia <br />
                  <br />(12221410)
                </h2>
              </div>
            </div>
            <div class="carousel-item p-5" style="background-color: #aeaeae">
              <div class="container container-item1">
                <img src="../folder foto tim/foto tim 5.jpeg" class="rounded-circle" height="400px" width="400px" />
                <h2 class="d-flex align-self-center m-5 text-center">
                  Dimas Nugraha <br />
                  <br />(12221416)
                </h2>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div> -->
      <!-- Akhir Anggota Tim -->

      <!-- Footer -->
      <footer class="p-5 mt-5" style="background-color: #aeaeae">
        <div class="container">
          <div class="row">
            <div class="col md-6 text-md-start text-center">
              <a href="#" style="text-decoration: none">
                <img src="../folder foto/Logo.png" style="width: 70px; height: 70px" class="rounded-circle" />
              </a>
              <span class="ps-1">Copyright @2023 | Created with love by <a href="#" class="text-dark fw-bold" style="text-decoration: none">Craft Shop</a></span>
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
        max: 15,
        speed: 200,
      });
    </script>

    <script>
      // Navbar text
      gsap.registerPlugin(TextPlugin);
      gsap.to(".text-1", { duration: 4, delay: 0.5, text: "CRAFT SHOP" });

      gsap.from(".card-produk", { duration: 2, rotateY: 360, opacity: 0 });
    </script>

    <script src="../folder_plugin/js/lightgallery-all.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('#lightgallery').lightGallery();
      });
    </script>
  </body>
</html>
