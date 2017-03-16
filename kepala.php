<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<link rel="stylesheet" href="css/kube.css">
	<link rel="stylesheet" href="css/medajar.css">

	<script>
		function cekLamanAktif(){
			if (window.location.pathname=="/media_ajar/daftar_prov.php") {
				document.getElementById("linkprop").style.cssText="color:#2980b9; font-weight:bold";
			}
		}
	</script>	
</head>
<body onload="cekLamanAktif()">
<div id="kepala" class="row" data-component="sticky">
	<div class="col-2 text-center" id="navbar-brand">
		<a href="index.html"><img src="img/index/judul.png" class="logo" alt="Logo virtual map"></a>
	</div>
	<nav class="col-8" id="navbar-main">
		<ul>
<<<<<<< HEAD
			<li><a href="entryProp.php">Data Provinsi</a></li>
			<li><a href="daftarkuis.php">Data Kuis</a></li>
=======
			<li><a id="linkprop" href="daftar_prov.php">Data Provinsi</a></li>
			<li><a href="">Data Kuis</a></li>
>>>>>>> eb1cc2748a0dc0d99954bb4494bc45f5a90ec207
		</ul>
	</nav>
	<nav id="logout" class="col-2 text-center">
		<p class="smaller"><?php echo $_SESSION["user"] ?></p>
		<a href="logout.php" class="button secondary outline round">Logout</a>
	</nav>
</div>	
</body>
</html>
