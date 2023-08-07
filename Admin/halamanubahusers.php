<?php 
// CARA UPDATE CRUD

require 'functions_admin.php';

$connect = mysqli_connect("localhost", "root", "", "toko_kue2");

// Ambil data dari URL 
$id = $_GET["id"];

// query data pelanggan berdasarkan id
$plg = query("SELECT * FROM users2 WHERE id = $id")[0];

if(isset($_POST["submit"])) {
  // ambil data dari tiap tiap elemen form
  $id = $_POST["id"];
  $username = htmlspecialchars($_POST["username"]);
  $password = htmlspecialchars($_POST["password"]);

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
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>UBAH PASSWORD</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../AdminLTE/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="" class="h1"><b>Registrasi </b>Admin</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign up to start your session</p>

      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="text" name="username" class="form-control" placeholder="username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name= "password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name= "password2" class="form-control" placeholder="Confirm Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name="register" class="btn btn-primary btn-block">Sign Up</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <!-- /.social-auth-links -->

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>
