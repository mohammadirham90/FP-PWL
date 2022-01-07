<?php
include "../koneksi.php";

$query_id = mysqli_query($conn, "select max(id) as ID from daftar_buku");
$data = mysqli_fetch_assoc($query_id);
$id_akhir = $data['ID'];

$urutan = $id_akhir;

$urutan++;

$id_akhir = sprintf("%05s", $urutan);


$query_nomor_buku = mysqli_query($conn, "select max(no_buku) as nomor_buku from daftar_buku");
$hasil = mysqli_fetch_assoc($query_nomor_buku);
$no_akhir = $hasil['nomor_buku'];
$pengurutan = (int) substr($no_akhir, 2, 3);
$pengurutan++;
$huruf = "AA";
$no_akhir = $huruf. sprintf("%03s", $pengurutan);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Tambah Buku</title>
</head>
<body>
    <div class="page_area">
        <div class="fitur_area"><br>
            <label for="">BUKU-KU</label><br>
            <a href="beranda.php">
                <button type="submit">Dasboard</button>
            </a><br>
            <a href="">
                <button type="submit">Pengembalian</button>
            </a><br>
            <a href="">
                <button type="submit">Peminjaman</button>
            </a><br>
            <a href="">
                <button type="submit">Cetak Laporan</button>
            </a><br>
            <form action="logout.php">
                <button type="submit" id="logout">Logout</button>
            </form>
        </div>
        <div class="content_area">
            <div id="form"><br>
                <h2>Tambah Buku</h2>
                <form action="controller_tambah_buku.php" method="POST" id="form_tambah">
                    
                    <img src="bootstrap-icons/card-list.svg" alt="">
                    <input type="text" readonly name="id" id="" value="<?php echo $id_akhir; ?>"><br>
                    
                    <img src="bootstrap-icons/card-list.svg" alt="">
                    <input type="text" readonly name="no_buku" id="" value="<?php echo $no_akhir; ?>"><br>

                    <img src="bootstrap-icons/book.svg" alt="">
                    <input type="text" name="judul_buku" id="" placeholder="judul buku"><br>

                    <img src="bootstrap-icons/card-text.svg" alt="">
                    <input type="text" name="kode_buku" id="" placeholder="kode buku"><br>

                    <img src="bootstrap-icons/person.svg" alt="">
                    <input type="text" name="penerbit" id="" placeholder="penerbit"><br>

                    <img src="bootstrap-icons/calendar.svg" alt="">
                    <input type="text" name="tahun_terbit" id="" placeholder="tahun terbit"><br>

                    <button type="submit" id="btn_tambah">Kirim</button>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>