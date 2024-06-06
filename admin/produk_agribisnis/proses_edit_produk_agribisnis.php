<?php
include("../koneksi.php");

if (isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $nama_market = $_POST['nama_market'];
    $website_market = $_POST['website_market'];
    $isi_market = $_POST['isi_market'];

    // Update query
    $query = "UPDATE market SET 
                nama_market='$nama_market', 
                website_market='$website_market', 
                isi_market='$isi_market' 
              WHERE id_market=$id";

    $result = mysqli_query($mysqli, $query);

    if ($result) {
        header('Location: index_produkagribisnis.php');
        exit();
    } else {
        die("Query Error: " . mysqli_error($mysqli));
    }
} else {
    die("Akses dilarang...");
}
?>
