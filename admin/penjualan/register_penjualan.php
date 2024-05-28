<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form register</title>
    <link rel="stylesheet" href="style_tambahpenjualan.css">
</head>
<body>
    <div  class="container">
        <h1 class="title">Tambah Data Penjualan</h1>
<form class="form" action= "register_penjualan.php" method="post">
    <table>
        <tr>
            <td>Id penjualan</td>
            <td><input type="text" name="Id_penjualan"></td>
        </tr>
       <tr>
       <td>id produk</td>
        <td><input type="text" name="id_produk" required></td>
       </tr>
       <tr>
        <td>Dalam negeri</td>
        <td><input type="text" name="Dalam_negeri" required></td>
       </tr>
       <tr>
        <td>Luar negeri</td>
        <td><input type="text" name="Luar_negeri" required></td>
       </tr>
       <tr>
        <td>Online</td>
        <td><input type="text" name="Online" required></td>
       </tr>
       <tr>
        <td>Offline</td>
        <td><input type="text" name="Offline" required></td>
       </tr>
       <tr>
        <td><button class="button" name="submit">Register</button></td>
       </tr>
       <?php
if(isset($_POST['submit'])){
    $Dalam_negeria= $_POST['Dalam_negeri'];
    $Luar_negeris= $_POST['Luar_negeri'];
    $Onlines= $_POST['Online'];
    $Offlines= $_POST['Offline'];



    include_once("koneksi.php");

    $result = mysqli_query($mysqli,
    "INSERT INTO petani(Nama_petani,Umur_petani) VALUES ('$Namas','$Umurs')");

    header("location:index.php");
}
?>
    </table>
</form>
    </div>
</body>
</html>