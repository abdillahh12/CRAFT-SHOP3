<?php 
require 'functions_sign_in.php';

$connect = mysqli_connect("localhost", "root", "", "toko_kue2");

if(isset($_POST["submit"])) {

  $username = strtolower(stripslashes($_POST["username2"]));
  $password = mysqli_real_escape_string($connect, $_POST["password2"]);
  $password2 = mysqli_real_escape_string($connect, $_POST["password3"]);

  $result = mysqli_query($connect, "SELECT username FROM users2 WHERE username = '$username'");

  if(mysqli_fetch_assoc($result)) {
    echo "
    <script>alert('Maaf Username Yang Sudah Diinputkan sudah terdaftar, Silahkan Login!!!');
    document.location.href = 'index.php'</script>";
    return false;
  }

  if($password !== $password2) {
    echo "
    <script>alert('Konfirmasi Password Tidak Sesuai');
    document.location.href = 'index.php'</script>";
    return false;
  }

  $password = password_hash($password, PASSWORD_DEFAULT);

  // insert data ke dalam database

  $query = "INSERT INTO users2 
                  VALUES
          ('', '$username', '$password')";
    
  mysqli_query($connect, $query);

  if(mysqli_affected_rows($connect) > 0) {
    echo "
    <script>alert('Registrasi Berhasil')
    document.location.href = 'index.php'</script>";
  } else {
    echo mysqli_error($connect);
  }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LOGIN</title>
    <link rel="stylesheet" href="style1.css" />
  </head>
  <body>
    <p class="tip"></p>
    <div class="cont">
      <div class="form sign-in">
        <form action="" method="post">
          <h2>Sign In</h2>
          <?php if(isset($error)):?>
            <p style="color: red; font-style:italic">Username / password yang anda masukkan salah! Silahkan Masukkan Ulang</p>
          <?php endif;?>
          <label>
            <span>Username</span>
            <input type="text" name="username"/>
          </label>
          <label>
            <span>Password</span>
            <input type="password" name="password"/>
          </label>
          <p class="forgot-pass">Forgot password?</p>
          <button type="submit" class="submit" name="signin">Sign In</button>
        </form>
      </div>
      <div class="sub-cont">
        <div class="img">
          <div class="img__text m--up">
            <h2>Belum Punya Akun?</h2>
            <p>Sign up Sekarang!</p>
          </div>
          <div class="img__text m--in">
            <h2>Sudah Punya Akun?</h2>
            <p>Sign In Sekarang!</p>
          </div>
          <div class="img__btn">
            <span class="m--up">Sign Up</span>
            <span class="m--in">Sign In</span>
          </div>
        </div>
        <div class="form sign-up">
          <form action="" method="post">
            <h2>Sign Up</h2>
            <label>
              <span>Username</span>
              <input type="text" name="username2"/>
            </label>
            <label>
              <span>Password</span>
              <input type="password" name="password2"/>
            </label>
            <label>
              <span>Confirm Password</span>
              <input type="password" name="password3"/>
            </label>
            <button type="submit" class="submit" name="submit">Sign Up</button>
          </form>
        </div>
      </div>
    </div>

    <script src="../folder js/script.js"></script>
  </body>
</html>
