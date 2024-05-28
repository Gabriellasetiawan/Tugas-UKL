<?php
include_once("../koneksi.php");

$id = $_GET['id'];
$result= mysqli_query($mysqli, "DELETE FROM penjualan WHERE Id_penjualan=$id");
header("Location:./index_penjualan.php");
?>