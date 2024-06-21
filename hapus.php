<?php 
include 'koneksi.php';
 
$id_tugas = $_GET['id_tugas'];
$id_pengumpulan = $_GET['id_pengumpulan'];
$NISN = $_GET['NISN'];

// Mengecek apakah yang dihapus adalah data siswa atau pengumpulan
$query = "SELECT * FROM siswa WHERE NISN='$NISN'";
$result = mysqli_query($koneksi, $query);
$isSiswa = mysqli_num_rows($result) > 0;

$query = "SELECT * FROM pengumpulan WHERE id_pengumpulan='$id_pengumpulan'";
$result = mysqli_query($koneksi, $query);
$isPengumpulan = mysqli_num_rows($result) > 0;

$query = "SELECT * FROM tugas WHERE id_tugas='$id_tugas'";
$result = mysqli_query($koneksi, $query);
$isTugas = mysqli_num_rows($result) > 0;

// Menghapus data berdasarkan tipe data yang teridentifikasi
if ($isSiswa) {
    mysqli_query($koneksi,"DELETE FROM siswa WHERE NISN='$NISN'");
    header("Location: menu.php");
} elseif ($isPengumpulan) {
    mysqli_query($koneksi,"DELETE FROM pengumpulan WHERE id_pengumpulan='$id_pengumpulan'");
    header("Location: tabel_pengumpulan.php");
} elseif ($isTugas) {
    mysqli_query($koneksi,"DELETE FROM tugas WHERE id_tugas='$id_tugas'");
    header("Location: data tugas.php");
} else {
}
?>
