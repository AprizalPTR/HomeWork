<?php
global $koneksi_tes;
include "koneksi.php";
$main = mysqli_query($koneksi_tes, "SELECT * FROM siswa");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Test</title>
</head>

<body> <br>
  <div class="container">
    <br>
    <h4 class="" style="text-align: center;">Tambah data siswa</h4> <br>

    <form action="tambah_data_tes.php" method="POST">
      <div class="mb-3">
        <label for="NISN" class="form-label">NISN</label>
        <input type="number" class="form-control" name="NISN">
      </div>
      <div class="mb-3">
        <label for="absen" class="form-label">Absen</label>
        <input type="number" class="form-control" name="absen">
      </div>
      <div class="mb-3">
        <label for="Nama" class="form-label">Nama</label>
        <input type="text" class="form-control" name="Nama">
      </div>
      <div class="mb-3">
        <label for="kelas" class="form-label">kelas</label>
        <input type="text" class="form-control" name="kelas">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</body>

</html>