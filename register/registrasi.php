<?php
require '../koneksi.php';

if ( isset($_POST["signup"])) {

    if(registrasi($_POST) > 0){
        echo "<script>
             alert('Registrasi Berhasil !');
             document.location.href = '../index.php';
             </script>
             ";

    }else {
        echo "<script>
             alert('Registrasi Gagal !');
             </script>
             ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrasi BUKUKU</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <!-- Regist form -->
    <form action="" method="post">
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Form Registrasi</h2>
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="username"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username" id="username" placeholder="Masukkan Username"/>
                            </div>
                            <div class="form-group">
                                <label for="nama"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="nama" name="nama" id="nama" placeholder="Masukkan Nama"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Email"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Ulangi password"/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/> &emsp; &emsp;
                                <a href="../index.php">
                                    <input type="submit" class="form-submit"  value="Login ?"/>
                                </a>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/book.jpg" alt="sing up image"></figure>
                    </div>
                </div>
            </div>
        </section>
    </form>


    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>