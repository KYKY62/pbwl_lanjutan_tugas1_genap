<?php
require_once "Kategori.php";

$kat = new Kategori();
$rows = $kat->tampilAlbum();
?>
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