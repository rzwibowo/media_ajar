<?php
include 'koneksi.php';
$id   = $_POST['id'];

$result   = mysqli_query($koneksi,"SELECT * FROM provinsi WHERE id_prov='$id'");
$rs       = mysqli_fetch_assoc($result);
header('Content-Type: application/json');
echo json_encode(array('nama' => $rs['nama_prov'],'gbr_bju_adat'=>$rs['gbr_baju_adat'],'gbr_rumah_adat'=>$rs['gbr_rumah_adat'],'ibukota'=>$rs['ibukota'],'jml_penduduk'=>$rs['jml_penduduk'],'luas_wilayah'=>$rs['luas_wilayah'],'rumah_adat'=>$rs['rumah_adat'],'tari_adat'=>$rs['tari_adat'],'bhs_daerah'=>$rs['bhs_daerah'],'suku'=>$rs['suku'],'nama_baju_adat'=>$rs['nama_baju_adat']));
?>