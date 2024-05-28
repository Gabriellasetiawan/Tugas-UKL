<?php
include("../koneksi.php");

if(isset($_POST['simpan'])){

    $id= $_POST['id'];
    $judul_informasi= $_POST['judul_informasi'];
    $jenis_informasi= $_POST['jenis_informasi'];
    $tanggal_informasi= $_POST['tanggal_informasi'];
    $isi_informasi= $_POST['isi_informasi'];

    $result = mysqli_query($mysqli, "UPDATE informasi
    SET judul_informasi='$judul_informasi',jenis_informasi='$jenis_informasi',tanggal_informasi='$tanggal_informasi',isi_informasi='$isi_informasi'
    WHERE id=$id");
    header('Location:index_infor.php');
} else{
    die("Akses dilarang...");
}
?>