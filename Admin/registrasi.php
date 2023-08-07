<?php

include '../folder_php/koneksi.php';

if(isset($_POST["register"])) {

  $username = strtolower(stripslashes($_POST["username"]));
  $password = mysqli_real_escape_string($connect, $_POST["password"]);
  $password2 = mysqli_real_escape_string($connect, $_POST["password2"]);

  $result = mysqli_query($connect, "SELECT username FROM users_admin WHERE username = '$username'");

  // cek apakah username yang diinputkan oleh user sudah ada atau belum

  if(mysqli_fetch_assoc($result)) {
    echo "<script>alert('Maaf Username Sudah Ada, Silahkan Melakukan Login')
    document.location.href = 'registrasi.php'</script>";
    return false;
  }

  // cek kesesuaian password

  if($password!==$password2) {
    echo "<script>alert('Konfirmasi Password Tidak Sesuai');
    document.location.href = 'registrai.php';
    </script>";
    return false;
  }

  // enkripsi password

  $password = password_hash($password, PASSWORD_DEFAULT);

  // insert ke dalam database 

  $query = "INSERT INTO users_admin VALUE
          ('', '$username', '$password')";

  mysqli_query($connect, $query);

  // cek apakah data berhasil dikirimkan atau tidak

  if(mysqli_affected_rows($connect) > 0) {
    echo "<script>alert('Registrasi Berhasil');
    document.location.href = 'registrasi.php';
    </script>";
  } else {
    echo mysqli_error($connect);
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registrasi Admin</title>

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
