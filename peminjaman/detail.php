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
                                    <h4 class="card-title">Detail Data Biodata</h4>
                                </div>
                                <div class="col-6"> <a href="index.php"
                                        class="btn btn-success float-end">Kembali</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="table">
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>ID</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            include("../koneksi.php");

                                            $id = $_GET['id'];
                                            $sql = "SELECT id,nama,alamat FROM tb_biodata WHERE id = '$id'";
                                            $hasil = mysqli_query($conn,$sql) or exit("Error query: <b>".$sql."</b>.");

                                            while($data = mysqli_fetch_assoc($hasil)){
                                        ?>
                                        <tr>
                                            <td><?php echo $data['id']; ?></td>
                                            <td><?php echo $data['nama']; ?></td>
                                            <td><?php echo $data['alamat']; ?></td>
                                            <td>
                                                    <a href="edit.php?id=<?=$data['id']?>">
                                                        <button type="submit" class="btn btn-primary me-1 mb-1">Edit</button>
                                                    </a>
                                                    <a href="hapus.php?id=<?=$data['id']?>">
                                                        <button type="submit" class="btn btn-primary me-1 mb-1">Hapus</button>
                                                    </a>
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