<?php

session_start();

if (!isset($_SESSION["user"])) echo "<script>location.replace('login.php');</script>";

include "koneksi.php";

$id=$_POST['id_prov'];
$nama_prov=$_POST['nama_prov'];
$ibukota=$_POST['ibukota'];
$jml_penduduk=$_POST['jml_penduduk'];
$luas_wilayah=$_POST['luas_wilayah'];
$rumah_adat=$_POST['rumah_adat'];
$tari_adat=$_POST['tari_adat'];
$bhs_daerah=$_POST['bhs_daerah'];
$suku=$_POST['suku'];

$queryUpdate="UPDATE provinsi set nama_prov='$nama_prov', ibukota='$ibukota', jml_penduduk='$jml_penduduk', luas_wilayah='$luas_wilayah', rumah_adat='$rumah_adat', tari_adat='$tari_adat', bhs_daerah='$bhs_daerah', suku='$suku' WHERE id_prov='$id'"; 
$query=mysqli_query($koneksi,$queryUpdate)or die(mysqli_error($koneksi));
if($query){
	echo "<script>alert('Data berhasil dirubah'); window.location.replace('daftar_prov.php');</script>";
}
mysqli_close($koneksi);

?>