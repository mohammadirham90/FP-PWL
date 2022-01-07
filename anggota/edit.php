<?php
include ("header.php");
?>
<div class="main">
    <div class="card">
        <div class="card-header">
            <h2>Edit Data Anggota</h2>
        </div>
            <div class="card-body">
                <?php
                    include "../koneksi.php";
                    $id = $_GET['id_anggota'];
                    $sql = "SELECT id_anggota,nama,alamat,no_tlp FROM anggota WHERE id_anggota = '$id'";
                    $hasil = mysqli_query($conn,$sql) or exit("Error query: <b>".$sql."</b>.");
            
                    while($data = mysqli_fetch_assoc($hasil)){
                ?>
                <form action="controller_edit.php" method="POST">
                    <p class="title">Ubah Data</p><br>
                    <input type="text" placeholder="ID" value="<?= $data['id_anggota']?>" name="txtId_anggota" required><br>
                    <input type="text" placeholder="Nama" value="<?= $data['nama']?>" name="txtNama" required><br>
                    <input type="text" placeholder="Alamat" value="<?= $data['alamat']?>" name="txtAlamat" required><br>
                    <input type="text" placeholder="No TLP" value="<?= $data['no_tlp']?>" name="txt_NoTlp" require><br>
                    <button class="simpan" type="submit" name="simpan">SIMPAN</button>
                </form>
                <?php
                    }
                ?>
            </div>
    </div>
</div>
<?php
include ("footer.php");
?>