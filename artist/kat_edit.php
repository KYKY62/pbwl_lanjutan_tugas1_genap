<?php

require_once "Kategori.php";

$id = $_GET['id'];
$kat = new Kategori();

$row = $kat->edit($id);
$rowAlbum = $kat->tampilAlbum();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Artist</title>
    <link rel="stylesheet" href="../layouts/assets/css/style.css">
</head>

<body>
    <form action="kat_proses.php" method="post">
        <input type="hidden" name="art_id" value="<?php echo $id; ?>">
        <table>
            <tr>
                <td>Artist Name</td>
                <td><input type="text" name="art_name" value="<?php echo $row['art_name']; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="btn_update" value="UPDATE"></td>
            </tr>
        </table>
    </form>
</body>

</html>