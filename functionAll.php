<?php

function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
        $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
 
    return $ipaddress;
}
function priksa_kuis($id_kuis,$jawaban,$session,$koneksi){
	$result = mysqli_query($koneksi,"select jawaban from detail_kuis WHERE id='$id_kuis'");
    $rs     = mysqli_fetch_assoc($result);
    // echo $rs['jawaban']; 
    if($rs['jawaban']==$jawaban)
    {
        $_SESSION[get_client_ip()]['benar']+=1;
    }else
    {
        $_SESSION[get_client_ip()]['salah']+=1;
    }
}


?>