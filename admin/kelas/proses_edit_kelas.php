<?php
include("../koneksi.php");

if (isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $nama_kelas = $_POST['nama_kelas'];
    $website_kelas = $_POST['website_kelas'];
    $isi_kelas = $_POST['isi_kelas'];

    // Update query
    $query = "UPDATE kelas SET 
                nama_kelas='$nama_kelas', 
                website_kelas='$website_kelas', 
                isi_kelas='$isi_kelas' 
              WHERE id_kelas=$id";

    $result = mysqli_query($mysqli, $query);

    if ($result) {
        header('Location: index_kelas.php');
        exit();
    } else {
        die("Query Error: " . mysqli_error($mysqli));
    }
} else {
    die("Akses dilarang...");
}
?>
