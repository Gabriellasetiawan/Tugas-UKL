<?php
include("../koneksi.php");

if(!isset($_GET['id'])){
    header('Location: index.php');
}
$id= $_GET['id'];

$result= mysqli_query($mysqli, "SELECT * FROM petani WHERE ID_petani=$id");

while($user_data = mysqli_fetch_array($result))
{
    $id_petani = $user_data ['ID_petani'];
    $nama_petani = $user_data ['Nama_petani'];
    $umur_petani = $user_data ['Umur_petani'];
}
?>
<link rel="stylesheet" href="style_tambahpenjualan.css">
<body>
    <header>
        <h3>Formulir Edit Petani</h3>
    </header>
    
<form method="post" action="proses_edit_user.php">
    <table>
        <tr>
        <td>ID_petani</td>
        <td><input type="text" name="ID_petani" value="<?php echo $id_petani;?>"></td>
</tr>
<tr>
        <td>Nama_petani</td>
        <td><input type="text" name="Nama_petani" value="<?php echo $nama_petani;?>"></td>
</tr>
<tr>
        <td>Umur_petani</td>
        <td><input type="text" name="Umur_petani" value="<?php echo $umur_petani;?>"></td>
</tr>
<tr>
<td><input type="hidden" name="id" value="<?php echo  $_GET['id'];?>"></td>
<td><input type="submit" name="simpan" value="Simpan"></td>
</tr>
    </table>
</form>
</body>








