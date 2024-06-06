<?php
include("../koneksi.php");

if (!isset($_GET['id'])) {
    header('Location: index.php');
    exit();
}
$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM kelas WHERE id_kelas=$id");

if ($result) {
    $user_data = mysqli_fetch_array($result);
    $nama_kelas = $user_data['nama_kelas'];
    $website_kelas = $user_data['website_kelas'];
    $isi_kelas = $user_data['isi_kelas'];
} else {
    die("Query Error: " . mysqli_error($mysqli));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kelas</title>
    <link rel="stylesheet" href="style_tambahpenjualan.css">
</head>
<body>
    <header>
        <h3>Formulir Edit Kelas</h3>
    </header>
    <form method="post" action="proses_edit_produk_agribisnis.php">
        <table>
            <tr>
                <td>Nama Kelas</td>
                <td><input type="text" name="nama_kelas" value="<?php echo $nama_kelas; ?>"></td>
            </tr>
            <tr>
                <td>Website Kelas</td>
                <td><input type="text" name="website_kelas" value="<?php echo $website_kelas; ?>"></td>
            </tr>
            <tr>
                <td>Isi Kelas</td>
                <td><input type="text" name="isi_kelas" value="<?php echo $isi_kelas; ?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value="<?php echo $id; ?>"></td>
                <td><input type="submit" name="simpan" value="Simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>
