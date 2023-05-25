<?php 
require 'functions.php';

if(isset($_POST["register"])) { //Ketika tombol submit ditekan
  
  if( registrasi($_POST) > 0) { /* Maka jalankan functions registrasi, Jika nilai nya bernilai true maka user berhasil ditambahkan dan jika gagal maka akan tampil eror kesalahan nya*/ echo "
      <script>
        alert('User berhasil ditambahkan');
      </script>"; 
} else { 
  echo mysqli_error($connect); } } ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halaman Form</title>
    <link rel="stylesheet" href="../folder css/registrasi2.css" />
  </head>
  <body>
    <form action="" method="post" class="form-container">
      <h2>Register Form</h2>
      <div class="name">
        <input type="text" name="username" id="username" placeholder="Username" required />
      </div>
      <input type="password" name="password" id="password" placeholder="Password" required />
      <input type="password" name="password2" id="password2" placeholder="Konfirmasi Password" required />
      <button type="submit" name="register">Register Now</button>
    </form>
  </body>
</html>
