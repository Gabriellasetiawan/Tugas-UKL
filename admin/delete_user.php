<?php
include_once("../koneksi.php");

$id = $_GET['id'];
$result= mysqli_query($mysqli, "DELETE FROM user WHERE ID=$id");
header("Location:index.php");
?>