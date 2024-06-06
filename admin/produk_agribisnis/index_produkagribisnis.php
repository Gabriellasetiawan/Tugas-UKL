<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman data penjualan</title>
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
            <li><a href="../../hallogin.php">Log Out</a></li>
        </Ul>
        </nav>
        
    <section class="user">
    <h1 class=".heading">Data Market</h1>
    <br>
        <a href="form_register.php" class="btn">Tambah Market</a>
        <br>
        <br>
        <table border="1" class="table">
            <tr>
                <th>Nomor</th>
                <th>Nama Market</th>
                <th>Jenis Market</th>
                <th>Isi Market</th>
                <th>Kelola</th>


            </tr>
            <?php
            include '../koneksi.php';
            $query_mysql = mysqli_query($mysqli, "SELECT * FROM market") or die(mysqli_error($mysqli));
            $nomor = 1;
            while($data = mysqli_fetch_array($query_mysql)) { 
            ?>
            <tr>
                <td><?php echo $nomor++; ?></td>
                <td><?php echo $data['nama_market']; ?></td>
                <td><?php echo $data['website_market']; ?></td>
                <td><?php echo $data['isi_market']; ?></td>
                <td><a href='edit_produk_agribisnis.php?id=<?php echo $data['id_market'];?>'>Edit</a>
                <a href='delete_produk_agribisnis?id=<?php echo $data['id_market'];?>'>Delete</a>
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

