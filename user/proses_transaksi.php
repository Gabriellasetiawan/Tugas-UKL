<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ../login.php");
    exit();
}

include '../koneksi.php';

if (isset($_POST['submit'])){
    $id_kelas = $_POST['id_kelas'];
    $ID  = $_POST['id_user']; // Mengubah dari $_POST['ID'] ke $_POST['id_user']
    $total = $_POST['total'];

    $insertQuery = "INSERT INTO transaksi (id_kelas, ID, total) VALUES ('$id_kelas', '$ID', '$total')";
    $insertresult = mysqli_query($mysqli, $insertQuery);

    if ($insertresult){
        echo "Transaction successful";
        header('Location: ../aftertransaksi.php'); // Ubah ini ke halaman yang sesuai
        exit();
    } else {
        echo "Transaction failed: " . mysqli_error($mysqli);
    }
} else {
    echo "Invalid request.";
}
?>
