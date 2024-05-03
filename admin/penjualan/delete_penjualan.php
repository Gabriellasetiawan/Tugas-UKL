<?php
include_once("../koneksi.php");

$Id_penjualan = $_GET['Id_penjualan'];
$result= mysqli_query($mysqli, "DELETE FROM penjualan WHERE Id_penjualan=$Id_penjualan");
header("Location:index.php");
?>