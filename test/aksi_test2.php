<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman 3</title>
</head>
<body>

<?php
if (isset($_POST['data'])) {
    echo  $_POST['data'] . "<br>";
} else {
    echo "Tidak ada data <br>";
}

if (isset($_POST['kepedasan'])) {
    echo  $_POST['kepedasan'] . "<br>";
} else {
    echo "Tidak ada kepedasan <br>";
}

if (isset($_POST['porsi'])) {
    echo  $_POST['porsi'] . "<br>";
} else {
    echo "Tidak ada porsi <br>";
}
?>

</body>
</html>
