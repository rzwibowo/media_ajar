<?php
session_start();
include 'functionAll.php';
include 'koneksi.php';

$id_provinsi = $_POST['id_provinsi'];
$nama_provinsi = $_POST['nama_provinsi'];

header('Content-Type: application/json');
if(!isset($_SESSION["kuis_provinsi"]))
{
$_SESSION['kuis_provinsi']['id'] = session_id();
$_SESSION['kuis_provinsi']['jumlah_soal']=34;
$status_soal =query_check_jawaban_kuis_provinsi($koneksi,$id_provinsi,$nama_provinsi,'provinsi','nama_prov');
$position_css = get_provinsi_position_css($koneksi,$id_provinsi,$nama_provinsi,'provinsi','position_label_css');
$data_array = array(
    1 => array(
        'id_kuis' => $id_provinsi,
        'jawaban' => $nama_provinsi, 
        'status' => $status_soal,
    ));
$_SESSION['kuis_provinsi']['soal_kuis']=$data_array;
echo json_encode(array('status' =>$status_soal,'jumdata'=>1,'position_css'=>$position_css));

}else
{
  $count_array = count($_SESSION['kuis_provinsi']['soal_kuis'])+1;
 $position_css = get_provinsi_position_css($koneksi,$id_provinsi,$nama_provinsi,'provinsi','position_label_css');
 $status_soal =query_check_jawaban_kuis_provinsi($koneksi,$id_provinsi,$nama_provinsi,'provinsi','nama_prov');
 	$array = $_SESSION['kuis_provinsi']['soal_kuis'];
 	$data_array = array(
    $count_array => array(
        'id_kuis' => $id_provinsi,
        'jawaban' => $nama_provinsi,
        'status' => $status_soal,
    ));
 	$array=array_merge($array,$data_array);
    $_SESSION['kuis_provinsi']['soal_kuis']=$array;
   
    if($count_array == $_SESSION['kuis_provinsi']['jumlah_soal'])
 	{

	 	$benar = 0;
	 	foreach ($_SESSION['kuis_provinsi']['soal_kuis'] as $data) {
	 		if($data['status']=='benar')
	 		{
	 		$benar++;	
	 		}
	 	}
	 	 echo json_encode(array('status' =>'selesai','benar'=>$benar,'position_css'=>$position_css));		
	 
	 	unset($_SESSION['kuis_provinsi']);
	}else
	{
		echo json_encode(array('status' =>$status_soal,'jumdata'=>$count_array,'position_css'=>$position_css));	
	}
    
}

?>