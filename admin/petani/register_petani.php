<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form register</title>
    <link rel="stylesheet" href="style_tambahpetani.css">
</head>
<body>
    <div  class="container">
        <h1 class="title">Tambah Data Petani</h1>
<form class="form" action= "register_petani.php" method="post">
    <table>
        <tr>
            <td>ID_petani</td>
            <td><input type="text" name="ID_petani"></td>
        </tr>
       <tr>
       <td>Nama</td>
        <td><input type="text" name="Nama_petani" required></td>
       </tr>
       <tr>
        <td>Umur</td>
        <td><input type="text" name="Umur_petani" required></td>
       </tr>
       <tr>
        <td><button class="button" name="submit">Register</button></td>
       </tr>
       <?php
if(isset($_POST['submit'])){
    $Nama= $_POST['Nama_petani'];
    $Umur= $_POST['Umur_petani'];

    include_once("../koneksi.php");

    $result = mysqli_query($mysqli,
    "INSERT INTO petani(Nama_petani,Umur_petani) VALUES ('$Nama','$Umur')");

    header("location:../index.php");
}
?>
    </table>
</form>
    </div>
</body>
</html>