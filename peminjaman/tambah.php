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
                                    <h4 class="card-title">Tambah Data Pinjaman</h4>
                                </div>
                                <div class="col-6"> <a href="index.php"
                                        class="btn btn-success float-end">Kembali</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-content">
                            <form action="controller_tambah.php" method="post" class="form form-horizontal">
                                <div class="form-body mb-1 p-1">
                                    <div class="row">
                                    <label>ID Pinjaman</label> 
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input required type="text" name="txtId" type="text" class="form-control" placeholder="ID"
                                                        id="first-name-icon">
                                                   
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Tanggal Pinjaman</label> 
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input required type="text" name="txttanggalpinjaman" type="text" class="form-control" placeholder="tanggal pinjaman"
                                                        id="first-name-icon">
                                                   
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Nama Buku</label> 
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input required type="text" name="txtnamabuku" type="text" class="form-control" placeholder="nama buku"
                                                        id="first-name-icon">
                                                   
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Kode Buku</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input required name="txtkodebuku" type="text" class="form-control" placeholder="kode buku"
                                                        id="first-name-icon">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <label>Tahun Penerbit</label> 
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input required type="text" name="txttahunpenerbit" type="text" class="form-control" placeholder="tahun penerbit"
                                                        id="first-name-icon">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Nama Penerbit</label> 
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input required type="text" name="txtnamapenerbit" type="text" class="form-control" placeholder="nama penerbit"
                                                        id="first-name-icon">
                                                   
                                                   
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Jumlah Buku</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group has-icon-left">
                                                
                                                    <input required name="txtjumlahbuku" type="text" class="form-control" placeholder="jumlah buku "
                                                        id="first-name-icon">
                                                   
                                                   
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex justify-content-end">
                                        <button type="reset"
                                                class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Tambah</button>
                                        
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

</div>
<?php include("partial/footer.php"); ?>