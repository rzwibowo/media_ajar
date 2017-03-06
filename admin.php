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
</head>
<body>
	<div id="main">
		<div class="row">
			<div class="col col-6 push-middle push-center">
				<fieldset class="text-center">
					<legend>Menu Admin</legend>
					<div class="form-item">
						<a href="#" class="button w70 big" role="button">Kelola Data Propinsi</a>
					</div>
					<div class="form-item">
						<a href="#" class="button w70 big" role="button">Kelola Kuis</a>
					</div>
					<div class="form-item">
						<a href="#" class="button round outline secondary" role="button">Logout</a>
					</div>
				</fieldset>
			</div>
		</div>

		<!-- Modal Settings -->
		<div id="mod_setting" class="modal-box hide">
		    <div class="modal">
		        <span class="close"></span>
		        <div class="modal-header">Pengaturan</div>
		        <div class="modal-body">
		        	<a href="login.php" class="small button round outline secondary text-center" role="button">Admin</a>
		        </div>
		    </div>
		</div>

		<!-- Modal About -->
		<div id="mod_about" class="modal-box hide">
		    <div class="modal">
		        <span class="close"></span>
		        <div class="modal-header">Tentang</div>
		        <div class="modal-body text-center">
		        	<h3>Virtual Map</h3>
		        	<h5>v 0.1</h5>
		        	<p>
		        		<img src="img/wibowo.png" alt="">
		        	</p>
		        </div>
		    </div>
		</div>

	</div>

	<!-- Kube JS + jQuery are used for some functionality, but are not required for the basic setup -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="js/kube.js"></script>
</body>
</html>