<?php
session_start();
include 'functionAll.php';
include 'koneksi.php';

$id_selat = $_POST['id_selat'];
$nama_selat = $_POST['nama_selat'];

header('Content-Type: application/json');
if(!isset($_SESSION["kuis_selat"]))
{
$_SESSION['kuis_selat']['id'] = session_id();
$_SESSION['kuis_selat']['jumlah_soal']=3;
$status_soal =query_check_jawaban($koneksi,$id_selat,$nama_selat,'peta_buta_selat','nama_selat');
$position_css = get_position_css($koneksi,$id_selat,$nama_selat,'peta_buta_selat','position_label_css');
$data_array = array(
    1 => array(
        'id_kuis' => $id_selat,
        'jawaban' => $nama_selat,
        'status' => $status_soal,
    ));
$_SESSION['kuis_selat']['soal_kuis']=$data_array;
echo json_encode(array('status' =>$status_soal,'jumdata'=>1,'position_css'=>$position_css));
}else
{
  $count_array = count($_SESSION['kuis_selat']['soal_kuis'])+1;
  $position_css = get_position_css($koneksi,$id_selat,$nama_selat,'peta_buta_selat','position_label_css');
  $status_soal =query_check_jawaban($koneksi,$id_selat,$nama_selat,'peta_buta_selat','nama_selat');
 	$array = $_SESSION['kuis_selat']['soal_kuis'];
 	$data_array = array(
    $count_array => array(
        'id_kuis' => $id_selat,
        'jawaban' => $nama_selat,
        'status' => $status_soal,
    ));
 	$array=array_merge($array,$data_array);
    $_SESSION['kuis_selat']['soal_kuis']=$array;
   
    if($count_array == $_SESSION['kuis_selat']['jumlah_soal'])
 	{

	 	$benar = 0;
	 	foreach ($_SESSION['kuis_selat']['soal_kuis'] as $data) {
	 		if($data['status']=='benar')
	 		{
	 		$benar++;	
	 		}
	 	}
	 	 echo json_encode(array('status' =>'selesai','benar'=>$benar,'position_css'=>$position_css));		
	 
	 	unset($_SESSION['kuis_selat']);
	}else
	{
		echo json_encode(array('status' =>$status_soal,'jumdata'=>$count_array,'position_css'=>$position_css));	
	}
    
}

//echo $id_selat." ".$nama_selat;
?>