<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HITUNG WAKTU</title>
</head>
<body>
	<?php
		include "koneksi.php";
	?>
	<select name="kota-A" id="kota-A" onchange="hitungJam()">
		<optgroup label="WIB">
		<?php
			$sql="select * from bagi_waktu where wilayah_waktu='WIB'";
			$hasil=mysqli_query($koneksi,$sql)
				or die("gagal akses");
			while ($baris=mysqli_fetch_array($hasil)) {
				echo "<option value='".$baris['wilayah_waktu']."'>".$baris['kota']."</option>";
			}
		?>
		</optgroup>
		<optgroup label="WITA">
		<?php
			$sql="select * from bagi_waktu where wilayah_waktu='WITA'";
			$hasil=mysqli_query($koneksi,$sql)
				or die("gagal akses");
			while ($baris=mysqli_fetch_array($hasil)) {
				echo "<option value='".$baris['wilayah_waktu']."'>".$baris['kota']."</option>";
			}
		?>
		</optgroup>
		<optgroup label="WIB">
		<?php
			$sql="select * from bagi_waktu where wilayah_waktu='WIT'";
			$hasil=mysqli_query($koneksi,$sql)
				or die("gagal akses");
			while ($baris=mysqli_fetch_array($hasil)) {
				echo "<option value='".$baris['wilayah_waktu']."'>".$baris['kota']."</option>";
			}
		?>
		</optgroup>
	</select>
	<input name="jam-A" id="jam-A" type="number" max="23" min="0" placeholder="Jam" onchange="hitungJam()" onkeyup="hitungJam()">
	<input name="menit-A" id="menit-A" type="number" max="59" min="0" placeholder="Menit" onkeyup="salinMenit()">
	<select name="kota-B" id="kota-B" onchange="hitungJam()">
		<optgroup label="WIB">
		<?php
			$sql="select * from bagi_waktu where wilayah_waktu='WIB'";
			$hasil=mysqli_query($koneksi,$sql)
				or die("gagal akses");
			while ($baris=mysqli_fetch_array($hasil)) {
				echo "<option value='".$baris['wilayah_waktu']."'>".$baris['kota']."</option>";
			}
		?>
		</optgroup>
		<optgroup label="WITA">
		<?php
			$sql="select * from bagi_waktu where wilayah_waktu='WITA'";
			$hasil=mysqli_query($koneksi,$sql)
				or die("gagal akses");
			while ($baris=mysqli_fetch_array($hasil)) {
				echo "<option value='".$baris['wilayah_waktu']."'>".$baris['kota']."</option>";
			}
		?>
		</optgroup>
		<optgroup label="WIB">
		<?php
			$sql="select * from bagi_waktu where wilayah_waktu='WIT'";
			$hasil=mysqli_query($koneksi,$sql)
				or die("gagal akses");
			while ($baris=mysqli_fetch_array($hasil)) {
				echo "<option value='".$baris['wilayah_waktu']."'>".$baris['kota']."</option>";
			}
		?>
		</optgroup>
	</select>
	<input name="jam-B" id="jam-B" type="number" max="23" min="0" placeholder="Jam" disabled="disabled">
	<input name="menit-B" id="menit-B" type="number" max="59" min="0" placeholder="Menit" disabled="disabled">
	<script>
		function salinMenit(){
			document.getElementById("menit-B").value = document.getElementById("menit-A").value;
		}
		function hitungJam(){
			if (document.getElementById("kota-A").value==""
				||
				document.getElementById("kota-A").value==null){
				document.getElementById("kota-B").value="";
			}
			if (document.getElementById("kota-A").value==document.getElementById("kota-B").value){
				document.getElementById("jam-B").value=document.getElementById("jam-A").value;
			}
			if (document.getElementById("kota-A").value=="WIB"
				&&
				document.getElementById("kota-B").value=="WITA"){
				document.getElementById("jam-B").value=Number(document.getElementById("jam-A").value)+1;
				if(document.getElementById("jam-B").value>24){
					document.getElementById("jam-B").value=Number(document.getElementById("jam-B").value)-24;
				}
			}
			if (document.getElementById("kota-A").value=="WIB"
				&&
				document.getElementById("kota-B").value=="WIT"){
				document.getElementById("jam-B").value=Number(document.getElementById("jam-A").value)+2;
				if(document.getElementById("jam-B").value>24){
					document.getElementById("jam-B").value=Number(document.getElementById("jam-B").value)-24;
				}
			}
			if (document.getElementById("kota-A").value=="WITA"
				&&
				document.getElementById("kota-B").value=="WIT"){
				document.getElementById("jam-B").value=Number(document.getElementById("jam-A").value)+1;
				if(document.getElementById("jam-B").value>24){
					document.getElementById("jam-B").value=Number(document.getElementById("jam-B").value)-24;
				}
			}
			if (document.getElementById("kota-A").value=="WIT"
				&&
				document.getElementById("kota-B").value=="WITA"){
				document.getElementById("jam-B").value=Number(document.getElementById("jam-A").value)-1;
				if(document.getElementById("jam-B").value<0){
					document.getElementById("jam-B").value=Number(document.getElementById("jam-B").value)+24;
				}
			}
			if (document.getElementById("kota-A").value=="WIT"
				&&
				document.getElementById("kota-B").value=="WIB"){
				document.getElementById("jam-B").value=Number(document.getElementById("jam-A").value)-2;
				if(document.getElementById("jam-B").value>24){
					document.getElementById("jam-B").value=Number(document.getElementById("jam-B").value)-24;
				}
			}
			if (document.getElementById("kota-A").value=="WITA"
				&&
				document.getElementById("kota-B").value=="WIB"){
				document.getElementById("jam-B").value=Number(document.getElementById("jam-A").value)-1;
				if(document.getElementById("jam-B").value>24){
					document.getElementById("jam-B").value=Number(document.getElementById("jam-B").value)-24;
				}
			}
		}
	</script>
</body>
</html>