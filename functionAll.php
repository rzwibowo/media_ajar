<?php


function priksa_kuis($id_kuis,$jawaban,$session,$koneksi){
	$result = mysqli_query($koneksi,"select jawaban from detail_kuis WHERE id='$id_kuis'");
    $rs     = mysqli_fetch_assoc($result);
    // echo $rs['jawaban']; 
    if($rs['jawaban']==$jawaban)
    {
        $_SESSION[session_id()]['benar']+=1;
    }else
    {
        $_SESSION[session_id()]['salah']+=1;
    }
}

function query_check_jawaban($koneksi,$id_soal,$jawaban)
{

    $result   = mysqli_query($koneksi,"SELECT nama_pulau FROM peta_buta_pulau WHERE id='$id_soal'");
    $rs       = mysqli_fetch_assoc($result);
    if(strtolower($jawaban)==strtolower($rs['nama_pulau']))
    {
        return "benar";

    }else{
        return "salah";
    }
}

?>