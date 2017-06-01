<?php
session_start();
include 'functionAll.php';
include 'koneksi.php';
$id_pulau = $_POST['id_pulau'];
$nama_pulau = $_POST['nama_pulau'];

header('Content-Type: application/json');
if(!isset($_SESSION["kuis_pulau"]))
{
$_SESSION['kuis_pulau']['id'] = session_id();
$_SESSION['kuis_pulau']['jumlah_soal']=10;
$status_soal =query_check_jawaban($koneksi,$id_pulau,$nama_pulau,'peta_buta_pulau','nama_pulau');
$position_css = get_position_css($koneksi,$id_pulau,$nama_pulau,'peta_buta_pulau','position_label_css');
$data_array = array(
    1 => array(
        'id_kuis' => $id_pulau,
        'jawaban' => $nama_pulau,
        'status' => $status_soal,
    ));
$_SESSION['kuis_pulau']['soal_kuis']=$data_array;
echo json_encode(array('status' =>$status_soal,'jumdata'=>1,'position_css'=>$position_css));
}else
{
	//unset($_SESSION['kuis_pulau']);
  $count_array = count($_SESSION['kuis_pulau']['soal_kuis'])+1;
 $position_css = get_position_css($koneksi,$id_pulau,$nama_pulau,'peta_buta_pulau','position_label_css');
 $status_soal =query_check_jawaban($koneksi,$id_pulau,$nama_pulau,'peta_buta_pulau','nama_pulau');
 	$array = $_SESSION['kuis_pulau']['soal_kuis'];
 	$data_array = array(
    $count_array => array(
        'id_kuis' => $id_pulau,
        'jawaban' => $nama_pulau,
        'status' => $status_soal,
    ));
 	$array=array_merge($array,$data_array);
    $_SESSION['kuis_pulau']['soal_kuis']=$array;
   
    if($count_array == $_SESSION['kuis_pulau']['jumlah_soal'])
 	{

	 	$benar = 0;
	 	foreach ($_SESSION['kuis_pulau']['soal_kuis'] as $data) {
	 		if($data['status']=='benar')
	 		{
	 		$benar++;	
	 		}
	 	}
	 	 echo json_encode(array('status' =>'selesai','benar'=>$benar,'position_css'=>$position_css));		
	 
	 	unset($_SESSION['kuis_pulau']);
	}else
	{
		echo json_encode(array('status' =>$status_soal,'jumdata'=>$count_array,'position_css'=>$position_css));	
	}
    
}

//echo $id_pulau." ".$nama_pulau;
?>