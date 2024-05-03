<?php
include("../koneksi.php");

if(isset($_POST['simpan'])){

    $Id_peternak= $_POST['Id_peternak '];
    $Nama_peternak= $_POST['Nama_peternak'];
    $Umur_peternak= $_POST['Umur_peternak'];
    
    $result = mysqli_query($mysqli, "UPDATE peternak
    SET Id_peternak='$Id_peternak',Nama_peternak='$Nama_peternak',Umur_peternak='$Umur_peternak'
    WHERE Id_peternak=$Id_peternak");
    header('Location: index.php');
} else{
    die("Akses dilarang...");
}
?>