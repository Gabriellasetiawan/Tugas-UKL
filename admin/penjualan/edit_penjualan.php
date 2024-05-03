<?php
include("../koneksi.php");

if(!isset($_GET['id'])){
    header('Location: index.php');
}
$id= $_GET['id'];

$result= mysqli_query($mysqli, "SELECT * FROM penjualan WHERE Id_penjualan=$Id_penjualan");

while($user_data = mysqli_fetch_array($result))
{
    $Dalam_negeri = $penjualan_data ['Dalam_negeri'];
    $Luar_negeri = $penjualan_data ['Luar_negeri'];
    $Online = $penjualan_data ['Online'];
    $Offline = $penjualan_data ['Offline'];
    $id_produk = $penjualan_data ['id_produk'];

}
?>

<body>
    <header>
        <h3>Formulir Edit Penjualan</h3>
    </header>
    
<form method="post" action="proses_edit_penjualan.php">
    <table>
        <tr>
        <td>Dalam_negeri</td>
        <td><input type="text" name="Dalam_negeri" value="<?php echo $Dalam_negeri;?>"></td>
</tr>
<tr>
        <td>Luar_negeri</td>
        <td><input type="text" name="Luar_negeri" value="<?php echo $Luar_negeri;?>"></td>
</tr>
<tr>
        <td>Online</td>
        <td><input type="text" name="Online" value="<?php echo $Online;?>"></td>
</tr>
<tr>
        <td>Offline</td>
        <td><input type="text" name="Offline" value="<?php echo $Offline;?>"></td>
</tr>
<tr>
        <td>id_produk</td>
        <td><input type="text" name="id_produk" value="<?php echo $id_produk;?>"></td>
</tr>

<tr>
<td><input type="hidden" name="Id_penjualan" value="<?php echo  $_GET['Id_penjualan'];?>"></td>
<td><input type="submit" name="simpan" value="Simpan"></td>
</tr>
    </table>
</form>
</body>








