<?php
include_once("../koneksi.php");

$id = $_GET['id_kelas'];
$result= mysqli_query($mysqli, "DELETE FROM kelas WHERE id_kelas=$id");
header("Location:./index_kelas.php");
?>