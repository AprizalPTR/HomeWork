<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <table border="1">
        <tr>
            <td>no</td>
            <td>nama</td>
            <td>absen</td>
        </tr>

        <?php
        $jumlahBaris = 3;

        for ($i = 1; $i <= $jumlahBaris; $i++) {
            echo "<tr>";
            echo "<td>$i</td>";
            echo "<td>";
            if (isset($_POST["nama$i"])) {
                echo $_POST["nama$i"];
            }
            echo "</td>";
            echo "<td>";
            for ($j = 1; $j <= 3; $j++) {
                $key = "data${i}${j}";
                if (isset($_POST[$key]) && $_POST[$key]) {
                    echo $_POST[$key];
                } else {
                    echo "A";
                }
            }
            echo "</td>";
        }
        ?>

    </table>
</body>

</html>
