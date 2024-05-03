<?php
include("../koneksi.php");

if(isset($_POST['simpan'])){

    $ID_petani= $_POST['ID_petani'];
    $Nama_petani= $_POST['Nama_petani'];
    $username= $_POST['username'];
    $password= $_POST['password'];
    $level= $_POST['level'];

    $result = mysqli_query($mysqli, "UPDATE user
    SET nama='$nama',username='$username',password='$password',level='$level'
    WHERE id=$id");
    header('Location: index.php');
} else{
    die("Akses dilarang...");
}
?>