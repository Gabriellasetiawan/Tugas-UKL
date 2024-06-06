<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman data user</title>
    <link rel="stylesheet" href="style.css">
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
            <li><a href="/Aquaponic Bussines Tugas akhir dasprog/admin/transaksi/index_transaksi.php">Transaksi</a></li>
            <li><a href="../hallogin.php">Log Out</a></li>
        </Ul>
        </Ul>
        </nav>
        
    <section class="user">
    <h1 class=".heading">Data User</h1>
    <br>
        <a href="form_register.php" class="btn">Tambah User</a>
        <br>
        <br>
        <table border="1" class="table">
            <tr>
                <th>Nomer</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Password</th>
                <th>Level</th>
                <th>Kelola</th>
            </tr>
            <?php
            include '../koneksi.php';
            $query_mysql = mysqli_query($mysqli, "SELECT * FROM user") or die(mysqli_error($mysqli));
            $nomor = 1;
            while($data = mysqli_fetch_array($query_mysql)) { 
            ?>,.,     
            <tr>
                <td><?php echo $nomor++; ?></td>
                <td><?php echo $data['Nama']; ?></td>
                <td><?php echo $data['Username']; ?></td>
                <td><?php echo $data['Password']; ?></td>
                <td><?php echo $data['Level']; ?></td>
                <td><a href='edit_user.php?id=<?php echo $data['ID'];?>'>Edit</a>
                <a href='delete_user.php?id=<?php echo $data['ID'];?>'>Delete</a>
            </td>
            
            <?php } ?>
            </tr>
        </table>
        <br>
        <br>
    </section>


    <footer>
            <h2>&copy;Admin Information</h2>
            <p>Name: Gabriella Fajar Setiawan</p>
            <p>Email: gabysetiawan17@gmail.com</p>
            <p>Location: SMK Telkom Sidoarjo</p>
    </footer>
</body>
</html>

