<?php 
$host = "localhost";
$user = "root";
$password = "";
$db = "toko_kue2";

$connect = mysqli_connect($host, $user, $password, $db);

if(!$connect) {
    die("Maaaf Database Tidak tersambung");
}


?>