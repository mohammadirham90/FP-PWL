<?php
include "../koneksi.php";
session_start();
if(!isset($_SESSION['username'])){
    header("Location:../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Beranda</title>
</head>
<body>
    <div class="page_area">
        <div class="fitur_area"><br>
            <label for="">BUKU-KU</label>
            <a href="beranda.php">
                <button type="submit">Dasboard</button>
            </a><br>
            <a href="../pengembalian/index.php">
                <button type="submit">Pengembalian</button>
            </a><br>
            <a href="../peminjaman/index.php">
                <button type="submit">Peminjaman</button>
            </a><br>
            <form action="../logout.php">
                <button type="submit" id="logout">Logout</button>
            </form>
        </div>
        <div class="content_area">
            <div class="search">
                <form action="cari.php" method="get">
                    <input type="search" placeholder="Cari Buku" name="cari">
                </form>
            </div>

            <div class="menu">
                <div id="daftar_buku">
                    <a href=""><h1>Daftar Buku</h1></a>
                </div>
                <div id="data_anggota">
                    <a href=""><h1>Data Anggota</h1></a>
                </div>
                <div id="daftar_pinjaman">
                    <a href=""><h1>Daftar Pinjaman</h1></a>
                </div>
            </div>

            <div id="list_buku">
                <div id="buku">
                    <table height="45px" width="1000px">
                        <tr>
                            <td><label for=""><b>Daftar Buku</b></label></td>
                            <td><a href="tambah_buku.php"><button type="submit">Tambah</button></a></td>
                        </tr>
                    </table>
                    <hr>

                    <?php
                    $sql = mysqli_query($conn, "select judul_buku from daftar_buku");
                    while($data = mysqli_fetch_assoc($sql)){?>
                        <table height="45px" width="1000px">
                            <tr>
                                <td><label for=""><?php echo $data['judul_buku']; ?></label></td>
                                <td><a href=""><button type="submit">Status</button></a></td>
                            </tr>
                        </table>
                        <hr>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>