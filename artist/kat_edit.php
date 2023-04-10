<?php

require_once "Kategori.php";

$id = $_GET['id'];
$kat = new Kategori();

$row = $kat->edit($id);
$rowAlbum = $kat->tampilAlbum();
?>


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