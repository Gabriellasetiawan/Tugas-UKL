<?php
include("../koneksi.php");

if(!isset($_GET['Id_peternak'])){
    header('Location: index.php');
}
$id= $_GET['Id_peternak'];

$result= mysqli_query($mysqli, "SELECT * FROM peternak WHERE Id_peternak=$id");

while($user_data = mysqli_fetch_array($result))
{
    $id_petani = $user_data ['Id_peternak'];
    $nama_petani = $user_data ['Nama_peternak'];
    $umur_petani = $user_data ['Umur_peternak'];
}
?>

<body>
    <header>
        <h3>Formulir Edit Peternak</h3>
    </header>
    
<form method="post" action="proses_edit_peternak.php">
    <table>
        <tr>
        <td>Id_peternak</td>
        <td><input type="text" name="Id_peternak" value="<?php echo $Id_peternak;?>"></td>
</tr>
<tr>
        <td>Nama_peternak</td>
        <td><input type="text" name="Nama_peternak" value="<?php echo $Nama_peternak;?>"></td>
</tr>
<tr>
        <td>Umur_peternak</td>
        <td><input type="text" name="Umur_peternak" value="<?php echo $Umur_peternak;?>"></td>
</tr>
<tr>
<td><input type="hidden" name="id" value="<?php echo  $_GET['id'];?>"></td>
<td><input type="submit" name="simpan" value="Simpan"></td>
</tr>
    </table>
</form>
</body>








