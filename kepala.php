<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<link rel="stylesheet" href="css/kube.css">
	<link rel="stylesheet" href="css/medajar.css">

	<link rel="icon" 
      type="image/ico" 
      href="favicon.ico">

    <script src="js/jquery.js"></script>

	<script>
		function cekLamanAktif(){
			if (window.location.pathname=="/media_ajar/daftar_prov.php") {
				document.getElementById("linkprop").style.cssText="color:#2980b9; font-weight:bold";
				document.getElementById("linkprop_mini").style.cssText="color:#2980b9; font-weight:bold";
			}
			else if (window.location.pathname=="/media_ajar/daftarkuis.php") {
				document.getElementById("linkkuis").style.cssText="color:#2980b9; font-weight:bold";
				document.getElementById("linkkuis_mini").style.cssText="color:#2980b9; font-weight:bold";
			}
		}
	</script>	
</head>
<body id="kepalaAdm" onload="cekLamanAktif()">
<div class="show-sm">
	<a id="sm-toggle" href="#">
	<!-- <a id="sm-toggle" href="#" data-component="toggleme" data-target="#menu-sm"> -->
		<img class="tbl-menu" src="img/m_1.png" alt="">
		<img class="tbl-menu" style="display: none;" src="img/m_2.png" alt="">
	</a>
</div>

<div id="menu-sm" class="text-center">
    <ul>
        <li><a href="index.php">Halaman Utama</a></li>
        <li><a href="admin.php">Halaman Admin</a></li>
		<li><a id="linkprop-mini" href="entryProp.php">Data Provinsi</a></li>
		<li><a id="linkkuis-mini" href="daftarkuis.php">Data Kuis</a></li>
    </ul>
</div>

<div id="kepala" class="row hide-sm" data-component="sticky">
	<div class="col-2 text-center" id="navbar-brand">
		<a href="index.html"><img src="img/index/judul.png" class="logo" alt="Logo virtual map"></a>
	</div>
	<nav class="col-8" id="navbar-main">
		<ul>
<!-- <<<<<<< HEAD -->
			<li><a class="button round secondary outline smaller" href="" onclick="self.history.back()"><span class="caret left"></span>&nbsp;Kembali</a></li>
			<li><a href="admin.php">Halaman Admin</a></li>
			<li><a id="linkprop" href="daftar_prov.php">Data Provinsi</a></li>
			<li><a id="linkkuis" href="daftarkuis.php">Data Kuis</a></li>
<!-- ======= -->
			<!-- <li><a  href="daftar_prov.php">Data Provinsi</a></li>
			<li><a href="">Data Kuis</a></li> -->
<!-- >>>>>>> eb1cc2748a0dc0d99954bb4494bc45f5a90ec207 -->
		</ul>
	</nav>
	<nav id="logout" class="col-2 text-center">
		<p class="smaller"><?php echo $_SESSION["user"] ?></p>
		<a href="logout.php" class="button secondary outline round">Logout</a>
	</nav>
</div>

<script>
    $("#menu-sm").hide();
	$("#sm-toggle").click(
		function(){
			$(".tbl-menu").fadeToggle();
			$("#menu-sm").slideToggle();
		}
	);
</script>

</body>
</html>
