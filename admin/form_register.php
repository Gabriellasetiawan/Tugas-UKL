<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form register</title>
    <link rel="stylesheet" href="style_tambahuser.css">
</head>
<body>
    <div  class="container">
        <h1 class="title">Register</h1>
<form class="form" action= "form_register.php" method="post">
    <table>
        <tr>
            <td>ID</td>
            <td><input type="text" name="id"></td>
        </tr>
       <tr>
       <td>Nama</td>
        <td><input type="text" name="nama" required></td>
       </tr>
       <tr>
        <td>Username</td>
        <td><input type="text" name="username" required></td>
       </tr>
       <tr>
        <td>Password</td>
        <td><input type="text" name="password" required></td>
       </tr>
       <tr>
        <td>Level</td>
        <td>
            <select name="level" id="level">
                <option disabled selected></option>
                <option value="admin">Admin</option>
                <option value="user">User</option required>
            </select>
        </td>
        <td><button class="button" name="submit">Register</button></td>
       </tr>
       <?php
if(isset($_POST['submit'])){
    $namas= $_POST['nama'];
    $usernames= $_POST['username'];
    $passwords= $_POST['password'];
    $levels= $_POST['level'];

    include_once("koneksi.php");

    $result = mysqli_query($mysqli,
    "INSERT INTO user(Nama,Username,Password,Level) VALUES ('$namas','$usernames','$passwords','$levels')");

    header("location:index.php");
}
?>
    </table>
</form>
    </div>
</body>
</html>