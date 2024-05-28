<?php
include_once("../koneksi.php");

$id = $_GET['id'];
$result= mysqli_query($mysqli, "DELETE FROM informasi WHERE id_informasi=$id");
header("Location:./indexinfor.php");
?>