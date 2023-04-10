<?php

require_once "Kategori.php";

$kat = new Kategori();
$rows = $kat->tampil();

?>

<a href="kat_input.php">Tambah Kategori</a>
<table>
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

            <td><a href="kat_edit.php?id=<?php echo $row['art_id']; ?>">Edit</a></td>
            <td><a href="kat_delete.php?id=<?php echo $row['art_id']; ?>">Delete</a></td>
        </tr>
    <?php
        $no++;
    }
    ?>
</table>