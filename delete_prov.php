<?php
session_start();

if (!isset($_SESSION["user"])) echo "<script>location.replace('login.php');</script>";

include "koneksi.php";

$id= $_GET['r'];

$query="SELECT * FROM provinsi WHERE id_prov='$id'";
$result=mysqli_query($koneksi,$query)or die(mysqli_error($koneksi));
$row=mysqli_fetch_assoc($result);

$gambr_baju  = $row['gbr_baju_adat'];
$gambr_rumah = $row['gbr_rumah_adat'];

$queryUpdate="DELETE FROM provinsi WHERE id_prov='$id'"; 
$query=mysqli_query($koneksi,$queryUpdate)or die(mysqli_error($koneksi));
if($query){

	unlink("img/baju/".$gambr_baju);
	unlink("img/rumah/".$gambr_rumah);

	echo "<script>alert('Data berhasil hapus'); window.location.replace('daftar_prov.php');</script>";
}

mysqli_close($koneksi);

?>