<?php 
session_start();

if(isset($_SESSION["login"])) {
  header("Location: ../folder index/index.php");
  exit;
}

$connect = mysqli_connect("localhost", "root", "", "toko_kue2");

if(isset($_POST["signin"])) {

  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = mysqli_query($connect, "SELECT * FROM users2 WHERE username = '$username'"); 
  
  /* Cek apakah username yang diinputkan
  oleh user itu ada di dalam database atau tidak*/
  if(mysqli_num_rows($result) === 1) {

    // cek password
    $row = mysqli_fetch_assoc($result);

    if (password_verify($password, $row["password"])) {
      // cek session
      $_SESSION["login"] = true;

      $_SESSION["username"] = $username;

      echo "<script>alert('SELAMAT DATANG');
      document.location.href = '../folder index/index.php';
      </script>";
      exit;
    }

    $error = true;
  }

  
}

?>