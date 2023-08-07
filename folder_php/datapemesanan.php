<?php 
require 'functions.php';
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
          <h3 class="text-3 ms-4 me-4 p-2 text-center mt-3">DATA PEMESANAN</h3>
        </div>
        <div class="col-6 mt-2">
          <form action="" method="post">
            <div class="input-group mb-3">
              <input type="text" name="pencarian" class="form-control" placeholder="Pencarian" aria-label="Recipient's username" aria-describedby="button-addon2">
              <button class="btn btn-primary" type="submit" name="cari" id="button-addon2"><i class="fa fa-search" aria-hidden="true"></i></button>
            </div>
          </form>
        </div>
        <div class="col-14">
          <div class="table-responsive">
            <table class="table align-middle table-bordered mt-4">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama Pembeli</th>
                  <th>NO HP Pembeli</th>
                  <th>Alamat Pembeli</th>
                  <th>Nama Pesanan</th>
                  <th>Jumlah Pesanan</th>
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
                  <td><?= $row["alamat"];?></td>
                  <td><?= $row["pesanan"];?></td>
                  <td><?= $row["jumlah_pesanan"];?></td>
                  <td>
                    <a href="halamanubah.php?id=<?= $row["id"];?>" onclick="return confirm('Apakah Anda yakin ingin mengubah data??');"><button type="button" class="btn btn-success btn-sm mt-2"><i class="fa fa-pencil"></i></button></a>
                    <a href="hapusdata.php?id=<?= $row["id"];?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data???');"><button type="button" class="btn btn-danger btn-sm mt-2"><i class="fa fa-trash"></i></button></a>
                  </td>
                </tr>
                <?php $i++;?>
                <?php endforeach;?>
              </tbody>
            </table>
          </div>
        </div>
        <!-- <div class="col d-flex justify-content-center mt-3">
          <nav aria-label="Page navigation example">
            <ul class="pagination">
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                </a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                </a>
              </li>
            </ul>
          </nav>
        </div> -->
      </div>
    </div>
    <!-- Akhir Data Pemesanan -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
