<?php
require_once "app/Kategori.php";

$kat = new Kategori();
$rows = $kat->tampilAlbum();
$rowArtist = $kat->selectArtist();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Track</title>
    <link rel="stylesheet" href="layouts/assets/css/style.css">
</head>

<body>
    <form action="kat_proses.php" method="post">
        <table>
            <tr>
                <td>Track Name</td>
                <td><input type="text" name="trc_name"></td>
            </tr>
            <tr>
                <td>Id Album :</td>
                <td>
                    <select id="trc_id_album" name="trc_id_album">
                        <option>Pilih Id Album...</option>
                        <?php foreach ($rowArtist as $row) {
                            echo "<option value=$row[alb_id]>$row[alb_name]</option>";
                        }  ?>
                </td>
            </tr>
            <tr>
                <td>Time</td>
                <td><input type="text" name="time"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="btn_simpan" value="SIMPAN"></td>
            </tr>
        </table>
    </form>
</body>

</html>