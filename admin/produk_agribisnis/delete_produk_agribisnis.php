<?php
include_once("../koneksi.php");

$id = $_GET['id'];
$result= mysqli_query($mysqli, "DELETE FROM market WHERE id_market=$id");
header("Location:index_produkagribisnis.php");
?>