<?php 
session_start();

if(!isset($_SESSION["login"])) {
  header("Location: login1.php");
}

require 'functions_admin.php';
$plg = query("SELECT * FROM pembeli");



// kodingan pencarian
if(isset($_POST["cari"])) {

  $plg = cari($_POST["pencarian"]);
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
    <link rel="stylesheet" href="../folder css/datapemesanan1.css" />
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Alkatra:wght@700&family=Anton&family=Geologica:wght@500&family=Lobster&family=Mukta:wght@200;300;400;500;600;700;800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
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
            <a class="nav-link active text-white" aria-current="page" href=""><i class="fa fa-user" aria-hidden="true" style="padding: 10px"></i>Data Pembelian Barang</a>
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
      <div class="col-md-10">
        <div class="container">
          <div class="row me-4 ms-4" style="background-color: white">
            <div class="judul-produk">
              <h3 class="text-3 ms-4 me-4 p-2 text-center mt-3">DATA PEMBELIAN BARANG</h3>
            </div>
            <div class="col-6 mt-2">
              <form action="" method="post">
                <div class="input-group mb-3">
                  <input type="text" name="pencarian" class="form-control" placeholder="Pencarian" aria-label="Recipient's username" aria-describedby="button-addon2">
                  <button class="btn btn-primary" type="submit" name="cari" id="button-addon2"><i class="fa fa-search" aria-hidden="true"></i></button>
                </div>
              </form>
            <div class="col-3">
              <a href="cetak16.php"><button type="button" class="btn btn-success"><i class="fa fa-print" aria-hidden="true" data-toggle="tooltip" title="Cetak"></i></button></a>
            </div>
            </div>
            <div class="col-14">
              <div class="table-responsive">
                <table class="table align-middle table-bordered mt-4">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Nama Pembeli</th>
                      <th>NO HP Pembeli</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1;?>
                    <?php foreach ($plg as $row):?>
                    <tr>
                      <td><?= $i;?></td>
                      <td><?= $row["nama_pelanggan"];?></td>
                      <td><?= $row["no_hp"];?></td>
                      <td>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $row["id"];?>">
                          <i class="fa fa-eye" aria-hidden="true" data-toggle="tooltip" title="Detail"></i>
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal<?= $row["id"];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">DATA PEMESANAN</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <div class="row">
                                  <div class="col-sm-8">
                                    NAMA PEMBELI : <?= $row["nama_pelanggan"];?> <br>
                                    NO HP PEMBELI : <?= $row["no_hp"];?> <br>
                                    ALAMAT PEMBELI : <?= $row["alamat"]?> <br>
                                    PESANAN PEMBELI : <?= $row["pesanan"]?> <br>
                                    HARGA BARANG : <?= $row["harga_barang"]?> <br>
                                    JUMLAH PESANAN : <?= $row["jumlah_pesanan"];?> <br>
                                    TOTAL JUMLAH : <?= $row["total_jumlah"]?> <br>
                                    TANGGAL PEMESANAN : <?= $row["tanggal_pemesanan"];?> <br>
                                  </div>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <a href="halamanubah.php?id=<?= $row["id"];?>" onclick="return confirm('Apakah Anda yakin ingin mengubah data??');"><button type="button" class="btn btn-success btn-sm mt-2"><i class="fa fa-pencil" data-toggle="tooltip" title="Ubah"></i></button></a>
                        <a href="hapusdata.php?id=<?= $row["id"];?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data???');"><button type="button" class="btn btn-danger btn-sm mt-2"><i class="fa fa-trash" data-toggle="tooltip" title="Hapus"></i></button></a>
                      </td>
                    </tr>
                    <?php $i++;?>
                    <?php endforeach;?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Akhir sidebar -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="../folder js/admin.js"></script>
  </body>
</html>
