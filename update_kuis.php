<?php 

session_start();
if (!isset($_SESSION["user"])) echo "<script>location.replace('login.php');</script>";

include "koneksi.php";

$id        = $_POST['id'];
$soal      = $_POST['soal'];
$pilihan_a = $_POST['pilihan_a'];
$pilihan_b = $_POST['pilihan_b'];
$pilihan_c = $_POST['pilihan_c'];
$pilihan_d = $_POST['pilihan_d'];
$jawaban   = $_POST['jawaban'];


$queryUpdate="UPDATE detail_kuis set soal='$soal', pilihan_a='$pilihan_a', pilihan_b='$pilihan_b', pilihan_c='$pilihan_c', pilihan_d='$pilihan_d', jawaban='$jawaban' WHERE id='$id'"; 
$query=mysqli_query($koneksi,$queryUpdate)or die(mysqli_error($koneksi));

if($query)
{
	echo "<script>alert('Data fierhasil dirubah'); window.location.replace('daftarkuis.php');</script>";
}

mysqli_close($koneksi);


?>