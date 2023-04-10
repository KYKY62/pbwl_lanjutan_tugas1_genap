<?php

require_once "Kategori.php";

$id = $_GET['id'];

$kat = new Kategori();
$rows = $kat->delete($id);

?>

Data berhasil dihapus!

<a href="played.php">Kembali</a>