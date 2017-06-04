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

function query_check_jawaban($koneksi,$id_soal,$jawaban,$tabel,$nama_field)
{

    $result   = mysqli_query($koneksi,"SELECT $nama_field FROM $tabel WHERE id='$id_soal'");
    $rs       = mysqli_fetch_assoc($result);
    if(strtolower($jawaban)==strtolower($rs[''.$nama_field.'']))
    {
        return "benar";

    }else{
        return "salah";
    }
}
function get_position_css($koneksi,$id_soal,$jawaban,$tabel,$nama_field){

    $result   = mysqli_query($koneksi,"SELECT $nama_field FROM $tabel WHERE id='$id_soal'");
    $rs       = mysqli_fetch_assoc($result);
    return $rs[''.$nama_field.''];

}


function query_check_jawaban_kuis_provinsi($koneksi,$id_soal,$jawaban,$tabel,$nama_field)
{

    $result   = mysqli_query($koneksi,"SELECT $nama_field FROM $tabel WHERE id_prov='$id_soal'");
    $rs       = mysqli_fetch_assoc($result);
    if(strtolower($jawaban)==strtolower($rs[''.$nama_field.'']))
    {
        return "benar";

    }else{
        return "salah";
    }
}
function get_provinsi_position_css($koneksi,$id_soal,$jawaban,$tabel,$nama_field){

   $result   = mysqli_query($koneksi,"SELECT $nama_field FROM $tabel WHERE id_prov='$id_soal'");
    $rs       = mysqli_fetch_assoc($result);
    return $rs[''.$nama_field.''];
}

?>