<?php
include "../koneksi.php";

$sql = "INSERT INTO daftar_buku(id, no_buku, judul_buku, kode_buku, penerbit_buku, tahun_terbit) 
VALUES ('".$_POST['id']."','".$_POST['no_buku']."','".$_POST['judul_buku']."','".$_POST['kode_buku']."','".$_POST['penerbit']."','".$_POST['tahun_terbit']."')";
$query = mysqli_query($conn,$sql) or exit("Error query : <b>".$sql."</b>.");

if($query->connect_errno){
    echo "Koneksi database gagal karena ".$query->connect_error;
    exit;
}else{
    header("Location: beranda.php");
}
?>