<?php
include_once("../koneksi.php");

$id = $_GET['id'];
$result= mysqli_query($mysqli, "DELETE FROM informasi WHERE id_informasi=$id_informasi");
header("Location:index.php");
?>