<?php 
// CARA UPDATE CRUD

require 'functions_admin.php';

$connect = mysqli_connect("localhost", "root", "", "toko_kue2");

// Ambil data dari URL 
$id = $_GET["id"];

// query data pelanggan berdasarkan id
$plg = query("SELECT * FROM pembeli WHERE id = $id")[0];

if(isset($_POST["submit"])) {
  // ambil data dari tiap tiap elemen form
  $id = $_POST["id"];
  $nama = htmlspecialchars($_POST["nama"]);
  $no_hp = htmlspecialchars($_POST["no_hp"]);
  $alamat = htmlspecialchars($_POST["alamat"]);
  $barang = htmlspecialchars($_POST["barang"]);
  $pemesanan = htmlspecialchars($_POST["pemesanan"]);

  // query insert data
  $query = "UPDATE pembeli SET
            nama_pelanggan = '$nama',
            no_hp = '$no_hp',
            alamat = '$alamat',
            pesanan = '$barang',
            jumlah_pesanan = '$pemesanan'
        WHERE id = $id";

  mysqli_query($connect, $query);

  // Cek apakah data berhasil ditambahkan atau tidak

  if(mysqli_affected_rows($connect) >0) { 
    echo "<script>
          alert('Data Pemesanan berhasil Diubah');
          document.location.href = 'data_pembeli.php';
          </script>"; 
        
  } else { 
    echo "<script>
          alert('Maaf data Pemesanan gagal diubah');
          document.location.href = 'data_pembeli.php';
          </script>"; 
          mysqli_error($connect); } 
} 
?>

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
    <!-- FORM UBAH DATA -->
    <div class="container mt-5">
      <div class="judul-produk bg-light pt-2">
        <h3 class="text-3 ms-4 me-4 p-2 text-center mt-2">FORM UBAH DATA PEMBELIAN</h3>

        <form action="" method="post">
          <div class="elemen-form m-4 p-4">
            <div class="mb-3 row" class="nama">
              <label for="hidden" class="col-sm-2 col-form-label"></label>
              <div class="col-sm-10">
                <input type="hidden" name="id" class="form-control" id="hidden" value="<?= $plg["id"];?>" placeholder="Ex: ID" />
              </div>
            </div>
            <div class="mb-3 row" class="nama">
              <label for="nama" class="col-sm-2 col-form-label">NAMA PEMBELI : </label>
              <div class="col-sm-10">
                <input type="text" name="nama" class="form-control" id="nama" value="<?= $plg["nama_pelanggan"];?>"placeholder="Ex: Nurmala" />
              </div>
            </div>
            <div class="mb-3 row" class="no-hp">
              <label for="no_hp" class="col-sm-2 col-form-label">NO HP PEMBELI : </label>
              <div class="col-sm-10">
                <input type="text" name="no_hp" class="form-control" id="no_hp" value="<?= $plg["no_hp"];?>" placeholder="Ex: 08123458910" />
              </div>
            </div>
            <div class="mb-3 row" class="alamat">
              <label for="alamat" class="col-sm-2 col-form-label">ALAMAT PEMBELI : </label>
              <div class="col-sm-10">
                <textarea class="form-control" name="alamat" id="alamat" rows="3" value="<?= $plg["alamat"];?>" placeholder="Ex: Desa wanasari RT 06 RW 12"></textarea>
              </div>
            </div>
            <div class="mb-3 row" class="kue">
              <label for="barang" class="col-sm-2 col-form-label">KUE YANG DI BELI : </label>
              <div class="col-sm-10">
                <select name="barang" id="barang" value="<?= $plg["pesanan"];?>" class="form-select">
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
              <label for="pemesanan" class="col-sm-2 col-form-label">JUMLAH PEMESANAN : </label>
              <div class="col-sm-10">
                <input type="text" name="pemesanan" class="form-control" id="pemesanan" value="<?= $plg["jumlah_pesanan"];?>" placeholder="Ex: 20" />
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
    <!-- AKHIR FORM UBAH DATA -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
