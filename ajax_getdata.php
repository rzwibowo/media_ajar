<?php
include 'koneksi.php';
$id   = $_POST['id'];

$result   = mysqli_query($koneksi,"SELECT * FROM provinsi WHERE id_prov='$id'");
$rs       = mysqli_fetch_assoc($result);
header('Content-Type: application/json');
echo json_encode(array('nama' => $rs['nama_prov']));
?>