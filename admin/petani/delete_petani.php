<?php
include_once("../koneksi.php");

$id = $_GET['ID_petani'];
$result= mysqli_query($mysqli, "DELETE FROM petani WHERE ID_petani=$id");
header("Location:index.php");
?>