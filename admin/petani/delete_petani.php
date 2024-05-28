<?php
include_once("../koneksi.php");

$id = $_GET['id'];
$result= mysqli_query($mysqli, "DELETE FROM petani WHERE ID_petani=$id");
header("Location:./indexpetani.php");
?>