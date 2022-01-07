<?php
include "../koneksi.php";
 
$sql = "UPDATE peminjaman ";
$sql.= "SET tgl_pinjaman='".$_POST['txttanggalpinjaman']."', nama_buku = '".$_POST['txtnamabuku']."' , kd_buku='".$_POST['txtkodebuku']."', thn_penerbit = '".$_POST['txttahunpenerbit']."', nama_penerbit = '".$_POST['txtnamapenerbit']."' , jumlah_buku = '".$_POST['txtjumlahbuku']."'WHERE id = '".$_POST['txtid']."'";
$query = mysqli_query($conn,$sql) or exit("Error query : <b>".$sql."</b>.");
 
if($query->connect_errno){
    echo "Koneksi database gagal karena ".$query->connect_error;
    exit;
}else{
    session_start();
    $_SESSION['Flash_data'] = '<div class="alert alert-success">Data Berhasil diperbarui.</div>';
    header("Location: index.php");
}
?>