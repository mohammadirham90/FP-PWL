<?php include("partial/header.php"); 
session_start();
if(!isset($_SESSION['username'])){
    header("Location:../index.php");
}
?>
<div id="main">
    <div class="page-heading">
        <section class="section">
            <div class="row">
                <div class="col-12">
                    <?php
                    session_start();
                    if(isset($_SESSION['Flash_data'])){
                        $pesan = $_SESSION['Flash_data'];
                        unset($_SESSION['Flash_data']);
                        echo $pesan;
                    }
                    ?>
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-6">
                                    <h4 class="card-title">Pinjaman</h4>
                                </div>
                                <div class="col-6"> <a href="tambah.php"
                                        class="btn btn-success float-end">Tambah
                                        Data</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="table">
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                        <tr>
                                            <th>ID</th>
                                            <th>Tanggal Pinjaman</th>
                                            <th>Nama Buku</th>
                                            <th>Kode Buku</th>
                                            <th>Tahun Penerbit</th>
                                            <th>Nama Penerbit</th>
                                            <th>Jumlah Buku</th>
                                            <th>Aksi</th>
                                            <td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            include("../koneksi.php");

                                            $sql = "SELECT id,tgl_pinjaman,nama_buku,kd_buku,thn_penerbit,nama_penerbit,jumlah_buku FROM peminjaman ORDER BY id ASC";
                                            $hasil = mysqli_query($conn,$sql) or exit("Error query: <b>".$sql."</b>.");

                                            while($data = mysqli_fetch_assoc($hasil)){
                                        ?>
                                        <tr>
                                        <td><?php echo $data['id']; ?></td>
                                            <td><?php echo $data['tgl_pinjaman']; ?></td>
                                            <td><?php echo $data['nama_buku']; ?></td>
                                            <td><?php echo $data['kd_buku']; ?></td>
                                            <td><?php echo $data['thn_penerbit']; ?></td>
                                            <td><?php echo $data['nama_penerbit']; ?></td>
                                            <td><?php echo $data['jumlah_buku']; ?></td>
                                            <td>
                                            <div class="dropdown show">
                                                    <a class="btn btn-primary dropdown-toggle me-1"
                                                        type="button" id="dropdownMenuButton"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        Aksi
                                                    </a>

                                                    <div class="dropdown-menu"
                                                    aria-labelledby="dropdownMenuButton">
                                                        
                                                        <a class="dropdown-item" href="edit.php?id=<?=$data['id']?>">Edit</a>
                                                        
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

</div>
<?php include("partial/footer.php"); ?>