<?php
include "koneksi.php";

$nama_prov=$_POST['nama_prov'];
$ibukota=$_POST['ibukota'];
$jml_penduduk=$_POST['jml_penduduk'];
$luas_wilayah=$_POST['luas_wilayah'];
$rumah_adat=$_POST['rumah_adat'];
$tari_adat=$_POST['tari_adat'];
$bhs_daerah=$_POST['bhs_daerah'];
$suku=$_POST['suku'];

// Perform queries
$queryInsert="INSERT INTO provinsi(nama_prov,ibukota,jml_penduduk,luas_wilayah,rumah_adat,tari_adat,bhs_daerah,suku) VALUES('$nama_prov','$ibukota','$jml_penduduk','$luas_wilayah','$rumah_adat','$tari_adat','$bhs_daerah','$suku')"; 
mysqli_query($con,$queryInsert);

mysqli_close($con);


?>