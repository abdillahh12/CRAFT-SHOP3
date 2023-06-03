<?php 
$connect = mysqli_connect("localhost", "root", "", "toko_kue");

if ( isset($_POST["register"])) {

  // ambil elemen form terlebih dahulu
  $username = strtolower(stripslashes($_POST["username"]));
  $password = mysqli_real_escape_string($connect, $_POST["password"]);
  $password2 = mysqli_real_escape_string($connect, $_POST["password2"]);


  /* Catatan : sebelum data dicek konfirmasi password nya, 
  cek terlebih dahulu apakah data user yang sudah di inputkan
  itu sudah pernah di inputkan atau belum, jika sudah ada 
  maka data tersebut tidak boleh di inputkan, lakukan dengan cara :*/
  $result = mysqli_query($connect, "SELECT username FROM users2 WHERE username = '$username'");

  if(mysqli_fetch_assoc($result)) {
    echo "<script>alert('username yang anda masukkan sudah terdaftar');
    document.location.href = 'registrasi.php';
    </script>";
    return false;
  }

  /* Catatan : sebelum meng insert kan data form nya 
  pastikan dulu agar password tersebut sama dengan konfirmasi 
  password dengam cara :*/
  if($password !== $password2) {
    echo "
    <script>
    alert('Konfirmasi password tidak sesuai!')
    document.location.href = 'registrasi.php';
    </script>";
    return false;
  } 

  /* Catatan : setelah konfirmasi password selesai, maka 
  langkah selanjutnya adalah enkripsi password terlebih dahulu
  agar nanti password yang sudah diinput ke database tidak terlihat
  oleh siapapun, dengan cara :*/
  $password = password_hash($password, PASSWORD_DEFAULT);

  /* Setelah semua nya selesai langkah selanjutnya adalah baru
  insert data form nya ke database, dengan cara :*/
  $query = "INSERT INTO users2 VALUES('', '$username', '$password')";
  mysqli_query($connect, $query);

  if(mysqli_affected_rows($connect) > 0) {
    echo "
    <script>
    alert('Registrasi berhasil')
    document.location.href = 'login.php';
    </script>";
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
    <title>Register</title>
    <link rel="stylesheet" href="../folder css/registrasi1.css" />
  </head>
  <body>
    <form action="" method="post" class="form-container">
      <h2>Register Form</h2>
      <div class="name">
        <input type="text" name="username" id="username" placeholder="Username" required />
      </div>
      <input type="password" name="password" id="password" placeholder="Password" required />
      <input type="password" name="password2" id="password2" placeholder="Confirm Password" required />
      <button type="submit" name="register">Register</button>
    </form>
  </body>
</html>
