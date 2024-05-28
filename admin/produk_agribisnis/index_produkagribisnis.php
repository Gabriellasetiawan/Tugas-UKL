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
        <li><a href="informasi/index_infor.php">Informasi</a></li>
            <li><a href="petani/indexpetani.php">Petani</a></li>
            <li><a href="peternak/index_peternak.php">Peternak</a></li>
            <li><a href="penjualan/index_penjualan.php">Penjualan</a></li>
            <li><a href="produk_agribisnis/index_produkagribisnis.php">Market</a></li>
            <li><a href="kelas/index_kelas.php">Kelas</a></li>
        </Ul>
        </nav>
        
        <main>
        <section>
            <h2>Admin Information</h2>
            <p>Name: Gabriella Fajar Setiawan</p>
            <p>Email: gabysetiawan17@gmail.com</p>
            <p>Location: SMK Telkom Sidoarjo</p>
        </section>
    </main>
    <section class="user">
    <h1 class=".heading">Data Market</h1>
    <br>
        <a href="form_register.php" class="btn">Tambah Market</a>
        <br>
        <br>
        <table border="1" class="table">
            <tr>
                <th>Nomor</th>
                <th>id_market</th>
                <th>nama_market</th>
                <th>jenis_market</th>
                <th>isi_market</th>
                <th>kelola</th>


            </tr>
            <?php
            include '../koneksi.php';
            $query_mysql = mysqli_query($mysqli, "SELECT * FROM market") or die(mysqli_error($mysqli));
            $nomor = 1;
            while($data = mysqli_fetch_array($query_mysql)) { 
            ?>
            <tr>
                <td><?php echo $nomor++; ?></td>
                <td><?php echo $data['id_market']; ?></td>
                <td><?php echo $data['nama_market']; ?></td>
                <td><?php echo $data['jenis_market']; ?></td>
                <td><?php echo $data['isi_market']; ?></td>
                <td><a href='edit_produk_agribisnis.php?id=<?php echo $data['id_produk'];?>'>Edit</a>
                <a href='delete_produk_agribisnis?id=<?php echo $data['id_produk'];?>'>Delete</a>
            </td>
            
            <?php } ?>
            </tr>
        </table>
        <br>
        <br>
    <a href="../index.php" class="btn">Log Out</a>
    </section>


    <footer>
        <p>&copy; 2024 admin Page. All rights reserved.</p>
    </footer>
</body>
</html>

