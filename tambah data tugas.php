<?php 
include "koneksi.php";

$id_tugas  = $_POST['id_tugas'];
$Nama_Siswa = $_POST['Nama_Siswa'];
$No_Absen = $_POST['No_Absen'];
$Nama_Mapel = $_POST['Nama_Mapel'];
$Nama_Tugas = $_POST['Nama_Tugas'];
$Pengumpulan = $_POST['Pengumpulan'];

if (isset($_POST['proses'])) {
    $direktori = "img/";

    // Mengecek apakah folder img ada, jika tidak, membuatnya
    if (!is_dir($direktori)) {
        // Membuat folder img dengan izin 0777
        if (!mkdir($direktori, 0777, true)) {
            die('Tidak dapat membuat direktori...');
        }
    }

    // Memeriksa izin akses direktori
    if (!is_writable($direktori)) {
        die('Direktori tidak memiliki izin untuk menulis file...');
    }

    // Mengambil informasi file yang diunggah
    $namaFile = preg_replace('/[^a-zA-Z0-9\s]/', '', $Nama_Siswa);
    $file_name = $namaFile . "_" . $_FILES['NamaFile']['name'];
    $file_path = $direktori . $file_name;

    // Memeriksa ekstensi file yang diunggah
    $allowed_types = array('jpg', 'jpeg', 'png', 'gif');
    $file_extension = strtolower(pathinfo($file_path, PATHINFO_EXTENSION));
    if (!in_array($file_extension, $allowed_types)) {
        echo "Tipe file tidak diizinkan. Silakan unggah file dengan format JPG, JPEG, PNG, atau GIF.";
        exit;
    }

    // Memeriksa ukuran file yang diunggah
    $max_size = 5 * 1024 * 1024; // Ukuran maksimum 5MB
    if ($_FILES['NamaFile']['size'] > $max_size) {
        echo "Ukuran file terlalu besar. Maksimum 5MB diizinkan.";
        exit;
    }

    // Pindahkan file yang diunggah ke direktori tujuan
    if (!move_uploaded_file($_FILES['NamaFile']['tmp_name'], $file_path)) {
        echo "Gagal mengunggah file.";
        exit;
    }

    // Jika pemeriksaan berkas berhasil, lakukan query untuk menyimpan data di database
    mysqli_query($koneksi, "INSERT INTO `tugas`(`id_tugas`, `Nama_Siswa`, `No_Absen`, `Nama_Mapel`, `Nama_Tugas`, `Pengumpulan`) VALUES ('$id_tugas','$Nama_Siswa','$No_Absen','$Nama_Mapel','$Nama_Tugas','$file_name')");

    header("location:pengumpulan_tugas.php?alert=berhasil_tambah");
}
?>
