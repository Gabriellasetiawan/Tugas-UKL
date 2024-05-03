<?php
include("../koneksi.php");

if(isset($_POST['simpan'])){

    $Dalam_negeri= $_POST['Dalam_negeri'];
    $Luar_negeri= $_POST['Luar_negeri'];
    $Online= $_POST['Online'];
    $Offline= $_POST['Offline'];
    $id_produk= $_POST['id_produk'];
    $Id_penjualan= $_POST['Id_penjualan'];


    $result = mysqli_query($mysqli, "UPDATE penjualan
    SET Dalam_negeri='$Dalam_negeri',Luar_negeri='$Luar_negeri',Online='$Online',Offline='$Offline',id_produk='$id_produk',Id_penjualan='$Id_penjualan',
    WHERE Id_penjualan=$Id_penjualan");
    header('Location: index.php');
} else{
    die("Akses dilarang...");
}
?>