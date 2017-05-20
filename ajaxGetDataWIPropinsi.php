<?php
include 'koneksi.php';

$waktu = $_POST['bagian_waktu'];
$result   = mysqli_query($koneksi,"SELECT * FROM pembagian_waktu WHERE waktu='$waktu'");



$data = array();
while($array = mysqli_fetch_assoc($result)){
	
	     $data[] = $array;
    
} 
header('Content-Type: application/json');
echo json_encode($data);


?>