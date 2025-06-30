<?php
include('../koneksi.php');
session_start();
if (!isset($_SESSION['username'])) {
    header('location:login.php');
    exit;
}
$id_pesan = mysqli_real_escape_string($db, $_POST['id_pesan']);
$nama = mysqli_real_escape_string($db, $_POST['nama']);
$jenis_kelamin   = mysqli_real_escape_string($db, $_POST['jenis_kelamin']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$no_hp   = mysqli_real_escape_string($db, $_POST['no_hp']);
$pesan = mysqli_real_escape_string($db, $_POST['pesan']);
$sql = "INSERT INTO tbl_pesan (id_pesan, nama, jenis_kelamin, email, no_hp, pesan) VALUES ('$id_pesan', '$nama', '$jenis_kelamin', '$email', '$no_hp', '$pesan')";
$query = mysqli_query($db, $sql);

if ($query) {
    echo "<script>alert('Pesan berhasil dikirimkan.'); window.location='../index.php';</script>";
} else {
    echo "<script>alert('Gagal mohon dicoba kembali.'); history.back();</script>";
}
?>
