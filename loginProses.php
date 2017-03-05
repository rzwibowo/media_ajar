<?php
	session_start();
	$user=$_POST['username'];
	$pass=substr(md5($_POST['password']),0,30);

	include "koneksi.php";
	$sql = "select * from user where username='".$user."' and password='".$pass."' limit 1";
	$hasil = mysqli_query ($koneksi,$sql) or die ("Gagal Akses");
	$jumlah = mysqli_num_rows($hasil);
	if ($jumlah>0) {
	$row = mysqli_fetch_assoc($koneksi,$hasil);
	$_SESSION["user"] = $row["user"];
	header("Location:entryProp.php");
	} else {
	echo "user atau password salah ! <br>";
	echo "<input type='button' value='kembali' onClick='self.history.back()'";
	}
?>