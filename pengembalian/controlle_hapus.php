<?php
include "../koneksi.php";
 
$sql = "DELETE FROM biodata2 ";
$sql.= "WHERE id='".$_POST['id']."'";
$query = mysqli_query($conn,$sql) or exit("Error query : <b>".$sql."</b>.");
 
if($query->connect_errno){
    echo "Koneksi database gagal karena ".$query->connect_error;
    exit;
}else{
    session_start();
    $_SESSION['Flash_data'] = '<div class="alert alert-success">Data Berhasil dihapus.</div>';
    header("Location: index.php");
}
?>