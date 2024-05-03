<?php
include_once("../koneksi.php");

$id = $_GET['id'];
$result= mysqli_query($mysqli, "DELETE FROM petani WHERE Id_peternak=$Id_peternak");
header("Location:index.php");
?>