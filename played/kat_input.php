<?php
require_once "Kategori.php";

$kat = new Kategori();
$rows = $kat->tampilSelectTrack();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Played</title>
    <link rel="stylesheet" href="../layouts/assets/css/style.css">
</head>

<body>
    <form action="kat_proses.php" method="post">
        <table>
            <tr>
                <td>Play Track Name :</td>
                <td>
                    <select id="ply_id_track" name="ply_id_track">
                        <option>Pilih Album Artist...</option>
                        <?php foreach ($rows as $row) {
                            echo "<option value=$row[trc_id]>$row[trc_name]</option>";
                        }  ?>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="btn_simpan" value="SIMPAN"></td>
            </tr>
        </table>
    </form>
</body>

</html>