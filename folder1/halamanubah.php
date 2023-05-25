<?php 
/* CARA UPDATE CRUD*/


require 'functions.php';

$connect = mysqli_connect("localhost", "root", "", "toko_kue");

// Ambil data di URL 
$id = $_GET["id"];

// query data pelanggan berdasarkan id
$plg = query("SELECT * FROM pelanggan WHERE id = $id")[0];

if(isset($_POST["submit"])) {
  // Ambil data dari tiap tiap elemen
  $id = $_POST["id"];
  $nama = htmlspecialchars($_POST["nama"]);
  $no_hp = htmlspecialchars($_POST["no_hp"]);
  $alamat = htmlspecialchars($_POST["alamat"]);
  $barang = htmlspecialchars($_POST["barang"]);
  $pemesanan = htmlspecialchars($_POST["pemesanan"]);

  // query insert data
  $query = "UPDATE pelanggan SET
            nama_pelanggan = '$nama',
            no_hp = '$no_hp',
            alamat = '$alamat',
            pesanan = '$barang',
            jumlah_pesanan = '$pemesanan'
        WHERE id = $id";

  mysqli_query($connect, $query);

  // Cek apakah data berhasil ditambahkan atau tidak

  if(mysqli_affected_rows($connect) > 0) { 
      echo "<script>
    alert('Data berhasil diubah');
    document.location.href = 'datapemesanan.php';
  </script>"; 
} else { 
      echo "
    <script>
      alert('Maaf data gagal diubah');
      document.location.href = 'datapemesanan.php';
    </script>"; 
    mysqli_error($connect); } } ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>FORM UBAH DATA PEMBELIAN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <link rel="stylesheet" href="../folder css/formpemesanan2.css" />
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="container con-1">
            <div class="form">
              <h1 class="text-2 mt-2">FORM UBAH DATA PEMBELIAN</h1>
              <form action="" method="post">
                <input type="hidden" name="id" value="<?= $plg["id"];?>">
                <label for="nama">NAMA PEMBELI: </label>
                <input type="text" name="nama" id="nama" placeholder="EX: Rahma candani" required value="<?= $plg["nama_pelanggan"];?>"/> <br />
                <label for="no_hp">NO HP PEMBELI: </label>
                <input type="text" name="no_hp" id="no_hp" placeholder="EX: 081389808395" required value="<?= $plg["no_hp"];?>"/> <br />
                <label for="alamat">ALAMAT PEMBELI: </label>
                <input type="text" name="alamat" id="alamat" placeholder="EX: Jalan Arjuna 2" required value="<?= $plg["alamat"];?>"/> <br />
                <label for="barang">NAMA BARANG: </label>
                <input type="text" name="barang" id="barang" placeholder="EX: Kue Talam" required value="<?= $plg["pesanan"];?>"/> <br />
                <label for="pemesanan">JUMLAH PEMESANAN: </label>
                <input type="text" name="pemesanan" id="pemesanan" placeholder="EX: 20" required value="<?= $plg["jumlah_pesanan"];?>"/> <br />
                <div class="form2 mt-3">
                  <button type="submit" name="submit" class="btn btn-primary">Ubah data</button>
                  <button type="reset" name="submit" class="btn btn-danger">Cancel</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
