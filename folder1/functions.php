<?php 
$connect = mysqli_connect("localhost", "root", "", "toko_kue");

function query($query) {
    global $connect;
    $result = mysqli_query($connect, $query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result)) {
        $rows [] = $row;
    }
    return $rows;
}

function hapus($id) {
    global $connect;
    mysqli_query($connect, "DELETE FROM pelanggan2 WHERE id = $id");
    return mysqli_affected_rows($connect);
}

