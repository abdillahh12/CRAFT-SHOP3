<?php 
require 'functions_admin.php';

$id = $_GET["id"];

if( hapus3($id) > 0) {
    echo "
    <script>alert('Data berhasil dihapus!')
    document.location.href = 'datausersadmin.php';
    </script>";
} else {
    echo "
    <script>alert('Maaf data gagal dihapus!')
    document.location.href = 'datausersadmin.php';
    </script>";
}


?>