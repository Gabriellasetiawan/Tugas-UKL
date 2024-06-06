<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ../login.php");
    exit();
}

include '../koneksi.php';

$id_transaksi = $_GET['id'];

// Validasi ID transaksi
if (!isset($id_transaksi) || !is_numeric($id_transaksi)) {
    die("ID transaksi tidak valid.");
}

// Kueri untuk menghapus data transaksi berdasarkan ID
$query = "DELETE FROM transaksi WHERE id_transaksi = $id_transaksi";
$result = mysqli_query($mysqli, $query);

if ($result) {
    // Redirect ke halaman data transaksi setelah penghapusan berhasil
    header("Location: index_transaksi.php");
    exit();
} else {
    // Tampilkan pesan kesalahan jika terjadi masalah dengan kueri
    die("Error deleting record: " . mysqli_error($mysqli));
}
?>
