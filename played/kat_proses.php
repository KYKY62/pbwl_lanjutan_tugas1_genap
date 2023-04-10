<?php

require_once "Kategori.php";

$kat = new Kategori();

if (isset($_POST['btn_simpan'])) {
    $kat->simpan();
    header("location:played.php");
}

if (isset($_POST['btn_update'])) {
    $kat->update();
    header("location:played.php");
}
