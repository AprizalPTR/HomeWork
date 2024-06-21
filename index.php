
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="login.css">
    <title>Login</title>
    <link rel="shortcut icon" href="stack book.png">
</head>
<body>
	<br/>
	<!-- cek pesan notifikasi -->
    <div class="container">
    <?php
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "gagal") {
            echo "<div class='alert alert-primary alert-dismissible fade show' role='alert'>Username atau Password salah
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
            ";
        }
    }
?>

        <form action="cek login.php" method="POST" class="login">
            <center><p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p></center> 
            <br>
            <div class="form-floating mb-4 form-white text-black">
                  <input type="text" class="form-control" id="floatingInput" placeholder="username" name="username" autocomplete="false">
                  <label for="floatingInput">username</label>
                  
                </div>
            <div class="form-floating mb-4 form-white text-black">
                  <input type="password" class="form-control" id="floatingInput" placeholder="password" name="password" autocomplete="false">
                  <label for="floatingInput">password</label>
                  
                </div>
            <div class="input-group">
                <button name="submit" class="btn">Login</button>
            </div>
            <p class="login-register-text">Anda belum punya akun? <a href="register.php">Register</a></p>
            
        </form>
    </div>
</body>
</html>