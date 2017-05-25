<?php
session_start();
//include "koneksi.php";
if (!isset($_SESSION["user"])) echo "<script>location.replace('login.php');</script>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ADMIN</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Kube CSS -->
    <link rel="stylesheet" href="css/kube.css">
    <link rel="icon" 
      type="image/ico" 
      href="favicon.ico">
</head>
<body>
	<div id="main">
		<div class="row">
			<div class="col col-6 push-middle push-center">
				<fieldset class="text-center">
					<legend>Menu Admin</legend>
					<div class="form-item">
						<a href="daftar_prov.php" class="button w70 big" role="button">Kelola Data Propinsi</a>
					</div>
					<div class="form-item">
						<a href="daftarkuis.php" class="button w70 big" role="button">Kelola Kuis</a>
					</div>
					<div class="form-item">
						<a href="logout.php" class="button round outline secondary" role="button">Logout</a>
					</div>
				</fieldset>
				<a href="index.html">Kembali ke Halaman Depan</a>
			</div>
		</div>

	</div>
	

	<!-- Kube JS + jQuery are used for some functionality, but are not required for the basic setup -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="js/kube.js"></script>
</body>
</html>