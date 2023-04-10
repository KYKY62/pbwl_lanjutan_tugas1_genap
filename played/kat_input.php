<?php
require_once "Kategori.php";

$kat = new Kategori();
$rows = $kat->tampilSelectTrack();
?>
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