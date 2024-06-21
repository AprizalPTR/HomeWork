<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="aksi1.php" method="POST">
        <table border="1">
            <tr>
                <td>no</td>
                <td>nama</td>
                <td>absen</td>
            </tr>
            <tr>
                <td>1</td>
                <td>
                    <input type="text" name="nama1">
                </td>
                <td>
                    <input type="checkbox" value="H" name="data11">
                    <input type="checkbox" value="H" name="data12">
                    <input type="checkbox" value="H" name="data13">
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>
                    <input type="text" name="nama2">
                </td>
                <td>
                    <input type="checkbox" value="H" name="data21">
                    <input type="checkbox" value="H" name="data22">
                    <input type="checkbox" value="H" name="data23">
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>
                    <input type="text" name="nama3">
                </td>
                <td>
                    <input type="checkbox" value="H" name="data31">
                    <input type="checkbox" value="H" name="data32">
                    <input type="checkbox" value="H" name="data33">
                </td>
            </tr>
        </table>
        <button type="submit">simpan</button>
    </form>
</body>
</html>