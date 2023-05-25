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
    mysqli_query($connect, "DELETE FROM pelanggan WHERE id = $id");
    return mysqli_affected_rows($connect);
}

function registrasi($data) {
    global $connect;
    // Langkah pertama ambil data dulu, dari tiap tiap elemen form

    /* CATATAN PENTING: 
    1. Sebelum data di insert ke dalam database
    pastikan tambahkan fungsi strtolower dan stripslashes ke dalam $username
    agar nanti ketika user menginputkan username data yang dikirim itu huruf nya tidak 
    mempunyai banyak karakter dan ketika ada huruf besar yang diinputkan maka secara otomatis
    akan menjadi huruf kecil ketika terkirim ke dalam database
    
    2. Pastikan juga Sebelum data di insert ke dalam database
    pastikan tambahkan mysqli_escape_string ke dalam $password dan $password2
    agar nantinya ketika user menginputkan password yang ada tanda kutip nya
    maka nanti data tersebut secara aman masuk ke database*/
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($connect, $data["password"]);
    $password2 = mysqli_real_escape_string($connect, $data["password2"]);

    // LANGKAH KEDUA, CEK KONFIRMASI PASSWORD, UNTUK MEMASTIKAN AGAR USER MENGINPUTKAN KONFIRMASI PASSWORD YANG SAMA DENGAN PASSWORD
    if ($password !== $password2) {
        echo "
        <script>alert('Kofirmasi Password tidak sesuai!')</script>";
        return false;
    }

    // LANGKAH KE TIGA, CEK USERNAME SUDAH ADA ATAU BELUM, JIKA SUDAH ADA MAKA DATA TIDAK DITAMBAHKAN DAN JIKA BELUM ADA MAKA DATA AKAN DITAMBAHKAN
    $result = mysqli_query($connect, "SELECT username FROM user WHERE username = '$username'");

    if(mysqli_fetch_assoc($result)) {
        echo "
        <script>
        alert('Username sudah terdaftar!');
        </script>";
        return false;
    }

    // LANGKAH KE EMPAT, ENKRIPSI TERLEBIH DAHULU PASSWORD YANG NANTI DIINPUTKAN USER, AGAR TIDAK BISA DILIHAT OLEH SIAPAPUN
    $password = password_hash($password, PASSWORD_DEFAULT);


    // LANGKAH KE LIMA, TAMBAHKAN USER BARU KEDALAM DATABASE
    $query = "INSERT INTO user
                   VALUES
        ('', '$username', '$password')";
    mysqli_query($connect, $query);

    return mysqli_affected_rows($connect);
}

?>