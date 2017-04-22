<?php
session_start();
if (!isset($_SESSION["user"])) echo "<script>location.replace('login.php');</script>";

include "koneksi.php";






function Upload($file,$target_dir,$field,$kd){
include "koneksi.php";
$uploadOk = 1;
$fileType = pathinfo(basename($file["name"]),PATHINFO_EXTENSION);
$fileName=$kd.date("YmdhisuA").".".$fileType;
$target_file = $target_dir.$fileName;
$query=mysqli_query($koneksi,"SELECT id_prov FROM provinsi GROUP BY id_prov DESC LIMIT 1");
$id = mysqli_fetch_assoc($query);

if(move_uploaded_file($file["tmp_name"], $target_file)){
	
	$queryUpdate="UPDATE provinsi set $field='$fileName' WHERE id_prov='$id[id_prov]'"; 
$query=mysqli_query($koneksi,$queryUpdate)or die(mysqli_error($koneksi));
	//return true;
}

}


$nama_prov=$_POST['nama_prov'];
$baju_adat=$_POST['baju_adat'];
$ibukota=$_POST['ibukota'];
$jml_penduduk=$_POST['jml_penduduk'];
$luas_wilayah=$_POST['luas_wilayah'];
$rumah_adat=$_POST['rumah_adat'];
$tari_adat=$_POST['tari_adat'];
$bhs_daerah=$_POST['bhs_daerah'];
$suku=$_POST['suku'];
$gbr_baju_adat=$_FILES['gbr_baju_adat'];
$gbr_rumah_adat=$_FILES['gbr_rumah_adat'];

$queryInsert="INSERT INTO provinsi(nama_prov,ibukota,jml_penduduk,luas_wilayah,rumah_adat,tari_adat,bhs_daerah,suku,nama_baju_adat) VALUES('$nama_prov','$ibukota','$jml_penduduk','$luas_wilayah','$rumah_adat','$tari_adat','$bhs_daerah','$suku','$baju_adat')"; 
$query=mysqli_query($koneksi,$queryInsert);



Upload($gbr_baju_adat,'img/baju/','gbr_baju_adat','B');
Upload($gbr_rumah_adat,'img/rumah/','gbr_rumah_adat','R');

if($query){
	echo "<script>alert('Data berhasil simpan'); window.location.replace('daftar_prov.php');</script>";
}else{
mysqli_close($koneksi);
}
?>