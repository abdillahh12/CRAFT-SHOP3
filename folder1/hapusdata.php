<?php 
require 'functions.php';

$id = $_GET["id"];

if( hapus($id) > 0) {
    echo "
    <script>alert('Data berhasil dihapus!')
    document.location.href = 'datapemesanan.php';
    </script>";
} else {
    echo "
    <script>alert('Maaf data gagal dihapus!')
    document.location.href = 'datapemesanan.php';
    </script>";
}

?>