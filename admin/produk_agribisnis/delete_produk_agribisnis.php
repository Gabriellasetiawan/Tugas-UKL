<?php
include_once("../koneksi.php");

$id = $_GET['id_produk'];
$result= mysqli_query($mysqli, "DELETE FROM produk_agribisnis WHERE id_produk=$id_produk");
header("Location:index.php");
?>