<?php

echo $_POST ['nama'];
echo "<br />";
echo $_POST ['kelas'];
echo "<br />";
echo $_POST ['absen'];
echo "<br />";

if (isset($_POST['nilai']) && $_POST['nilai']  >= 80) {
    echo "Selamat anda lulus";
} else {
    echo "maaf coba lagi";
}



?>