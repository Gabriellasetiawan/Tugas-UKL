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
            <li><a href="/Aquaponic Bussines Tugas akhir dasprog/user/Information.php">Information</a></li>
            <li><a href="/Aquaponic Bussines Tugas akhir dasprog/user/class.php">Class</a></li>
            <li><a href="/Aquaponic Bussines Tugas akhir dasprog/user/Tutorial.php">Market</a></li>
            <li><a class="login" href="/Aquaponic Bussines Tugas akhir dasprog/hallogin.php">Login</a></li>
        </ul>
    </nav>
    <header  class="header2">
        <h1>Aquaponik Sistem For Sustainability</h1>
    </header>
    <section>
    <?php
        include '../koneksi.php';
        $query_mysql = mysqli_query($mysqli, "SELECT * FROM informasi") or die (mysqli_error($mysqli));
        while($data = mysqli_fetch_array($query_mysql)) {
        ?>
            <div class="feature3">
                <h2><?php echo $data['judul_informasi'];?></h2>
                <p><?php echo $data['isi_informasi'];?></p>
            </div> 
        <?php } ?>
        
    </section>
    <footer class="footer1">
        <p>&copy; “We need joy as we need air. We need love as we need water. We need each other as we need the earth we share.” </p>
    </footer>
</body>
</html>