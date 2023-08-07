<?php 
require 'functions.php';

$id = $_GET["id"];

if( hapus($id) > 0) {
    echo "
    <script>alert('Data Pemesanan berhasil dihapus!')
    document.location.href = 'datapemesanan.php';
    </script>";
} else {
    echo "
    <script>alert('Maaf data Pemesanan gagal dihapus!')
    document.location.href = 'datapemesanan.php';
    </script>";
}

?>