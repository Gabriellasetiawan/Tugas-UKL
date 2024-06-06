<?php
include("../koneksi.php");

if (isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $judul_informasi = $_POST['judul_informasi'];
    $jenis_informasi = $_POST['jenis_informasi'];
    $tanggal_informasi = $_POST['tanggal_informasi'];
    $isi_informasi = $_POST['isi_informasi'];

    $result = mysqli_query($mysqli, "UPDATE informasi SET 
        judul_informasi='$judul_informasi',
        jenis_informasi='$jenis_informasi',
        tanggal_informasi='$tanggal_informasi',
        isi_informasi='$isi_informasi' 
        WHERE id_informasi=$id");

    if ($result) {
        header('Location: index_infor.php');
        exit();
    } else {
        die("Query Error: " . mysqli_error($mysqli));
    }
} else {
    die("Akses dilarang...");
}
?>
