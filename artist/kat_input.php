<?php
require_once "Kategori.php";

$kat = new Kategori();
$rows = $kat->tampilAlbum();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Artist</title>
    <link rel="stylesheet" href="../layouts/assets/css/style.css">
</head>

<body>
    <form action="kat_proses.php" method="post">
        <table>
            <tr>
                <td>Artist Name</td>
                <td><input type="text" name="art_name"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="btn_simpan" value="SIMPAN"></td>
            </tr>
        </table>
    </form>
</body>

</html>