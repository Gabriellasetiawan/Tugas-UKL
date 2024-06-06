<?php
include("../koneksi.php");

if (isset($_POST['simpan'])) {
    $Id_penjualan = $_POST['Id_penjualan'];
    $Dalam_negeri = $_POST['Dalam_negeri'];
    $Luar_negeri = $_POST['Luar_negeri'];
    $Online = $_POST['Online'];
    $Offline = $_POST['Offline'];
    $id_produk = $_POST['id_produk'];

    $result = mysqli_query($mysqli, "UPDATE penjualan SET 
        Dalam_negeri='$Dalam_negeri', 
        Luar_negeri='$Luar_negeri', 
        Online='$Online', 
        Offline='$Offline', 
        id_produk='$id_produk' 
        WHERE Id_penjualan=$Id_penjualan");

    if ($result) {
        header('Location: index_penjualan.php');
        exit();
    } else {
        die("Query Error: " . mysqli_error($mysqli));
    }
} else {
    die("Akses dilarang...");
}
?>
