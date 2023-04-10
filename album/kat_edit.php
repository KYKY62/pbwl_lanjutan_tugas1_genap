<?php

require_once "Kategori.php";

$id = $_GET['id'];
$kat = new Kategori();

$row = $kat->edit($id);
$rowAlbum = $kat->tampilAlbum();
?>


<form action="kat_proses.php" method="post">
    <input type="" name="alb_id" value="<?php echo $id; ?>">
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
            <td><input type="text" name="alb_name" value="<?php echo $row['alb_name']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>