<?php
include ("header.php");
?>
<div class="main">
    <div class="card">
        <div class="card-header">
            <h2>Tambah Anggota</h2>
        </div>
            <div class="card-body">
                <form action="controller_tambah.php" method="post">
                    <p class="title">Masukan Data Diri</p><br>
                    <input type="text" placeholder="ID" name="txtId" required><br>
                    <input type="text" placeholder="Nama" name="txtNama" required><br>
                    <input type="text" placeholder="Alamat" name="txtAlamat" required><br>
                    <input type="text" placeholder="No TLP" name="txt_NoTlp" require><br>
                    <button class="simpan" type="submit" name="simpan">SIMPAN</button>
                </form>
            </div>
    </div>
</div>
<?php
include ("footer.php");
?>