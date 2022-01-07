<?php
include ("header.php");
include "../koneksi.php";
 session_start();
 if(!isset($_SESSION['username'])){
    header("Location:../index.php");
}
$sql = "select * from anggota";
$query = mysqli_query($conn,$sql);
if(!$query){
    die('SQL Error'.mysqli_error($conn));
}
?>

<div class="main">
        <div class="card">
            <div class="card-header">
                    <h2>Data Anggota</h2>
                    <a href="tambah.php">
                        <button class="tambah-anggota">Tambah</button>
                    </a>
            </div>
            <div class="card-body">
                    <table>
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>ID</th>
                                <th>NAMA</th>
                                <th>ALAMAT</th>
                                <th>NO HP</th>
                        </tr>
                        </thead>
                    </table>    
                    <table class="data-anggota">
                        <tbody>
                            <?php
                    $no=1;
                    $sql = mysqli_query($conn,"select id_anggota,nama,alamat,no_tlp from anggota");
                    while($data = mysqli_fetch_array($sql)){
                        echo"
                        <tr>
                            <td>$no</td>
                            <td>$data[id_anggota]</td>
                            <td>$data[nama]</td>
                            <td>$data[alamat]</td>
                            <td>$data[no_tlp]</td>
                            <td>
                            <div class=dropdown>
                            </div></td>
                        </tr>
                        ";
                        $no++;
                    }
                    
                    ?>
                        </tbody>
                    </table>
            </div>
        </div>

    </div>
</div>

<?php
include ("footer.php");
?>