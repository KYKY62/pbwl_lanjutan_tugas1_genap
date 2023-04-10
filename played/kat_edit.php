<?php

require_once "Kategori.php";

$id = $_GET['id'];
$kat = new Kategori();

$row = $kat->edit($id);
$rowAlbum = $kat->tampilSelectTrack();
?>


<form action="kat_proses.php" method="post">
    <input type="hidden" name="ply_id" value="<?php echo $id; ?>">
    <table>
        <tr>
            <td>Play Track Name :</td>
            <td>
                <select id="ply_id_track" name="ply_id_track">
                    <option>Pilih Album Artist...</option>
                    <?php foreach ($rowAlbum as $row) {
                        echo "<option value=$row[trc_id]>$row[trc_name]</option>";
                    }  ?>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>