<?php 

session_start();
if (!isset($_SESSION["user"])) echo "<script>location.replace('login.php');</script>";

include "koneksi.php";

$nama      = $_POST['nama_kuis'];

$queryInsert="INSERT INTO kuis(nama) VALUES('$nama')"; 
$query=mysqli_query($koneksi,$queryInsert);


if($query){
	echo "<script>alert('Data berhasil simpan'); window.location.replace('daftarkuis.php');</script>";
}else{
mysqli_close($koneksi);
}


?>