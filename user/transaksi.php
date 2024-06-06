<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ../login.php");
    exit();
}

include '../koneksi.php';
$username = $_SESSION['username'];

$query = "SELECT * FROM user WHERE username = '$username'";
$result = mysqli_query($mysqli, $query);

if (!$result) {
    die("Query Error: " . mysqli_error($mysqli));
}

$userData = mysqli_fetch_assoc($result);
$ID = $userData['ID'];

if (isset($_GET['id'])) {
    $id_kelas = $_GET['id'];
    $query = "
        SELECT kelas.id_kelas, kelas.nama_kelas, kelas.harga_kelas
        FROM kelas
        WHERE kelas.id_kelas = '$id_kelas'
    ";
    $result = mysqli_query($mysqli, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi Kelas</title>
    <link rel="stylesheet" href="styletransaksi.css">
</head>
<body>
    <div class="container">
        <h2><?php echo $row['nama_kelas']; ?></h2>
        <p>Nama: <?php echo $userData['Username']; ?></p>
        <p>Harga: Rp. <?php echo $row['harga_kelas']; ?></p>
        
        <form action="proses_transaksi.php" method="post">
            <input type="hidden" name="id_kelas" value="<?php echo $row['id_kelas']; ?>">
            <input type="hidden" name="id_user" value="<?php echo $ID; ?>">
            <input type="hidden" name="total" value="<?php echo $row['harga_kelas']; ?>">
            <button type="submit" name="submit">Bayar Kelas</button>
        </form>
    </div>
</body>
</html>
<?php
    }
}
?>