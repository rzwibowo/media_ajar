<?php
session_start();
include 'functionAll.php';
include 'koneksi.php';

$id_laut = $_POST['id_laut'];
$nama_laut = $_POST['nama_laut'];

header('Content-Type: application/json');
if(!isset($_SESSION["kuis_laut"]))
{
$_SESSION['kuis_laut']['id'] = session_id();
$_SESSION['kuis_laut']['jumlah_soal']=4;
$status_soal =query_check_jawaban($koneksi,$id_laut,$nama_laut,'peta_buta_laut','nama_laut');
$position_css = get_position_css($koneksi,$id_laut,$nama_laut,'peta_buta_laut','position_label_css');
$data_array = array(
    1 => array(
        'id_kuis' => $id_laut,
        'jawaban' => $nama_laut,
        'status' => $status_soal,
    ));
$_SESSION['kuis_laut']['soal_kuis']=$data_array;

echo json_encode(array('status' =>$status_soal,'jumdata'=>1,'position_css'=>$position_css));
}else
{
  $count_array = count($_SESSION['kuis_laut']['soal_kuis'])+1;
 $position_css = get_position_css($koneksi,$id_laut,$nama_laut,'peta_buta_laut','position_label_css');
 $status_soal =query_check_jawaban($koneksi,$id_laut,$nama_laut,'peta_buta_laut','nama_laut');
 	$array = $_SESSION['kuis_laut']['soal_kuis'];
 	$data_array = array(
    $count_array => array(
        'id_kuis' => $id_laut,
        'jawaban' => $nama_laut,
        'status' => $status_soal,
    ));
 	$array=array_merge($array,$data_array);
    $_SESSION['kuis_laut']['soal_kuis']=$array;
   
    if($count_array == $_SESSION['kuis_laut']['jumlah_soal'])
 	{

	 	$benar = 0;
	 	foreach ($_SESSION['kuis_laut']['soal_kuis'] as $data) {
	 		if($data['status']=='benar')
	 		{
	 		$benar++;	
	 		}
	 	}
	 	 echo json_encode(array('status' =>'selesai','benar'=>$benar,'position_css'=>$position_css));		
	 
	 	unset($_SESSION['kuis_laut']);
	}else
	{
		echo json_encode(array('status' =>$status_soal,'jumdata'=>$count_array,'position_css'=>$position_css));	
	}
    
}

//echo $id_laut." ".$nama_laut;
?>