<?php
include_once("../koneksi.php");

$id = $_GET['id'];

// Hapus record terkait di tabel transaksi
mysqli_query($mysqli, "DELETE FROM transaksi WHERE ID=$id");

// Sekarang hapus user
$result = mysqli_query($mysqli, "DELETE FROM user WHERE ID=$id");

header("Location:index.php");
?>
