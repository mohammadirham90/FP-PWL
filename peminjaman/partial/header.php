<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pinjaman</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
</head>
<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <?php
include "../koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Beranda</title>
</head>
<body>
    <div class="page_area">
        <div class="fitur_area"><br>
            <label for="">BUKU-KU</label>
            <a href="../../beranda/beranda.php">
                <button type="submit">Dasboard</button>
            </a><br>
            <a href="../../pengembalian/index.php">
                <button type="submit">Pengembalian</button>
            </a><br>
            <a href="../index.php">
                <button type="submit">Peminjaman</button>
            </a><br>
            <form action="../../logout.php">
                <button type="submit" id="logout">Logout</button>
            </form>
        </div>
       

                  
                </div>
            </div>
        </div>
    </div>
</body>
</html>
                </div>
            </div>

        </div>