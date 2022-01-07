<?php
include "../koneksi.php";
 
$sql = "DELETE FROM peminjaman ";
$sql.= "WHERE id_pinjaman='".$_POST['id_pinjaman']."'";
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