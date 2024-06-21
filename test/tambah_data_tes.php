<?php
include "koneksi.php";

$NISN = $_POST['NISN'];
$absen = $_POST['absen'];
$Nama = $_POST['Nama'];
$kelas = $_POST['kelas'];

mysqli_query($koneksi_tes, "INSERT INTO siswa (NISN,absen,Nama,kelas) VALUES ('$NISN','$absen','$Nama','$kelas')");

header("location:tabel.php");
