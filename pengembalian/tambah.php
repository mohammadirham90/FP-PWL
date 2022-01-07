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
                                    <h4 class="card-title">Tambah Data</h4>
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
                                        <div class="col-md-4">
                                        <label>ID</label> 
                                        </div>
                                        <div class="col-md-8"> 
                                                <div class="position-relative">
                                                    <input required type="text" name="txtId" type="text" class="form-control" placeholder="id"
                                                        id="first-name-icon">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Judul</label> 
                                        </div>
                                        <div class="col-md-8">
                                            
                                                <div class="position-relative">
                                                    <input required type="text" name="txtJudul" type="text" class="form-control" placeholder="Judul"
                                                        id="first-name-icon">
                                                   
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Nama</label>
                                        </div>
                                        <div class="col-md-8">
                                            
                                                <div class="position-relative">
                                                    <input required name="txtNama" type="text" class="form-control" placeholder="Nama"
                                                        id="first-name-icon">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Tanggal Pinjam</label>
                                        </div>
                                        <div class="col-md-8">
                                            
                                                <div class="position-relative">
                                                    <input required name="txttgl_pinjam" type="text" class="form-control" placeholder="Tanggal Pinjam "
                                                        id="first-name-icon">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Tanggal Kembali</label>
                                        </div>
                                        <div class="col-md-8">
                                            
                                                <div class="position-relative">
                                                    <input required name="txttgl_kembali" type="text" class="form-control" placeholder="Tanggal kembali "
                                                        id="first-name-icon">
                                                    
                                                </div>
                                            </div>
                                        </div>
            
                                        <div class="col-md-4">
                                            <label>Jumlah</label>
                                        </div>
                                        <div class="col-md-8">
                                            
                                                <div class="position-relative">
                                                    <input required name="txtjumlah" type="text" class="form-control" placeholder="jumlah"
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