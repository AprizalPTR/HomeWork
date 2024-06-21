<?php
    global $koneksi;
    $koneksi = mysqli_connect("localhost","root","","pengumpulan_tugas");

    $result = mysqli_query ($koneksi, "SELECT * FROM guru");


    if (mysqli_connect_errno()){
        echo "Koneksi database gagal : " . mysqli_connect_error();
    }

?>