<?php

require_once "Kategori.php";

$id = $_GET['id'];
$kat = new Kategori();

$rows = $kat->edit($id);
$rowAlbum = $kat->tampilAlbum();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Album </title>
    <link rel="stylesheet" href="../layouts/assets/css/style.css">
</head>

<body>
    <form action="kat_proses.php" method="post">
        <input type="hidden" name="alb_id" value="<?php echo $id; ?>">
        <table>
            <tr>
                <td>Track Id Album</td>
                <td>
                    <select id="alb_id_artist" name="alb_id_artist">
                        <?php foreach ($rowAlbum as $row) {
                            echo "<option value=$row[art_id]>$row[art_name]</option>";
                        }  ?>
                </td>
            </tr>
            <tr>
                <td>Album Name</td>
                <td><input type="text" name="alb_name" value="<?php echo $rows['alb_name']; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="btn_update" value="UPDATE"></td>
            </tr>
        </table>
    </form>
</body>

</html>