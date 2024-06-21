<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$NISN = $_POST['NISN'];
$absen = $_POST['absen'];
$Nama = $_POST['Nama'];
$kelas = $_POST['kelas'];

 
// menginput data ke database
mysqli_query($koneksi,"INSERT INTO siswa (NISN,absen,Nama,kelas) VALUES ('$NISN','$absen','$Nama','$kelas')");
 
// mengalihkan halaman kembali ke index.php
header("location:menu.php");
 
?>