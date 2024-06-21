<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$NISN = $_POST['NISN'];
$absen = $_POST['absen'];
$Nama = $_POST['Nama'];
$kelas = $_POST['kelas'];
 
// update data ke database
mysqli_query($koneksi,"UPDATE siswa SET NISN='$NISN', absen='$absen', Nama='$Nama', kelas='$kelas' WHERE NISN='$NISN'");
 
// mengalihkan halaman kembali ke index.php
header("location:menu.php");
 
?>