<?php 
require 'functions_admin.php';

$id = $_GET["id"];

if( hapus2($id) > 0) {
    echo "
    <script>alert('Data berhasil dihapus!')
    document.location.href = 'datausers.php';
    </script>";
} else {
    echo "
    <script>alert('Maaf data gagal dihapus!')
    document.location.href = 'datausers.php';
    </script>";
}


?>