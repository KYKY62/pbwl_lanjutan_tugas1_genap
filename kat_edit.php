<?php

require_once "app/Kategori.php";

$id = $_GET['id'];
$kat = new Kategori();

$row = $kat->edit($id);
$rowAlbum = $kat->tampilAlbum();
?>


<form action="kat_proses.php" method="post">
    <input type="hidden" name="trc_id" value="<?php echo $row['trc_id']; ?>">
    <table>
        <tr>
            <td>Track Name</td>
            <td><input type="text" name="trc_name" value="<?php echo $row['trc_name']; ?>"></td>
        </tr>
        <tr>
            <td>Track Id Album</td>
            <td>
                <select id="trc_id_album" name="trc_id_album">
                    <option>Pilih Id Album...</option>
                    <?php foreach ($rowAlbum as $row) {
                        echo "<option value=$row[alb_id]>$row[alb_id]</option>";
                    }  ?>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>