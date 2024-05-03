<?php
include("../koneksi.php");

if(!isset($_GET['id'])){
    header('Location: index.php');
}
$id= $_GET['id'];

$result= mysqli_query($mysqli, "SELECT * FROM informasi WHERE id_informasi=$id_informasi");

while($user_data = mysqli_fetch_array($result))
{
    $id_informasi = $id_informasi ['id_informasi'];
    $judul_informasi = $judul_informasi ['judul_informasi'];
    $jenis_informasi = $jenis_informasi ['jenis_informasi'];
    $tanggal_informasi = $tanggal_informasi ['tanggal_informasi'];
}
?>

<body>
    <header>
        <h3>Formulir Edit User</h3>
    </header>
    
<form method="post" action="proses_edit_informasi.php">
    <table>
        <tr>
        <td>judul_informasi</td>
        <td><input type="text" name="judul_informasi" value="<?php echo $judul_informasi;?>"></td>
</tr>
<tr>
        <td>jenis_informasi</td>
        <td><input type="text" name="jenis_informasi" value="<?php echo $jenis_informasi;?>"></td>
</tr>
<tr>
        <td>tanggal_informasi	</td>
        <td><input type="text" name="tanggal_informasi	" value="<?php echo $tanggal_informasi	;?>"></td>
</tr>

<tr>
<td><input type="hidden" name="id" value="<?php echo  $_GET['id'];?>"></td>
<td><input type="submit" name="simpan" value="Simpan"></td>
</tr>
    </table>
</form>
</body>








