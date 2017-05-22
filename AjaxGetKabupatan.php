<?php
include 'koneksi.php';

$id_pembagian_waktu = $_POST['id_pembagian_waktu'];
$result   = mysqli_query($koneksi,"SELECT * FROM detail_pembagian_waktu WHERE id_pembagian_waktu='$id_pembagian_waktu' ORDER BY nama_daerah");



$data = array();
while($array = mysqli_fetch_assoc($result)){
	
	     $data[] = $array;
    
} 
header('Content-Type: application/json');
echo json_encode($data);


?>