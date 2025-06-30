<?php
$host = "localhost";
$user = "root";
$password = "";
$nama_database = "db_rendi_d1a241007";
$db = mysqli_connect($host, $user, $password, $nama_database);

// Memeriksa koneksi
if ($db->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
//echo "Koneksi berhasil";
?>
