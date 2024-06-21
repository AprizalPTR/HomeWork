<?php
    global $koneksi_tes;
    $koneksi_tes = mysqli_connect("localhost","root","","pengumpulan_tugas");

    $main = mysqli_query($koneksi_tes, "SELECT * FROM siswa");
    
    if (mysqli_connect_errno()){
        echo "Koneksi gagal" . mysqli_connect_error(); 
    }


?>