<?php
include("../koneksi.php");

if (!isset($_GET['id'])) {
    header('Location: index.php');
    exit();
}
$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM market WHERE id_market=$id");

if ($result) {
    $user_data = mysqli_fetch_array($result);
    $nama_market = $user_data['nama_market'];
    $website_market = $user_data['website_market'];
    $isi_market = $user_data['isi_market'];
} else {
    die("Query Error: " . mysqli_error($mysqli));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Market</title>
    <link rel="stylesheet" href="style_tambahpenjualan.css">
</head>
<body>
    <header>
        <h3>Formulir Edit Market</h3>
    </header>
    <form method="post" action="proses_edit_produk_agribisnis.php">
        <table>
            <tr>
                <td>Nama Market</td>
                <td><input type="text" name="nama_market" value="<?php echo $nama_market; ?>"></td>
            </tr>
            <tr>
                <td>Website Market</td>
                <td><input type="text" name="website_market" value="<?php echo $website_market; ?>"></td>
            </tr>
            <tr>
                <td>Isi Market</td>
                <td><input type="text" name="isi_market" value="<?php echo $isi_market; ?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value="<?php echo $id; ?>"></td>
                <td><input type="submit" name="simpan" value="Simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>
