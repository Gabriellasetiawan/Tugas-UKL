<?php
include_once("../koneksi.php");

$id = $_GET['id'];
$result= mysqli_query($mysqli, "DELETE FROM peternak WHERE Id_peternak=$id");
header("Location:index_peternak.php");
?>