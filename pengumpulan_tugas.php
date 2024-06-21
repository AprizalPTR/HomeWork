<?php
    include "koneksi.php";
    global $koneksi;
    $koneksi = mysqli_connect("localhost","root","","pengumpulan_tugas");

    $result = mysqli_query ($koneksi, "SELECT * FROM tugas");

    if (mysqli_connect_errno()){
        echo "Koneksi database gagal : " . mysqli_connect_error();
    }
    
    session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:login.php?pesan=gagal");
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
        <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css'>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css'>
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.4/css/tether.min.css'>
        <title>HomeWork</title>
        <link rel="shortcut icon" href="stack book.png">
        <link rel="stylesheet" href="style.css">
    <style>
  
    </style>
  </head>
  <body>
  <div class="main-container d-flex">
        <div class="sidebar" id="side_nav">
            <div class="header-box px-2 pt-3 pb-4 d-flex justify-content-between">
                <h1 class="fs-4"> <img src="book.png" alt="Bootstrap" width="45" height="45" style="margin-right: 10px; 
                margin-bottom: 10px; margin-right: 10px;"> <span
                        class="text-white">HomeWork</span></h1>
                <button class="btn d-md-none d-block close-btn px-1 py-0 text-white"><i
                        class="fal fa-stream"></i></button>
            </div>

            <ul class="list-unstyled px-2">
                <li class=""><a href="user.php" class="text-decoration-none px-3 py-2 d-block"><i
                            ><img src="icons8-stack-50.png" alt="err" width="20px" height="20px" style="margin-right: 10px;"></i> Dashboard</a></li>
                            <li class=""><a href="data siswa.php" class="text-decoration-none px-3 py-2 d-block"><i
                            ><img src="graduated (1).png" alt="" width="20px" height="20px" style="margin-right: 10px;"></i>
                            Data Siswa</a></li>
                            <li class="active"><a href="pengumpulan_tugas.php" class="text-decoration-none px-3 py-2 d-block"><i
                            ><img src="book1.png" alt="" width="20px" height="20px" style="margin-right: 10px;"></i>
                            Pengumpulan Tugas</a></li>
                <li class=""><a href="data tugas user.php" class="text-decoration-none px-3 py-2 d-block"><i
                            ><img src="servers.png" alt="" width="20px" height="20px" style="margin-right: 10px;"></i>
                        Data Tugas</a></li>
            <hr class="h-color mx-2">

        </div>
        <div class="content">
            <nav class="navbar navbar-expand-md" id="nav_top">
                <div class="container-fluid">
                    <div class="d-flex justify-content-between d-md-none d-block">
                     <button class="btn px-1 py-0 open-btn me-2"><i class="fal fa-stream"></i></button>
                        <a class="navbar-brand fs-4" href="#"><span class="bg-dark rounded px-2 py-0 text-white">CL</span></a>
                       
                    </div>
                    <button class="navbar-toggler p-0 border-0" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fal fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                      <li class="nav-item dropdown">
                        <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <span style="color:#fff;"><?php echo $_SESSION['username']; ?></span>
                        <img src="icons8-user-48.png" alt="Bootstrap" width="30" height="30">
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                          <li><a class="dropdown-item" href="logout.php">LOG OUT</a></li>
                          
                        </ul>

                    </div>
                </div>
            </nav>

           


  <form method="POST" action="Tambah data tugas.php" style="margin-top: 100px;" enctype="multipart/form-data">
  <div class="container-fluid">
  <center><h3>Tambah Data Tugas</h3></center>
  <div class="sticky-top car shadow p-3 mb-3 bg-body- rounded">
  <div class="row mb-3">
  <div class="form-group row">
    <label for="Nama_Siswa" class="col-sm-2 col-form-label">Nama Siswa</label>
    <div class="col-sm-10">
      <select name="Nama_Siswa" class="form-control">
        <option value="">-----</option>
        <?php
        $query = mysqli_query($koneksi, "SELECT * FROM siswa ORDER BY nama ASC") or die(mysqli_error($koneksi));
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
      <input type="text" class="form-control" id="No_Absen" name="No_Absen" placeholder="Masukkan No Absen" required="required">
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
        <option>Dekstop</option>
        <option>Mobile</option>
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
      <input type="text" class="form-control" id="Nama_Tugas" name="Nama_Tugas" placeholder="Masukkan Nama Tugas" required="required">
    </div>
  </div> <br>
  <div class="form-group row">
    <label for="Pengumpulan" class="col-sm-2 col-form-label">Pengumpulan</label>
    <div class="col-sm-10">
      <input type="file" class="form-control" name="NamaFile" placeholder="Masukkan Tugas"> <br>
				<p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p>
    </div>
  </div> <br>
    <br>
  <div class="form-group row">
    <div class="col-sm-12 text-center">
      <button type="submit" class="btn btn-primary" name="proses" value="proses">Simpan</button>
    </div>
  </div>
  </div>
  </div>
</form>
<br> <br>                                                                              

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
    <script>
        document.addEventListener("DOMContentLoaded", function(){
         document.querySelectorAll('.sidebar .nav-link').forEach(function(element){
    
    element.addEventListener('click', function (e) {

      let nextEl = element.nextElementSibling;
      let parentEl  = element.parentElement;	

        if(nextEl) {
            e.preventDefault();	
            let mycollapse = new bootstrap.Collapse(nextEl);
            
            if(nextEl.classList.contains('show')){
              mycollapse.hide();
            } else {
                mycollapse.show();
                // find other submenus with class=show
                var opened_submenu = parentEl.parentElement.querySelector('.submenu.show');
                // if it exists, then close all of them
                if(opened_submenu){
                  new bootstrap.Collapse(opened_submenu);
                }
            }
        }
    }); // addEventListener
  }) // forEach
}); 
// DOMContentLoaded  end
    </script>

    <script>
        $(".sidebar ul li").on('click', function () {
            $(".sidebar ul li.active").removeClass('active');
            $(this).addClass('active');
        });

        $('.open-btn').on('click', function () {
            $('.sidebar').addClass('active');

        });


        $('.close-btn').on('click', function () {
            $('.sidebar').removeClass('active');

        })
    </script>
  </body>
</html>