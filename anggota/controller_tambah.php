<?php
include "../koneksi.php";
$id = $_POST['txtId'];
$nama = $_POST['txtNama'];
$alamat = $_POST['txtAlamat'];
$notlp = $_POST['txt_NoTlp'];

$sql = $conn->prepare("insert into anggota(id_anggota,nama,alamat,no_tlp) values(?,?,?,?)");
$sql -> bind_param("sssi",$id,$nama,$alamat,$notlp);
$sql->execute();
header("Location:anggota.php");
$sql->close();
$conn->close();
?>