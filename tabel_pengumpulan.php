<?php
include 'koneksi.php';

    global $koneksi;
    $koneksi = mysqli_connect("localhost","root","","pengumpulan_tugas");

    $result = mysqli_query ($koneksi, "SELECT * FROM pengumpulan");

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
</head>
<body>
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
<center><h3>Tambah Data Pemgumpulan</h3></center>

  <form method="post" action="tambah data Pengumpulan.php">
  <div class="container-fluid">
  <div class="sticky-top car shadow p-3 mb-3 bg-body- rounded">
  <div class="form-group row">
    <label for="Nama_Siswa" class="col-sm-2 col-form-label">Nama Siswa</label>
    <div class="col-sm-10">
      <select name="Nama_Siswa" class="form-control">
        <option value="">-----</option>
        <?php
        $query = mysqli_query($koneksi, "SELECT * FROM siswa") or die(mysqli_error($koneksi));
        while ($data = mysqli_fetch_array($query)) {
          echo "<option value='" . $data['Nama'] . "'>" . $data['Nama'] . "</option>";
        }
        ?>
      </select>
    </div>
  </div> <br>
  <div class="form-group row">
    <label for="No_Absen" class="col-sm-2 col-form-label">No Absen</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="No_Absen" name="No_Absen" placeholder="Masukkan No Absen">
    </div>
  </div> <br>
  <div class="form-group row">
    <label for="Nama_Mapel" class="col-sm-2 col-form-label">Nama Mapel</label>
    <div class="col-sm-10">
    <select name="Nama_Mapel" class="form-control">
        <option value="">-----</option>
        <option>Data Base</option>
        <option>Digital Branding</option>
        <option>Web</option>
        <?php
        $query = mysqli_query($koneksi, "SELECT Nama_Mapel FROM tugas") or die(mysqli_error($koneksi));
        while ($data = mysqli_fetch_array($query)) {
        }
        ?>
    </select>
    </div>
  </div> <br>
  <div class="form-group row">
    <label for="Nama_Tugas" class="col-sm-2 col-form-label">Nama Tugas</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="Nama_Tugas" name="Nama_Tugas" placeholder="Masukkan Nama Tugas">
    </div>
  </div> <br>
  <div class="form-group row">
    <label for="Tanggal_pengumpulan" class="col-sm-2 col-form-label">Tanggal Pengumpulan</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="Tanggal_pengumpulan" name="Tanggal_pengumpulan">
    </div>
  </div>
 <br>
    <br>
  <div class="form-group row">
    <div class="col-sm-12 text-center">
      <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
  </div>
  </div>
  </div>
</form>

<br> <br>                                                                              
	<br/>
	<div class="container-fluid">
	<div class="sticky-top car shadow p-3 mb-3 bg-body- rounded">
  <center><h2>Data Pengumpulan</h2></center> <br>
 <form class="d-flex" role="cari" method="post">
  <input class="form-control me-2" type="text" placeholder="Cari berdasarkan Nama" aria-label="cari" name="cari1">
  <button class="btn btn-success" type="submit" name="cari">cari</button>
  <a href=""   class="btn btn-danger">X</a>
 </form> <br>
 <div class="float-right">
			<a href="print pengumpulan.php" target="_blank" class="btn btn-success"><i class="fa fa-file-pdf-o"></i> &nbsp PRINT</a>
			<br>
 <br>
 <table class="table table-striped table-bordered" style="text-align:center">		
 <tr>
			<th>NO</th>
			<th>Nama Siswa</th>
      <th>No Absen</th>
			<th>Nama Mapel</th>
			<th>Nama Tugas</th>
      <th>Tanggal Pengumpulan</th>
      <th>Opsi</th>
		</tr>
		<?php 
    include "koneksi.php";
		$no = 1;
        if(isset($_POST['cari'])) {
            $keyword = $_POST ['cari1'];
            $q = "SELECT * FROM pengumpulan where id_pengumpulan like '$keyword%' or Nama_Siswa like '$keyword%' order by id_pengumpulan DESC";
          } else {
            $q = "SELECT * FROM pengumpulan order by Nama_Siswa desc";
            }
            $data = mysqli_query($koneksi,$q);
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['Nama_Siswa']; ?></td>
        <td><?php echo $d['No_Absen']; ?></td>
				<td><?php echo $d['Nama_Mapel']; ?></td>
				<td><?php echo $d['Nama_Tugas']; ?></td>
        <td><?php echo $d['Tanggal_pengumpulan']; ?></td>
				<td>
					<a href="edit.php?id_pengumpulan=<?php echo $d['id_pengumpulan']; ?>" type="button" class="btn btn-warning">EDIT </a>
					<a href="hapus.php?id_pengumpulan=<?php echo $d['id_pengumpulan']; ?>" type="button"  class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data ini?')">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
	</div>
	</div>

</body>
</html>