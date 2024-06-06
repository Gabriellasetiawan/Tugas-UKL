<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylehalaman.css">
</head>
<body>
    <nav>
        <ul>
        <li><a href="/Aquaponic Bussines Tugas akhir dasprog/user/Information3.php">Information</a></li>
            <li><a href="/Aquaponic Bussines Tugas akhir dasprog/user/classaftertransaksi.php">Class</a></li>
            <li><a href="/Aquaponic Bussines Tugas akhir dasprog/user/market2.php">Market</a></li>
            <li><a href="/Aquaponic Bussines Tugas akhir dasprog/user/riwayat_transaksi.php">Riwayat Transaksi</a></li>
            <li><a href="/Aquaponic Bussines Tugas akhir dasprog/index.php">Log Out</a></li>
        </ul>
    </nav>
    <header  class="header2">
        <h1>Yuk Belajar Agribisnis</h1>
    </header>
    <section>
    <?php
        include '../koneksi.php';
        $query_mysql = mysqli_query($mysqli, "SELECT * FROM kelas") or die (mysqli_error($mysqli));
        while($data = mysqli_fetch_array($query_mysql)) {
        ?>
            <div class="feature3">
                <h2><?php echo $data['nama_kelas'];?></h2>
                <p><?php echo $data['isi_kelas'];?></p>
                <a href="<?php echo $data ['website_kelas'];?>"><button class="home-btn">Kunjungi Kelas</button></a>
            </div> 
        <?php } ?>
        
    </section>
    <footer class="footer1">
        <p>&copy; “We need joy as we need air. We need love as we need water. We need each other as we need the earth we share.” </p>
    </footer>
</body>
</html>