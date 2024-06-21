<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman 2</title>
</head>
<body>

<form action="aksi_test2.php" method="post">
    <input type="hidden" name="data" value="<?php echo $_POST['data']; ?>"><?php echo $_POST['data']; ?> <br>
    <label for="kepedasan">Kepedasan:</label> <br>
    <input type="radio" value="Level Kepedasan = 1" name="kepedasan"> 1
    <input type="radio" value="Level Kepedasan = 2" name="kepedasan"> 2
    <input type="radio" value="Level Kepedasan = 3" name="kepedasan"> 3 <br>
    <label for="porsi">Porsi:</label> <br>
    <input type="number" name="porsi" id="porsi"> <br>
    <button type="submit">Submit</button>
</form>

</body>
</html>
