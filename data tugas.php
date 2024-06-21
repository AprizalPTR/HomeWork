<?php
include "koneksi.php"; 

$selectedMapel = isset($_POST['Nama_Mapel']) ? $_POST['Nama_Mapel'] : '';

if (isset($_POST['cari'])) {
  $keyword = $_POST['cari1'];
  $q = "SELECT * FROM tugas WHERE (id_tugas LIKE '$keyword%' OR Nama_Siswa LIKE '$keyword%')";
  if (!empty($selectedMapel)) {
    $q .= " AND Nama_Mapel = '$selectedMapel'";
  }
  $q .= " ORDER BY id_tugas DESC";
} else {
  $q = "SELECT * FROM tugas";
  if (!empty($selectedMapel)) {
    $q .= " WHERE Nama_Mapel = '$selectedMapel'";
  }
  $q .= " ORDER BY Nama_Siswa ASC";
}

$data = mysqli_query($koneksi, $q);
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
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
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

<body class="bg-secondary-emphasis">
  <?php
  session_start();
  if ($_SESSION['level'] == "") {
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
  <div class="container">
    <br>
    <h2 style="text-align: center;">Data Tugas</h2>
    <br>
    <br>
    <form class="d-flex" role="cari" method="post">
      <input class="form-control me-2" type="text" placeholder="Cari berdasarkan Nama" aria-label="cari" name="cari1">
      <button class="btn btn-success" type="submit" name="cari">CARI</button>
    </form> <br>


    <form class="myForm" method="post" enctype="application/x-www-form-urlencoded" action="">
      <div class="form-row">
        <div class="form-group col-md-3">
          <label>Nama Mapel</label>
          <?php
          $mapel = '';
          $query = "SELECT Nama_Mapel FROM tugas GROUP BY Nama_Mapel ORDER BY Nama_Mapel ASC";
          $result = mysqli_query($koneksi, $query);
          while ($row = mysqli_fetch_array($result)) {
            $selected = ($row["Nama_Mapel"] == $selectedMapel) ? 'selected' : '';
            $mapel .= '<option value="' . $row["Nama_Mapel"] . '" ' . $selected . '>' . $row["Nama_Mapel"] . '</option>';
          }
          ?>
          <select name="Nama_Mapel" id="Nama_Mapel" class="custom-select" required>
            <option value="">--Pilih Mapel--</option>
            <?php echo $mapel; ?>
          </select>
        </div>
        <br>
        <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-paper-plane"></i> Submit</button>
        <a href="data tugas.php" class="btn btn-danger btn-block"><i class="fa fa-refresh"></i> Reset</a>
        <br><br>
      </div>
    </form>

    <div class="container">
      <table class="table table-striped table-bordered" style="text-align:center">
        <tr>
          <th>NO</th>
          <th>Nama Siswa</th>
          <th>Nama Mapel</th>
          <th>Nama Tugas</th>
          <th>pengumpulan</th>
          <th>opsi</th>
        </tr>
        <?php
        $no = 1;
        while ($d = mysqli_fetch_array($data)) {
        ?>
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $d['Nama_Siswa']; ?></td>
            <td><?php echo $d['Nama_Mapel']; ?></td>
            <td><?php echo $d['Nama_Tugas']; ?></td>
            <td><img src="img/<?php echo $d['Pengumpulan']; ?>" style="width: 80px; height: 80px;"></td>
            <td>
          </tr>
        <?php
        }
        ?>
      </table>
    </div>
  </div>
</body>

</html>