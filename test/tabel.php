<?php
include "koneksi.php";

$main = mysqli_query($koneksi_tes, "SELECT * FROM siswa");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <div class="container">

        <h3 style="text-align: center;">Data Siswa</h3> <br>

        <a class="btn btn-success" href="form.php">Tambah Data siswa</a>

        <table class="table table-striped table-bordered" style="text-align:center">
            <tr>
                <th>No</th>
                <th>NISN</th>
                <th>absen</th>
                <th>nama</th>
                <th>kelas</th>
                <th>opsi</th>
            </tr>
            <?php
            include "koneksi.php";
            $no = 1;
            $q = "SELECT * FROM siswa ORDER BY Nama asc";
            $data = mysqli_query($koneksi_tes, $q);
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['NISN']; ?></td>
                    <td><?php echo $d['absen']; ?></td>
                    <td><?php echo $d['Nama']; ?></td>
                    <td><?php echo $d['kelas']; ?></td>
                    <td>
                        <a class="btn btn-danger" href="hapus.php?NISN=<?php echo $d['NISN']; ?>">hapus</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
</body>

</html>