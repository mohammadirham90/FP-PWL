<?php
include "../koneksi.php";
$sql = "UPDATE anggota ";
$sql.= "SET nama='".$_POST['txtNama']."', alamat = '".$_POST['txtAlamat']."', no_tlp = '".$_POST['txtNo_Tlp']."' WHERE id_anggota = '".$_POST['txtId_anggota']."'";
$query = mysqli_query($con,$sql) or exit("Error query : <b>".$sql."</b>.");
 
if($query->connect_errno){
    echo "Koneksi database gagal karena ".$query->connect_error;
    exit;
}else{
    session_start();
    $_SESSION['Flash_data'] = '<div class="alert alert-success">Data Berhasil di Update.</div>';
    header("Location: anggota.php");
}
?>