<?php
session_start();

if (!isset($_SESSION["user"])) echo "<script>location.replace('login.php');</script>";

include "koneksi.php";

$id= $_GET['r'];


$queryUpdate="DELETE FROM detail_kuis WHERE id='$id'"; 
$query=mysqli_query($koneksi,$queryUpdate)or die(mysqli_error($koneksi));
if($query){

	echo "<script>alert('Data berhasil hapus'); window.location.replace('daftarkuis.php');</script>";
}

mysqli_close($koneksi);

?>