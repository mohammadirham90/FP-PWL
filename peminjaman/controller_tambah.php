<?php 
include("../koneksi.php");

$sql = "INSERT INTO peminjaman(id,tgl_pinjaman,nama_buku,kd_buku,thn_penerbit,nama_penerbit,jumlah_buku) ";
$sql.= "VALUES ('".$_POST['txtId']."','".$_POST['txttanggalpinjaman']."','".$_POST['txtnamabuku']."','".$_POST['txtkodebuku']."','".$_POST['txttahunpenerbit']."','".$_POST['txtnamapenerbit']."','".$_POST['txtjumlahbuku']."')";
$query = mysqli_query($conn,$sql) or exit("Error query : <b>".$sql."</b>.");

if($query->connect_errno){
    echo "Koneksi database gagal karena ".$query->connect_error;
    exit;
}else{
    session_start();
    $_SESSION['Flash_data'] = '<div class="alert alert-success">Data Berhasil ditambahkan.</div>';
    header("Location: index.php");
}
?>