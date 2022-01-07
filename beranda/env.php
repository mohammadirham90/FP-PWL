<?php
$conn = mysqli_connect("localhost", "root", "", "db_perpus");
if(!$conn){
    die("<script>alert('tidak bisa terhubung pada database karena ".mysqli_connect_error($conn)."');</script>");
}
/*
$daftar_buku = mysqli_query($conn, "create table daftar_buku(id varchar(5) primary key not null, 
no_buku varchar(5) not null, 
judul_buku varchar(100) not null, 
kode_buku varchar(5) not null,
penerbit_buku varchar(50) not null,
tahun_terbit varchar(5) not null)");
if(!$daftar_buku){
    die("<script>alert('tidak bisa terhubung pada server karena ".mysqli_connect_error($daftar_buku)."'</script>");
}

$insert_buku = mysqli_query($conn, "insert into daftar_buku(id, no_buku, judul_buku, kode_buku, penerbit_buku, tahun_terbit) values
('00001','AA001','PROGRAMMING PHP','PP1','GRAMEDIA','2020'),
('00002','AA002','PROGRAMMING HTML','PH1','GRAMEDIA','2019'),
('00003','AA003','PROGRAMMING CSS','PCS1','GRAMEDIA','2019')");
if(!$insert_buku){
    die("<script>alert('tidak bisa menambahkan data karena ".mysqli_error($conn)."');</script>");
}
echo "berhasil menambahkan data buku";
*/