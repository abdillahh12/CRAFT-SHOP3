<?php 
session_start();

if(isset($_SESSION["login"])) {
  header("Location: index.php");
  exit;
}

$connect = mysqli_connect("localhost", "root", "", "toko_kue");

if(isset($_POST["login"])) {
  
  /* Langkah pertama, ambil dulu elemen elemen 
  dari tiap tiap form login yang kita sudah buat*/
  $username = $_POST["username"];
  $password = $_POST["password"];

  /* Langkah ke dua, cek terlebih dahulu apakah
  username yang sudah diinputkan oleh user dalam form login
  itu sama dengan username yang ada dalam database atau sama
  dengan username registrasi jika sama, maka user boleh masuk
  dan jika tidak maka user tidak di perboleh kan masuk(harus registrasi terlebih dahulu)
  dan jika semua nya sudah maka tinggal cek password nya*/

  $result = mysqli_query($connect, "SELECT * FROM users2 WHERE username = '$username'"); // untuk mengecek data username yang ada dalam database

  if(mysqli_num_rows($result) === 1) {

    // cek password nya
    $row = mysqli_fetch_assoc($result);

    if (password_verify($password, $row["password"])) {
      //cek session
      $_SESSION["login"] = true;

      header("Location: index.php");
      exit;
    }

    $error = true;
  }

  
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="../folder css/stylelogin.css" />
  </head>
  <body>
    <div class="container">
      <?php if(isset($error)):?>
        <p style="color: red; font-style:italic">Username / password salah</p>
      <?php endif;?>
      <form action="" method="post">
        <h2>Login Form</h2>
        <label for="username"></label>
        <input type="text" name ="username" id="username" placeholder="Username" />
        <label for="password"></label>
        <input type="password" name="password" id="password" placeholder="Password" />
        <p>Forgot Password?</p>
        <button type="submit" name="login">Login</button>
      </form>
      <p class="not-memeber">
        Not a member?
        <a href="registrasi.php">Register Now</a>
      </p>
    </div>

    <script src="script.js"></script>
  </body>
</html>
