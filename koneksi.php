<?php
    global $koneksi;
    $koneksi = mysqli_connect("localhost","root","","pengumpulan_tugas");

    if (mysqli_connect_errno()){
        echo "Koneksi database gagal : " . mysqli_connect_error();
    }

?>