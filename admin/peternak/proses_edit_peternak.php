<?php
include("../koneksi.php");

if(isset($_POST['simpan'])){

    $id= $_POST['id '];
    $Nama_peternak= $_POST['Nama_peternak'];
    $Umur_peternak= $_POST['Umur_peternak'];
    
    $result = mysqli_query($mysqli, "UPDATE peternak
    SET id='$id',Nama_peternak='$Nama_peternak',Umur_peternak='$Umur_peternak'
    WHERE id=$id");
    header('Location: index_petrnak.php');
} else{
    die("Akses dilarang...");
}
?>