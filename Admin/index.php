<?php 
session_start();

if(!isset($_SESSION["login"])) {
  header("Location: login1.php");
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>ADMIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
    <link rel="stylesheet" href="../fontawesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../folder css/admin1.css" />
  </head>
  <body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container-fluid p-3">
        <a class="navbar-brand ms-4" href="#">SELAMAT DATANG ADMIN <b>| <?= $_SESSION["username"];?></b></a>
        <form class="d-flex ms-auto me-3" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>

        <div class="icon">
          <h5>
            <a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true" style="color: #ffff; padding-top: 8px; padding-right: 12px" data-toggle="tooltip" title="Keluar"></i></a>
          </h5>
        </div>
      </div>
    </nav>
    <!-- AKHIR NAVBAR -->

    <!-- sidebar -->
    <div class="row no-gutters" style="margin-top: 87px">
      <div class="col-2 bg-dark pr-3 pt-2">
        <ul class="nav flex-column mb-3" style="margin-left: 9px">
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="data_pembeli.php"><i class="fa fa-user" aria-hidden="true" style="padding: 10px"></i>Data Pembelian Barang</a>
            <hr class="bg-success" />
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="datausers.php"><i class="fa fa-user" aria-hidden="true" style="padding: 10px"></i>Data Login User Pembeli</a>
            <hr class="bg-white" />
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="datausersadmin.php"><i class="fa fa-user" aria-hidden="true" style="padding: 10px"></i>Data Login User Admin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="datapesan.php"><i class="fa fa-user" aria-hidden="true" style="padding: 10px"></i>Data Pesan/Contact</a>
          </li>
        </ul>
      </div>
      <div class="col-md-10"></div>
    </div>
    <!-- Akhir sidebar -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="../folder js/admin.js"></script>
  </body>
</html>
