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
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-6">
                                    <h4 class="card-title">Edit Data</h4>
                                </div>
                                <div class="col-6"> <a href="index.php"
                                        class="btn btn-success float-end">Kembali</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-content">
                                        <?php 
                                            include("../koneksi.php");
                                            $id = $_GET['id'];
                                            $sql = "SELECT id,judul,nama,tgl_pinjam,tgl_kembali,jumlah FROM tb_pengembalian WHERE id = '$id'";
                                            $hasil = mysqli_query($conn,$sql) or exit("Error query: <b>".$sql."</b>.");
 
                                            while($data = mysqli_fetch_assoc($hasil)){
                                        ?>
                            <form action="controller_edit.php" method="post" class="form form-horizontal">
                                <div class="form-body mb-1 p-1">
                                    <div class="row">
                                        <div class="col-md-4">
                                        <label>ID</label> 
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input required type="text" value="<?= $data['id']?>" name="txtid" type="text" class="form-control" placeholder="id"
                                                        id="first-name-icon">
                                                    <div class="form-control-icon">
                                                        <i class="bi-card-text"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <label>Judul</label> 
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input required type="text" value="<?= $data['judul']?>" name="txtjudul" type="text" class="form-control" placeholder="judul"
                                                        id="first-name-icon">
                                                    <div class="form-control-icon">
                                                        <i class="bi-card-text"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    
                                        <div class="col-md-4">
                                            <label>nama</label> 
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input required type="text" value="<?= $data['nama']?>" name="txtNama" type="text" class="form-control" placeholder="Nama"
                                                        id="first-name-icon">
                                                    <div class="form-control-icon">
                                                        <i class="bi-person"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <label>Tanggal Pinjam</label> 
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input required type="text" value="<?= $data['tgl_pinjam']?>" name="txttgl_pinjam" type="text" class="form-control" placeholder="tgl_pinjam"
                                                        id="first-name-icon">
                                                    <div class="form-control-icon">
                                                        <i class="bi-card-text"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <label>Tanggal Kembali</label> 
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input required type="text" value="<?= $data['tgl_kembali']?>" name="txttgl_kembali" type="text" class="form-control" placeholder="tgl_kembali"
                                                        id="first-name-icon">
                                                    <div class="form-control-icon">
                                                        <i class="bi-card-text"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <label>Jumlah</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input required name="txtjumlah" value="<?= $data['jumlah']?>" type="text" class="form-control" placeholder="jumlah"
                                                        id="first-name-icon">
                                                    <div class="form-control-icon">
                                                        <i class="bi-building"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex justify-content-end">
                                        <button type="reset"
                                                class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Update</button>
 
                                        </div>
                                    </div>
                                </div>
 
                            </form>
                                        <?php
                                            }
                                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
 
</div>
<?php include("partial/footer.php"); ?>