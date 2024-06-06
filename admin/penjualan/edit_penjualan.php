<?php
include("../koneksi.php");

if (!isset($_GET['id'])) {
    header('Location: index.php');
    exit();
}
$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM penjualan WHERE Id_penjualan=$id");

if ($result) {
    $user_data = mysqli_fetch_array($result);
    $Dalam_negeri = $user_data['Dalam_negeri'];
    $Luar_negeri = $user_data['Luar_negeri'];
    $Online = $user_data['Online'];
    $Offline = $user_data['Offline'];
    $id_produk = $user_data['id_produk'];
} else {
    die("Query Error: " . mysqli_error($mysqli));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Penjualan</title>
    <link rel="stylesheet" href="style_tambahpenjualan.css">
</head>
<body>
    <header>
        <h3>Formulir Edit Penjualan</h3>
    </header>
    <form method="post" action="proses_edit_penjualan.php">
        <table>
            <tr>
                <td>Dalam Negeri</td>
                <td><input type="text" name="Dalam_negeri" value="<?php echo $Dalam_negeri; ?>"></td>
            </tr>
            <tr>
                <td>Luar Negeri</td>
                <td><input type="text" name="Luar_negeri" value="<?php echo $Luar_negeri; ?>"></td>
            </tr>
            <tr>
                <td>Online</td>
                <td><input type="text" name="Online" value="<?php echo $Online; ?>"></td>
            </tr>
            <tr>
                <td>Offline</td>
                <td><input type="text" name="Offline" value="<?php echo $Offline; ?>"></td>
            </tr>
            <tr>
                <td>ID Produk</td>
                <td><input type="text" name="id_produk" value="<?php echo $id_produk; ?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="Id_penjualan" value="<?php echo $id; ?>"></td>
                <td><input type="submit" name="simpan" value="Simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>
