<?php
include("../koneksi.php");

if(!isset($_GET['id'])){
    header('Location: index.php');
}
$id= $_GET['id'];

$result= mysqli_query($mysqli, "SELECT * FROM informasi WHERE id_informasi=$id");

while($user_data = mysqli_fetch_array($result))
{
    $judul_informasi = $user_data ['judul_informasi'];
    $jenis_informasi = $user_data ['jenis_informasi'];
    $tanggal_informasi = $user_data ['tanggal_informasi'];
    $isi_informasi = $user_data ['isi_informasi'];
}
?>
<link rel="stylesheet" href="style_tambahpenjualan.css"><body>
    <header>
        <h3>Formulir Edit Informasi</h3>
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
        <td><input type="text" name="tanggal_informasi	" value="<?php echo $tanggal_informasi;?>"></td>
</tr>
<tr>
        <td>isi_informasi	</td>
        <td><input type="text" name="isi_informasi	" value="<?php echo $isi_informasi;?>"></td>
</tr>
<tr>
<td><input type="hidden" name="id" value="<?php echo  $_GET['id'];?>"></td>
<td><input type="submit" name="simpan" value="Simpan"></td>
</tr>
    </table>
</form>
</body>
</html>







