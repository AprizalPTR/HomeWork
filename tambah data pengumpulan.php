<?php 
include 'koneksi.php';

$id_pengumpulan = $_POST['id_pengumpulan'];
$Nama_Siswa = $_POST['Nama_Siswa'];
$No_Absen = $_POST['No_Absen'];
$Nama_Mapel = $_POST['Nama_Mapel'];
$Nama_Tugas = $_POST['Nama_Tugas'];
$Tanggal_pengumpulan = $_POST['Tanggal_pengumpulan'];

mysqli_query($koneksi,"INSERT INTO pengumpulan (id_pengumpulan, Nama_Siswa,No_Absen, Nama_Mapel, Nama_Tugas, Tanggal_pengumpulan) VALUES ('$id_pengumpulan', '$Nama_Siswa', '$No_Absen', '$Nama_Mapel', '$Nama_Tugas', '$Tanggal_pengumpulan')");

header("location:tabel_pengumpulan.php?alert=berhasil_tambah");
?>
