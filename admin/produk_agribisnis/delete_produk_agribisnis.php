<?php
include_once("../koneksi.php");

$id = $_GET['id'];
$result= mysqli_query($mysqli, "DELETE FROM produk_agribisnis WHERE id_produk=$id");
header("Location:index_produkagribisnis.php");
?>