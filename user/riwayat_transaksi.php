<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ../login.php");
    exit();
}

include '../koneksi.php';
$username = $_SESSION['username'];

$queryUser = "SELECT * FROM user WHERE username = '$username'";
$resultUser = mysqli_query($mysqli, $queryUser); // Corrected here

if (!$resultUser) {
    die("Query Error: " . mysqli_error($mysqli));
}

$userData = mysqli_fetch_assoc($resultUser);
$ID = $userData['ID'];

$queryTransaksi = "
SELECT transaksi.ID, transaksi.total, kelas.nama_kelas
FROM transaksi
JOIN kelas ON transaksi.id_kelas = kelas.id_kelas
WHERE transaksi.ID = '$ID'
ORDER BY transaksi.id_transaksi DESC
";
$resultTransaksi = mysqli_query($mysqli, $queryTransaksi);

if (!$resultTransaksi) {
    die("Query Error: " . mysqli_error($mysqli));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Transaksi</title>
    <link rel="stylesheet" href="styletransaksi.css">
</head>
<body>
    <div class="container">
        <h2>Riwayat Transaksi</h2>
        <table>
            <thead>
                <tr>
                    <th>ID Transaksi</th>
                    <th>Nama Kelas</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($resultTransaksi)) { ?>
                    <tr>
                        <td><?php echo $row['ID']; ?></td>
                        <td><?php echo $row['nama_kelas']; ?></td>
                        <td>Rp. <?php echo $row['total']; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
