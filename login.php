<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($mysqli, "select * from user where Username= '$username' and Password= '$password'");
$cek = mysqli_num_rows($login);

if($cek > 0){

    $data = mysqli_fetch_assoc($login);

    if($data['Level']=="admin"){

        $_SESSION['username'] = $username;
        $_SESSION['Level'] = "admin";

        header("Location:admin/index.php");

        }elseif ($data['Level']=="user"){

            $_SESSION['username'] = $username;
            $_SESSION['Level'] = "user";        
        
            header("Location:afterlogin.php");
 
        }else{
            header("Location:index.php");
        }
}else{ 
    header("Location:index.php?pesan=gagal");
}
?>  