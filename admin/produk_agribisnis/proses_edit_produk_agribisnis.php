<?php
include("../koneksi.php");

if(isset($_POST['simpan'])){

    $id_produk= $_POST['id_produk '];
    $nama= $_POST['nama'];
    $jenis= $_POST['jenis'];
    $jumlah= $_POST['jumlah'];
    
    $result = mysqli_query($mysqli, "UPDATE produk_agribisnis
    SET id_produk='$id_produk',nama='$nama',jenis='$jenis',jumlah='$jumlah'
    WHERE id_produk=$id_produk");
    header('Location: index.php');
} else{
    die("Akses dilarang...");
}
?>