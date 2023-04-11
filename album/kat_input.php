<?php
require_once "Kategori.php";

$kat = new Kategori();
$rows = $kat->tampil();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Album</title>
    <link rel="stylesheet" href="../layouts/assets/css/style.css">
</head>

<body>
    <form action="kat_proses.php" method="post">
        <table>
            <tr>
                <td>Album Artist :</td>
                <td>
                    <select id="alb_id_artist" name="alb_id_artist">
                        <option>Pilih Album Artist...</option>
                        <?php foreach ($rows as $row) {
                            echo "<option value=$row[art_id]>$row[art_name]</option>";
                        }  ?>
                </td>

            </tr>
            <tr>
                <td>Album Name</td>
                <td><input type="text" name="alb_name"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="btn_simpan" value="SIMPAN"></td>
            </tr>
        </table>
    </form>
</body>

</html>