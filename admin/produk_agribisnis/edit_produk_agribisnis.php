<?php
include("../koneksi.php");

if(!isset($_GET['id'])){
    header('Location: index.php');
}
$id= $_GET['id'];

$result= mysqli_query($mysqli, "SELECT * FROM produk_agribisnis WHERE id_produk=$id");

while($user_data = mysqli_fetch_array($result))
{
    $id_produk = $user_data ['id_produk'];
    $nama = $user_data ['nama'];
    $jenis = $user_data ['jenis'];
    $jumlah = $user_data ['jumlah'];
}
?>

<body>
    <header>
        <h3>Formulir Edit Peternak</h3>
    </header>
    
<form method="post" action="proses_edit_produk_agribisnis.php">
    <table>
        <tr>
        <td>id_produk</td>
        <td><input type="text" name="id_produk" value="<?php echo $id_produk;?>"></td>
</tr>
<tr>
        <td>nama</td>
        <td><input type="text" name="nama" value="<?php echo $nama;?>"></td>
</tr>
<tr>
        <td>jenis</td>
        <td><input type="text" name="jenis" value="<?php echo $jenis;?>"></td>
</tr>
<tr>
        <td>jumlah</td>
        <td><input type="text" name="jumlah" value="<?php echo $jumlah;?>"></td>
</tr>
<tr>
<td><input type="hidden" name="id" value="<?php echo  $_GET['id'];?>"></td>
<td><input type="submit" name="simpan" value="Simpan"></td>
</tr>
    </table>
</form>
</body>








