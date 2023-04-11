<?php

require_once "Kategori.php";

$kat = new Kategori();
$rows = $kat->tampil();

?>
<link rel="stylesheet" href="../layouts/assets/css/style.css">
<a href="kat_input.php" class="addKategori">Tambah Kategori</a>
<table class="tableTampil">
    <tr>
        <td>No</td>
        <td>Artist Name</td>
        <td>EDIT</td>
        <td>DELETE</td>
    </tr>
    <?php
    $no = 1;
    foreach ($rows as $row) {
    ?>
        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $row['art_name']; ?></td>

            <td><a class="editButton" href="kat_edit.php?id=<?php echo $row['art_id']; ?>">Edit</a></td>
            <td><a class="deleteButton" href="kat_delete.php?id=<?php echo $row['art_id']; ?>">Delete</a></td>
        </tr>
    <?php
        $no++;
    }
    ?>
</table>