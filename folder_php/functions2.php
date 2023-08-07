<?php 
$connect = mysqli_connect("localhost", "root", "", "toko_kue2");

function query($query) {
    global $connect;
    $result = mysqli_query($connect, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows [] = $row;
    }
    return $rows;
}


function hapus($id) {
    global $connect;
    mysqli_query($connect, "DELETE FROM users2 WHERE id = $id");
    return mysqli_affected_rows($connect);
}
?>