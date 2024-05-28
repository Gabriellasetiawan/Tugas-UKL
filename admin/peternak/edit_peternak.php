<?php
include("../koneksi.php");

if(!isset($_GET['id'])){
    header('Location: index.php');
}
$id= $_GET['id'];

$result= mysqli_query($mysqli, "SELECT * FROM peternak WHERE Id_peternak=$id");

while($user_data = mysqli_fetch_array($result))
{
    $id_peternak = $user_data ['Id_peternak'];
    $nama_peternak = $user_data ['Nama_peternak'];
    $umur_peternak = $user_data ['Umur_peternak'];
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
        <td><input type="text" name="Id_peternak" value="<?php echo $id_peternak;?>"></td>
</tr>
<tr>
        <td>Nama_peternak</td>
        <td><input type="text" name="Nama_peternak" value="<?php echo $nama_peternak;?>"></td>
</tr>
<tr>
        <td>Umur_peternak</td>
        <td><input type="text" name="Umur_peternak" value="<?php echo $umur_peternak;?>"></td>
</tr>
<tr>
<td><input type="hidden" name="id" value="<?php echo  $_GET['id'];?>"></td>
<td><input type="submit" name="simpan" value="Simpan"></td>
</tr>
    </table>
</form>
</body>








