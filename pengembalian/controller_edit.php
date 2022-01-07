<?php
include "../koneksi.php";
 
$sql = "UPDATE tb_pengembalian ";
$sql.= "SET judul='".$_POST['txtjudul']."', nama = '".$_POST['txtNama']."', tgl_pinjam = '".$_POST['txttgl_pinjam']."', tgl_kembali = '".$_POST['txttgl_kembali']."', jumlah = '".$_POST['txtjumlah']."' WHERE id = '".$_POST['txtid']."'";
$query = mysqli_query($conn,$sql) or exit("Error query : <b>".$sql."</b>.");
 
if($query->connect_errno){
    echo "Koneksi database gagal karena ".$query->connect_error;
    exit;
}else{
    session_start();
    $_SESSION['Flash_data'] = '<div class="alert alert-success">Data Berhasil di Update.</div>';
    header("Location: index.php");
}
?>