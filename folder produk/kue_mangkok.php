<?php 
session_start();

if(!isset($_SESSION["login"])) {
  header("Location: ../folder_login/index.php");
  exit;
}
$connect = mysqli_connect("localhost", "root", "", "toko_kue2");

if(isset($_POST["submit"])) {
  // Ambil elemen dari tiap form
  $nama = htmlspecialchars($_POST["nama"]);
  $no_hp = htmlspecialchars($_POST["no_hp"]);
  $alamat = htmlspecialchars($_POST["alamat"]);
  $barang = htmlspecialchars($_POST["barang"]);
  $harga_barang = 3500;
  $jumlah_pesanan = htmlspecialchars($_POST["pesanan"]);
  $total_jumlah = $harga_barang * $jumlah_pesanan;
  $tanggal_pemesanan = date("Y-m-d");

  // query data
  $query = "INSERT INTO pembeli
                  VALUES
  ('', '$nama', '$no_hp', '$alamat', '$barang', '$harga_barang', '$jumlah_pesanan', '$total_jumlah', '$tanggal_pemesanan')";

  mysqli_query($connect, $query);

  if(mysqli_affected_rows($connect) > 0) {
    echo "
    <script>
    alert('Data pesanan berhasil ditambahkan');
    document.location.href = '../folder produk/kue_mangkok.php';
    </script>";
  } else {
    echo "
    <script>
    alert('Maaaf data pesanan gagal ditambahkan');
    document.location.href = '../folder produk/kue_mangkok.php';
    </script>";
    mysqli_error($connect);
  }
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="../folder css/folder style deskripsi produk/style_produk_kue_mangkok1.css" />
    <link rel="stylesheet" href="../fontawesome/css/all.min.css" />
    <title>KUE MANGKOK</title>
  </head>
  <body>
    <!-- Judul -->
    <div class="container conn-1 p-0">
      <div class="container mt-5">
        <div class="judul-produk-1" style="background-color: #fff; padding: 5px 10px">
          <h5 class="text-center text-judul" style="margin-top: 6px">PRODUCT</h5>
        </div>
      </div>
      <!-- Akhir Judul -->

      <!-- Breadcrum -->
      <div class="container mt-3">
        <nav aria-label="breadcrumb" style="background-color: #fff">
          <ol class="breadcrumb p-3">
            <li class="breadcrumb-item"><a href="../folder index/index.php" class="text-decoration-none">Home</a></li>
          </ol>
        </nav>
      </div>
      <!-- Akhir Breadcrum -->

      <!-- Single Produk -->
      <div class="container">
        <div class="row row-produk">
          <div class="col-lg-5">
            <figure class="figure">
              <img src="../folder foto/foto9(9).png" class="figure-img img-fluid" style="border-radius: 5px" width="450px" id="MainImg"/>
              <figcaption class="figure-caption d-flex justify-content-evenly">
                <a href="#" class="bag1">
                  <img src="../folder foto/foto9(9).png" class="figure-img img-fluid" style="border-radius: 5px" width="70px" class="small-img"/>
                </a>
                <a href="#" class="bag2">
                  <img src="../folder foto detail produk/kue_mangkok/foto1(1).png" class="figure-img img-fluid" style="border-radius: 5px" width="70px" class="small-img"/>
                </a>
                <a href="#" class="bag3">
                  <img src="../folder foto detail produk/kue_mangkok/foto2(2).png" class="figure-img img-fluid" style="border-radius: 5px" width="70px" class="small-img"/>
                </a>
                <a href="#" class="bag4">
                  <img src="../folder foto detail produk/kue_mangkok/foto3(3).png" class="figure-img img-fluid" style="border-radius: 5px" width="70px" class="small-img"/>
                </a>
                <a href="#" class="bag5">
                  <img src="../folder foto detail produk/kue_mangkok/foto4(4).png" class="figure-img img-fluid" style="border-radius: 5px" width="70px" class="small-img"/>
                </a>
              </figcaption>
            </figure>
          </div>

          <div class="col-lg-7">
            <h4>KUE MANGKOK</h4>
            <div class="garis-nama"></div>
            <h3 class="text-muted mb-3">Rp 3.500</h3>
            <br />

            <div class="text-produk">
              <h5 class="text-1">
                Deskripsi Produk : <br />
                <br />
                Kue mangkok adalah makanan yang terbuat dari tepung beras, tepung terigu dan tapai singkong <br />
                yang dimasak dengan cara dikukus dan berbentuk seperti mangkuk dan mekar pada ujungnya.
              </h5>
            </div>

            <div class="btn-produk mt-5 mb-3">
              <a href="#form-pemesanan" class="btn btn-warning text-white btn-lg btn-custom">Beli Sekarang</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Akhir Single Produk -->

    <!-- FORM PEMESANAN -->
    <section id="form-pemesanan">
      <div class="container mt-5">
        <div class="judul-produk bg-light pt-2">
          <h3 class="text-3 ms-4 me-4 p-2 text-center mt-2">FORM PEMESANAN</h3>

          <form action="" method="post">
            <div class="elemen-form m-4 p-4">
              <div class="mb-3 row" class="nama">
                <label for="nama" class="col-sm-2 col-form-label">NAMA PEMBELI : </label>
                <div class="col-sm-10">
                  <input type="text" name="nama" class="form-control" id="nama" placeholder="Ex: Nurmala" required/>
                </div>
              </div>
              <div class="mb-3 row" class="no-hp">
                <label for="no_hp" class="col-sm-2 col-form-label">NO HP PEMBELI : </label>
                <div class="col-sm-10">
                  <input type="text" name="no_hp" class="form-control" id="no_hp" placeholder="Ex: 08123458910" required/>
                </div>
              </div>
              <div class="mb-3 row" class="alamat">
                <label for="alamat" class="col-sm-2 col-form-label">ALAMAT PEMBELI : </label>
                <div class="col-sm-10">
                  <textarea class="form-control" name="alamat" id="alamat" rows="3" placeholder="Ex: Desa wanasari RT 06 RW 12" required></textarea>
                </div>
              </div>
              <div class="mb-3 row" class="kue">
                <label for="barang" class="col-sm-2 col-form-label">KUE YANG DI BELI : </label>
                <div class="col-sm-10">
                  <select name="barang" id="barang" class="form-select" required>
                    <option selected>Pilihan Kue</option>
                    <option value="KUE CUCUR">KUE CUCUR</option>
                    <option value="KUE KLEPON">KUE KLEPON</option>
                    <option value="ONDE-ONDE">ONDE-ONDE</option>
                    <option value="KUE LEMPER">KUE LEMPER</option>
                    <option value="KUE TALAM">KUE TALAM</option>
                    <option value="KUE SERABI">KUE SERABI</option>
                    <option value="KUE LAPIS">KUE LAPIS</option>
                    <option value="KUE LUMPUR">KUE LUMPUR</option>
                    <option value="KUE JENTIK MANIS">KUE JENTIK MANIS</option>
                    <option value="KUE MANGKOK">KUE MANGKOK</option>
                    <option value="KUE LAPIS LEGIT">KUE LAPIS LEGIT</option>
                    <option value="KUE MENDUT">KUE MENDUT</option>
                  </select>
                </div>
              </div>
              <div class="mb-3 row" class="jumlah-pesanan">
                <label for="pesanan" class="col-sm-2 col-form-label">JUMLAH PEMESANAN : </label>
                <div class="col-sm-10">
                  <input type="text" name="pesanan" class="form-control" id="pesanan" placeholder="Ex: 20" required/>
                </div>
              </div>
              <div class="form2 mt-3">
                <button type="submit" name="submit" class="btn btn-primary">Kirim</button>
                <button type="reset" class="btn btn-danger">Cancel</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>
    <!-- AKHIR FORM PEMESANAN -->
    <!-- Link GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>

    <script>
      // Navbar text
      gsap.from(".conn-1", { duration: 1, x: -50, opacity: 0 });
      gsap.from("#form-pemesanan", { duration: 1.5, x: -50, opacity: 0 });
    </script>

    <script>
      var MainImg = document.getElementById('MainImg');
      var smallimg = document.getElementsByClassName('figure-img');

      smallimg[1].onclick = function() {
        MainImg.src = smallimg[1].src;
      }
      smallimg[2].onclick = function() {
        MainImg.src = smallimg[2].src;
      }
      smallimg[3].onclick = function() {
        MainImg.src = smallimg[3].src;
      }
      smallimg[4].onclick = function() {
        MainImg.src = smallimg[4].src;
      }
      smallimg[5].onclick = function() {
        MainImg.src = smallimg[5].src;
      }
    </script>
  </body>
</html>
