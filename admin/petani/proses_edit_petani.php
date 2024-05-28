<?php
include("../koneksi.php");

if(isset($_POST['simpan'])){

    $ID_petani= $_POST['ID_petani'];
    $Nama_petani= $_POST['Nama_petani'];
    $Umur_petani= $_POST['Umur_petani'];

    $result = mysqli_query($mysqli, "UPDATE petani
    SET Nama_petani='$Nama_petani',Umur_petani='$Umur_petani'
    WHERE ID_petani=$id");
    header('Location: index.php');
} else{
    die("Akses dilarang...");
}
?>