<?php 

session_start();
if (!isset($_SESSION["user"])) echo "<script>location.replace('login.php');</script>";

include "koneksi.php";

$id_kuis   = $_POST['id_kuis'];
$soal      = $_POST['soal'];
$pilihan_a = $_POST['pilihan_a'];
$pilihan_b = $_POST['pilihan_b'];
$pilihan_c = $_POST['pilihan_c'];
$pilihan_d = $_POST['pilihan_d'];
$jawaban   = $_POST['jawaban'];


$queryInsert="INSERT INTO detail_kuis(soal,pilihan_a,pilihan_b,pilihan_c,pilihan_d,jawaban,id_kuis) VALUES('$soal','$pilihan_a','$pilihan_b','$pilihan_c','$pilihan_d','$jawaban','$id_kuis')"; 
$query=mysqli_query($koneksi,$queryInsert);


if($query){
	echo "<script>alert('Data berhasil simpan'); window.location.replace('daftarkuis.php');</script>";
}else{
mysqli_close($koneksi);
}


?>