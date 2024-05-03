<?php
include("../koneksi.php");

if(!isset($_GET['id'])){
    header('Location: index.php');
}
$id= $_GET['id'];

$result= mysqli_query($mysqli, "SELECT * FROM user WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
    $nama = $user_data ['Nama'];
    $username = $user_data ['Username'];
    $password = $user_data ['Password'];
    $level = $user_data ['Level'];
}
?>

<body>
    <header>
        <h3>Formulir Edit User</h3>
    </header>
    
<form method="post" action="proses_edit_user.php">
    <table>
        <tr>
        <td>Nama</td>
        <td><input type="text" name="nama" value="<?php echo $nama;?>"></td>
</tr>
<tr>
        <td>Username</td>
        <td><input type="text" name="username" value="<?php echo $username;?>"></td>
</tr>
<tr>
        <td>Password</td>
        <td><input type="password" name="password" value="<?php echo $password;?>"></td>
</tr>
<tr>
        <td>Level</td>
        <td>
            <select name="level" id="level" required>
                <option disabled selected><?php echo $password ?></option>
                <option value="admin">Admin</option>
                <option value="user">User</option>
</select>
        </td>
</tr>
<tr>
<td><input type="hidden" name="id" value="<?php echo  $_GET['id'];?>"></td>
<td><input type="submit" name="simpan" value="Simpan"></td>
</tr>
    </table>
</form>
</body>








