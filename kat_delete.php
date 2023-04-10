<?php

require_once "app/Kategori.php";

$id = $_GET['id'];

$kat = new Kategori();
$rows = $kat->delete($id);

?>

Data berhasil dihapus!

<a href="index.php">Kembali</a>