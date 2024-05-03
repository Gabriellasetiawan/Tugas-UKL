<?php
include("../koneksi.php");

if(isset($_POST['simpan'])){

    $id_informasi= $_POST['id_informasi'];
    $judul_informasi= $_POST['judul_informasi'];
    $jenis_informasi= $_POST['jenis_informasi'];
    $tanggal_informasi= $_POST['tanggal_informasi'];

    $result = mysqli_query($mysqli, "UPDATE informasi
    SET id_informasi='$id_informasi',judul_informasi='$judul_informasi',jenis_informasi='$jenis_informasi',tanggal_informasi='$tanggal_informasi'
    WHERE id_informasi=$id_informasi");
    header('Location: index.php');
} else{
    die("Akses dilarang...");
}
?>