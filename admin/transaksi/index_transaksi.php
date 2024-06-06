<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ../login.php");
    exit();
}

include '../koneksi.php';

$query = "
    SELECT 
        transaksi.id_transaksi,
        user.username,
        kelas.nama_kelas,
        transaksi.total
    FROM 
        transaksi
    JOIN 
        user ON transaksi.ID = user.ID
    JOIN 
        kelas ON transaksi.id_kelas = kelas.id_kelas
";
$result = mysqli_query($mysqli, $query);

if (!$result) {
    die("Query Error: " . mysqli_error($mysqli));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman data user</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <header> 
        <h1 class=".heading">Welcome admin!</h1>
        <nav>
        <Ul>
            <li><a href="/Aquaponic Bussines Tugas akhir dasprog/admin/index.php">User</a></li>
            <li><a href="/Aquaponic Bussines Tugas akhir dasprog/admin/informasi/index_infor.php">Informasi</a></li>
            <li><a href="/Aquaponic Bussines Tugas akhir dasprog/admin/penjualan/index_penjualan.php">Penjualan</a></li>
            <li><a href="/Aquaponic Bussines Tugas akhir dasprog/admin/produk_agribisnis/index_produkagribisnis.php">Market</a></li>
            <li><a href="/Aquaponic Bussines Tugas akhir dasprog/admin/kelas/index_kelas.php">Kelas</a></li>
            <li><a href="../hallogin.php">Log Out</a></li>
        </Ul>
        </Ul>
        </nav>
        
    <section class="user">
    <h1 class=".heading">Data Transaksi</h1>
    <br>
        <a href="form_register.php" class="btn">Tambah Transaksi</a>
        <br>
        <br>
        <table border="1">
            <tr>
                <th>ID Transaksi</th>
                <th>Username</th>
                <th>Nama Kelas</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row['id_transaksi']; ?></td>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['nama_kelas']; ?></td>
                <td>Rp. <?php echo $row['total']; ?></td>
                <td>
                    <a href="edit_transaksi.php?id=<?php echo $row['id_transaksi']; ?>">Edit</a>
                    <a href="delete_transaksi.php?id=<?php echo $row['id_transaksi']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>
