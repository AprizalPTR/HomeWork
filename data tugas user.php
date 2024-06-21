<?php
    session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:login.php?pesan=gagal");
	}

?>

<!DOCTYPE html>
<html lang="en">
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
                <h1 class="fs-4"> <img src="book.png" alt="Bootstrap" width="45" height="45" style="margin-bottom: 10px; margin-right: 10px;"> <span
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
                            <li class=""><a href="pengumpulan_tugas.php" class="text-decoration-none px-3 py-2 d-block"><i
                            ><img src="book1.png" alt="" width="20px" height="20px" style="margin-right: 10px;"></i>
                            Pengumpulan Tugas</a></li>
                <li class="active"><a href="data tugas user.php" class="text-decoration-none px-3 py-2 d-block" ><i
                            ><img src="servers.png" alt="" width="20px" height="20px" style="margin-right: 10px;"></i>
                        Data Tugas</a></li>
                        <hr class="h-color mx-2">
            </ul>
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

            <div class="container">
              <br>
		<h2 style="text-align: center;">Data Tugas</h2>		
		<br>
		<?php 
		if(isset($_GET['alert'])){
			if($_GET['alert']=='gagal_ekstensi'){
				?>
				<div class="alert alert-warning alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<h4><i class="icon fa fa-warning"></i> Peringatan !</h4>
					Ekstensi Tidak Diperbolehkan
				</div>								
				<?php
			}elseif($_GET['alert']=="gagal_ukuran"){
				?>
				<div class="alert alert-warning alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<h4><i class="icon fa fa-check"></i> Peringatan !</h4>
					Ukuran File terlalu Besar
				</div> 								
				<?php
			}elseif($_GET['alert']=="berhasil"){
				?>
				<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<h4><i class="icon fa fa-check"></i> Success</h4>
					Berhasil Disimpan
				</div> 								
				<?php
			}
		}
		?>
		<br>
    <form class="d-flex" role="cari" method="post">
        <input class="form-control me-2" type="text" placeholder="Cari berdasarkan Nama" aria-label="cari" name="cari1">
        <button class="btn btn-success" type="submit" name="cari">CARI</button>
        <a href=""   class="btn btn-danger">X</a>
        </form> <br>
            
      <table class="table table-striped table-bordered" style="text-align:center">		
      <tr>
			<th>NO</th>
			<th>Nama Siswa</th>
			<th>Nama Mapel</th>
			<th>Nama Tugas</th>
      <th>pengumpulan</th>
		</tr>
		<?php 
    include "koneksi.php";
		$no = 1;
        if(isset($_POST['cari'])) {
            $keyword = $_POST ['cari1'];
            $q = "SELECT * FROM tugas where id_tugas like '$keyword%' or Nama_Siswa like '$keyword%' order by id_tugas DESC";
          } else {
            $q = "SELECT * FROM tugas order by Nama_Siswa desc";
            }
            $data = mysqli_query($koneksi,$q);
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['Nama_Siswa']; ?></td>
				<td><?php echo $d['Nama_Mapel']; ?></td>
				<td><?php echo $d['Nama_Tugas']; ?></td>
        <td><img src="img<?php echo $d['Pengumpulan']; ?>"></td>
        
			</tr>
			<?php 
		}
		?>
	</table>
	</div>
	</div>

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