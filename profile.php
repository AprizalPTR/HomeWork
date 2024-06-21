<?php

    global $koneksi;
    $koneksi = mysqli_connect("localhost","root","","pengumpulan_tugas");

    $result = mysqli_query ($koneksi, "SELECT * FROM siswa");

    if (mysqli_connect_errno()){
        echo "Koneksi database gagal : " . mysqli_connect_error();
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
    <style>
        * {
    margin: 0;
    padding: 0
}

body {
    background-color: #000
}

.card {
    width: 350px;
    background-color: #efefef;
    border: none;
    cursor: pointer;
    transition: all 0.5s;
}

.image img {
    transition: all 0.5s
}

.card:hover .image img {
    transform: scale(1.5)
}

.btn {
    height: 140px;
    width: 140px;
    border-radius: 50%
}

.name {
    font-size: 22px;
    font-weight: bold
}

.idd {
    font-size: 14px;
    font-weight: 600
}

.idd1 {
    font-size: 12px
}

.number {
    font-size: 22px;
    font-weight: bold
}

.follow {
    font-size: 12px;
    font-weight: 500;
    color: #444444
}

.btn1 {
    height: 40px;
    width: 150px;
    border: none;
    background-color: #000;
    color: #aeaeae;
    font-size: 15px
}

.text span {
    font-size: 13px;
    color: #545454;
    font-weight: 500
}

.icons i {
    font-size: 19px
}

hr .new1 {
    border: 1px solid
}

.join {
    font-size: 14px;
    color: #a0a0a0;
    font-weight: bold
}

.date {
    background-color: #ccc
}
    </style>
    <title>Document</title>
</head>
<body>
<?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php");
	}
 
	?>
        <div class="container mt-4 mb-4 p-3 d-flex justify-content-center"> 
            <div class="card p-4"> 
                <div class=" image d-flex flex-column justify-content-center align-items-center"> 
                    <button class="btn btn-secondary"> 
                        <img src="https://i.imgur.com/wvxPV9S.png" height="100" width="100" />
                    </button> 
                    <span class="name mt-3">Eleanor Pena</span> 
                    <span class="idd">@eleanorpena</span> 
                    <div class="d-flex flex-row justify-content-center align-items-center gap-2"> 
                        <span class="idd1">Oxc4c16a645_b21a</span> 
                        <span><i class="fa fa-copy"></i></span> </div> 
                        <div class="d-flex flex-row justify-content-center align-items-center mt-3"> 
                            <span class="number">1069 <span class="follow">Followers</span></span> </div>
                             <div class=" d-flex mt-2"> <button class="btn1 btn-dark">Edit Profile</button> </div> 
                             <div class="text mt-3"> <span>Eleanor Pena is a creator of minimalistic x bold graphics and digital artwork.<br><br> Artist/ Creative Director by Day #NFT minting@ with FND night. </span> 
                            </div> 
                            <div class="gap-3 mt-3 icons d-flex flex-row justify-content-center align-items-center"> 
                                <span><i class="fa fa-twitter"></i></span> <span><i class="fa fa-facebook-f"></i></span> 
                                <span><i class="fa fa-instagram"></i></span> <span><i class="fa fa-linkedin"></i></span> 
                            </div> 
                            <div class=" px-2 rounded mt-4 date "> <span class="join">Joined May,2021</span> 
        </div> 
        </div> 
        </div>
        </div>
</body>
</html>