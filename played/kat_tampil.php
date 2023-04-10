<?php

require_once "Kategori.php";

$kat = new Kategori();
$rows = $kat->tampilTrack();

?>

<a href="kat_input.php">Tambah Kategori</a>
<table>
    <tr>
        <td>No</td>
        <td>Play Id Track</td>
        <td>Played Time</td>
        <td>EDIT</td>
        <td>DELETE</td>
    </tr>
    <?php
    $no = 1;
    foreach ($rows as $row) {
    ?>
        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $row['trc_name']; ?></td>
            <td><?php echo $row['ply_played']; ?></td>

            <td><a href="kat_edit.php?id=<?php echo $row['ply_id']; ?>">Edit</a></td>
            <td><a href="kat_delete.php?id=<?php echo $row['ply_id']; ?>">Delete</a></td>
        </tr>
    <?php
        $no++;
    }
    ?>
</table>