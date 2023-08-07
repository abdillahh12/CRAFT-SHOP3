<?php 
$connect = mysqli_connect("localhost", "root", "", "toko_kue2");

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
    mysqli_query($connect, "DELETE FROM pembeli WHERE id = $id");
    return mysqli_affected_rows($connect);
}

function hapus2($id) {
    global $connect;
    mysqli_query($connect, "DELETE FROM users2 WHERE id = $id");
    return mysqli_affected_rows($connect);
}

function hapus3($id) {
    global $connect;
    mysqli_query($connect, "DELETE FROM users_admin WHERE id = $id");
    return mysqli_affected_rows($connect);
}

function cari($pencarian) {
    $query = "SELECT * FROM pembeli WHERE
                nama_pelanggan LIKE '%$pencarian%' OR
                no_hp LIKE '%$pencarian%' OR
                alamat LIKE '%$pencarian%' OR
                pesanan LIKE '%$pencarian%' OR
                jumlah_pesanan LIKE '%$pencarian%'
                ";
    return query($query);
}


function cariuserspembeli($pencarian) {
    $query = "SELECT * FROM users2 WHERE
            username LIKE '%$pencarian%'";
    return query($query);
}

function cariusersadmin($pencarian) {
    $query = "SELECT * FROM users_admin WHERE
            username LIKE '%$pencarian%'";
    return query($query);
}

