<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<link rel="stylesheet" href="css/kube.css">
	<link rel="stylesheet" href="css/medajar.css">
</head>
<body>
<div id="kepala" class="row" data-component="sticky">
	<div class="col-2 text-center" id="navbar-brand">
		<a href="index.html"><img src="img/index/judul.png" class="logo" alt="Logo virtual map"></a>
	</div>
	<nav class="col-8" id="navbar-main">
		<ul>
			<li><a href="entryProp.php">Data Provinsi</a></li>
			<li><a href="">Data Kuis</a></li>
		</ul>
	</nav>
	<nav id="logout" class="col-2 text-center">
		<p class="smaller"><?php echo $_SESSION["user"] ?></p>
		<a href="logout.php" class="button secondary outline round">Logout</a>
	</nav>
</div>	
</body>
</html>
