<?php 
require 'functions2.php';
$plg = query("SELECT * FROM users2");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>DATA PEMESANAN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <link rel="stylesheet" href="../folder css/datapemesanan1.css" />
    <link rel="stylesheet" href="../fontawesome/css/font-awesome.min.css">
  </head>
  <body>
    <!-- Data pemesanan -->
    <div class="container">
      <div class="row me-4 ms-4" style="background-color: white">
        <div class="judul-produk">
          <h3 class="text-3 ms-4 me-4 p-2 text-center mt-3">DATA AKUN USER</h3>
        </div>
        <div class="col">
          <div class="table-responsive">
            <table class="table align-middle table-bordered mt-4">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Username</th>
                  <th>Password</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1;?>
                <?php foreach ($plg as $row):?>
                <tr>
                  <td><?= $i;?></td>
                  <td><?= $row["username"];?></td>
                  <td><?= $row["password"];?></td>
                  <td>
                    <a href="halamanubah.php?id=<?= $row["id"];?>" onclick="return confirm('Apakah anda yakin ingin mengubah data??');"><button type="button" class="btn btn-success btn-sm mt-2"><i class="fa fa-pencil"></i></button></a>
                    <a href="hapusdata2.php?id=<?= $row["id"];?>" onclick="return confirm('Apakah anda yakin ingin menghapus???');"><button type="button" class="btn btn-danger btn-sm mt-2"><i class="fa fa-trash"></i></button></a>
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
    <!-- Akhir Data Pemesanan -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
