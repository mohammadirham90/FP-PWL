<?php 
include("../koneksi.php");

$sql = "INSERT INTO tb_pengembalian(id,judul,nama,tgl_pinjam,tgl_kembali,jumlah) ";
$sql.= "VALUES ('".$_POST['txtId']."','".$_POST['txtJudul']."','".$_POST['txtNama']."','".$_POST['txttgl_pinjam']."','".$_POST['txttgl_kembali']."','".$_POST['txtjumlah']."')";
$query = mysqli_query($conn,$sql) or exit("Error query : <b>".$sql."</b>.");

if($query->connect_errno){
    echo "Koneksi database gagal karena".$query->connect_error;
    exit;
}else{
    session_start();
    $_SESSION['Flash_data'] = '<div class="alert alert-success">Data Berhasil di tambahkan.</div>';
    header("Location: index.php");
}
?>