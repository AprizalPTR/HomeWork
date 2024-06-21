<?php

    global $koneksi;
    $koneksi = mysqli_connect("localhost","root","","pengumpulan_tugas");

    $result = mysqli_query ($koneksi, "SELECT * FROM siswa");

    if (mysqli_connect_errno()){
        echo "Koneksi database gagal : " . mysqli_connect_error();
    }


?>

<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>HomeWork</title>
        <link rel="shortcut icon" href="stack book.png">
        <link rel="stylesheet" href="style.css">
<style>
  .nav-item.dropdown .nav-link {
    display: flex;
    align-items: center;
    gap: 8px; 
    font-weight: bold;
    color: #fff;
    font-size: small;
}
</style>
	<title>CRUD PHP dan MySQLi</title>
</head>
<body class="bg-secondary-emphasis" >
<?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php");
	}
 
	?>
 
 <nav class="navbar navbar-expand-lg bg-primary text-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <!-- Brand and toggle button -->
    <a class="navbar-brand" href="#">HomeWork</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="menu.php">Tabel Siswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="tabel_pengumpulan.php">Data Pengumpulan Tugas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="data tugas.php">Data Tugas</a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto">
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?php echo $_SESSION['username']; ?>
            <img src="icons8-user-48.png" alt="Bootstrap" width="30" height="30">
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="logout.php">LOG OUT</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<br><br>
	<center><h3>Edit Data Siswa</h3></center>
 
	<?php
	include 'koneksi.php';
	$NISN = $_GET['NISN'];
	$data = mysqli_query($koneksi,"select * from siswa where NISN='$NISN'");
	while($d = mysqli_fetch_array($data)){
		?>
<form method="post" action="update.php">
<div class="container-fluid">
	<div class="sticky-top car shadow p-3 mb-3 bg-body- rounded">
	<div class="row mb-3">
    <label for="NISN" class="col-sm-2 col-form-label">NISN</label>
    <div class="col-sm-10">
	<input type="text" class="form-control" name="NISN" value="<?php echo $d['NISN']; ?>" readonly>
    </div>
	</div>
<div class="row mb-3">
    <label for="absen" class="col-sm-2 col-form-label">No Absen</label>
    <div class="col-sm-10">
	<input type="text" class="form-control" name="absen" value="<?php echo $d['absen']; ?>">
    </div>
</div>
	<div class="row mb-3">
    <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
	<input type="hidden" name="id" value="<?php echo $d['NISN']; ?>">
	<input type="text" class="form-control" name="Nama" value="<?php echo $d['Nama']; ?>">
    </div>
  </div>
<div class="row mb-3">
    <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
    <div class="col-sm-10">
	<input type="text" class="form-control" name="kelas" value="<?php echo $d['kelas']; ?>">
    </div>
</div>
<br> <br>
 <center> <button type="submit" class="btn btn-primary" style="text-align:center">Simpan</button> </center>
		<?php 
	}
	?>
 
</body>
</html>