<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MASUK</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Kube CSS -->
    <link rel="stylesheet" href="css/kube.css">
</head>
<body>
	<div class="row align-center">
		<div class="col-4">
			<div class="text-center">
				<h1>Masuk sebagai Administrator</h1>
			</div>
			<form class="form" action="simpan_prov.php">
				<fieldset>
					<div class="form-item">
						<label for="username">Nama Pengguna</label>
						<input type="text" name="username">
					</div>
					<div class="form-item">
						<label for="password">Kata Kunci</label>
						<input type="password" name="password">
					</div>
					<div class="row align-center">
						<button type="submit" class="button big">Masuk</button>
					</div>
				</fieldset>
			</form>
		</div>
	</div>
	<!-- Kube JS + jQuery are used for some functionality, but are not required for the basic setup -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="js/kube.js"></script>
</body>
</html>