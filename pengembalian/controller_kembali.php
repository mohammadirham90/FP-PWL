<?php
include "../koneksi.php";
 
$sql = "DELETE FROM tb_pengembalian ";
$sql.= "WHERE id='".$_POST['id']."'";
$query = mysqli_query($conn,$sql) or exit("Error query : <b>".$sql."</b>.");
 
if($query->connect_errno){
    echo "Koneksi database gagal karena ".$query->connect_error;
    exit;
}else{
    session_start();
    $_SESSION['Flash_data'] = '<div class="alert alert-success">Buku Berhasil dikembaikan.</div>';
    header("Location: index.php");
}
?>