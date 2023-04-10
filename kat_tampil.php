<?php

require_once "app/Kategori.php";

$kat = new Kategori();
$rows = $kat->tampil();

?>

<a href="kat_input.php">Tambah Kategori</a>
<table>
    <tr>
        <td>No</td>
        <td>Track Name</td>
        <td>Album Name</td>
        <td>Time</td>
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
            <td><?php echo $row['alb_name']; ?></td>
            <td><?php echo $row['time']; ?></td>
            <td><a href="kat_edit.php?id=<?php echo $row['trc_id']; ?>">Edit</a></td>
            <td><a href="kat_delete.php?id=<?php echo $row['trc_id']; ?>">Delete</a></td>
        </tr>
    <?php
        $no++;
    }
    ?>
</table>