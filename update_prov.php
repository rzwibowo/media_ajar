<?php

session_start();

if (!isset($_SESSION["user"])) echo "<script>location.replace('login.php');</script>";

include "koneksi.php";
$baju_adat 			 = $_POST['baju_adat'];
$id                  = $_POST['id_prov'];
$nama_prov           = $_POST['nama_prov'];
$ibukota			 = $_POST['ibukota'];
$jml_penduduk		 = $_POST['jml_penduduk'];
$luas_wilayah		 = $_POST['luas_wilayah'];
$rumah_adat 		 = $_POST['rumah_adat'];
$tari_adat 			 = $_POST['tari_adat'];
$bhs_daerah 		 = $_POST['bhs_daerah'];
$suku 				 = $_POST['suku'];
$gbr_rumah_adat_lama = $_POST['gbr_rumah_adat_lama'];
$gbr_baju_adat_lama  = $_POST['gbr_baju_adat_lama'];




$queryUpdate="UPDATE provinsi set nama_prov='$nama_prov', ibukota='$ibukota', jml_penduduk='$jml_penduduk', luas_wilayah='$luas_wilayah', rumah_adat='$rumah_adat', tari_adat='$tari_adat', bhs_daerah='$bhs_daerah', suku='$suku',nama_baju_adat='$baju_adat' WHERE id_prov='$id'"; 
$query=mysqli_query($koneksi,$queryUpdate)or die(mysqli_error($koneksi));

if(!empty($_FILES['gbr_rumah_adat']["name"]))
{
	unlink("img/rumah/".$gbr_rumah_adat_lama);
	Upload($_FILES['gbr_rumah_adat'],'img/rumah/','gbr_rumah_adat','R',$koneksi,$id);
    
}

if(!empty($_FILES['gbr_baju_adat']["name"]))
{
	unlink("img/baju/".$gbr_baju_adat_lama);
	Upload($_FILES['gbr_baju_adat'],'img/baju/','gbr_baju_adat','B',$koneksi,$id);
    
}

if($query)
{
	echo "<script>alert('Data berhasil dirubah'); window.location.replace('daftar_prov.php');</script>";
}

mysqli_close($koneksi);




function Upload($file,$target_dir,$field,$kd,$kon,$id){

$fileType = pathinfo(basename($file["name"]),PATHINFO_EXTENSION);
$fileName=$kd.date("YmdhisuA").".".$fileType;
$target_file = $target_dir.$fileName;

if(move_uploaded_file($file["tmp_name"], $target_file)){
	
	$queryUpdate="UPDATE provinsi set $field='$fileName' WHERE id_prov='$id'"; 
$query=mysqli_query($kon,$queryUpdate)or die(mysqli_error($kon));
	//return true;
}

}

?>