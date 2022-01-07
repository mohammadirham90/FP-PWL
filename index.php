<!doctype html>
<html lang="en">
  <head>
  	<title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url(images/book-1.jpg);">
			      </div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Sign In</h3>
			      		</div>
			      	</div>
					  <?php
					include 'koneksi.php';
					if(isset($_POST['login'])){
						$user = $_POST['username'];
						$pass = md5($_POST['password']);

						$query = mysqli_query($conn,"select * from admin where username = '$user' and password = '$pass' ");
						$row = mysqli_fetch_array($query);

						if(is_array($row)){
							$_SESSION["username"]= $row['username'];
							$_SESSION["password"]= $row['password'];
						}else{
							echo '<script type = "text/javascript">';
							echo 'alert("Username dan password tidak ada")';
							echo 'window.location.href = "index.php"';
							echo '</script>';
						}

					}if(isset($_SESSION["username"])){
						header("Location:helo.php");
					}
						?>
							<form action="beranda/beranda.php" class="signin-form" method="post">
			      		<div class="form-group mb-3">
			      			<label class="label" for="name">Username</label>
			      			<input type="text" class="form-control" name="username" placeholder="Username" required>
			      		</div>
		            <div class="form-group mb-3">
		            	<label class="label" for="password">Password</label>
		              <input type="password" class="form-control" name="password" placeholder="Password" required>
		            </div>
		            <div class="form-group">
		            	<button type="submit"name="login" class="form-control btn btn-primary rounded submit px-3">Login</button>
		            </div>
		          </form>
		          <p class="text-center">Belum Punya Akun? <a href="register/registrasi.php">Sign Up</a></p>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

