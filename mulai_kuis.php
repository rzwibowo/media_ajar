<?php
session_start();
include "functionAll.php";
include "koneksi.php";
if (!isset($_SESSION[get_client_ip()])) echo "<script>location.replace('login.php');</script>";

$ik      = $_GET['r'];
$posisi  = $_GET['p'];


if(isset($_GET['jawaban']) && isset($_GET['dk'])){
    $jawaban = $_GET['jawaban'];
    $dk      = $_GET['dk'];
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Mulai Kuis</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Kube CSS -->
    <link rel="stylesheet" href="css/kube.css">
    <link rel="stylesheet" href="css/medajar.css">
    <style type="text/css">
        .soal{
          font-size: 35px;
        }
        #soal{
            margin-bottom:30px; 
        }
        .pilihan{
            font-size: 20px;
        }
        #pilihan{
            margin: 10px 0px 10px 0px;
        }
    </style>
   

</head>
<body>

    <div id="main">
    	<div class="row align-center">
    		<div class="col-6">
    			<div class="text-center">
    				<h1>MULAI KUIS</h1>
    				
    			</div>
               
                <br>
                <div id="data-soal">
                    <div class="row ">
 
                   
                 <?php 

    $batas = 1;

    $no=$posisi+1;
    $query = mysqli_query($koneksi,"select * from detail_kuis WHERE id_kuis='$ik' limit $posisi,$batas ");
 
    $r=mysqli_fetch_assoc($query);
    echo "<form action='mulai_kuis.php' method='GET' class='col col-12'>";
    echo "<div class='col col-12 ' id='soal'><b class='soal'>$no. $r[soal]</b></div>";
    echo "<div class='col col-12' id='pilihan'>&nbsp;&nbsp;&nbsp;&nbsp;<b class='pilihan'><input type='radio'  name='jawaban' value='a' id='radio_a'/>A. $r[pilihan_a]</b></div>";
    echo "<div class='col col-12' id='pilihan'>&nbsp;&nbsp;&nbsp;&nbsp;<b class='pilihan'><input type='radio'  name='jawaban' value='b' id='radio_b'/>B. $r[pilihan_b]</b></div>";
    echo "<div class='col col-12' id='pilihan'>&nbsp;&nbsp;&nbsp;&nbsp;<b class='pilihan'><input type='radio'  name='jawaban' value='c' id='radio_c'/>C. $r[pilihan_c]</b></div>";
    echo "<div class='col col-12' id='pilihan'>&nbsp;&nbsp;&nbsp;&nbsp;<b class='pilihan'><input type='radio'  name='jawaban' value='d' id='radio_d'/>D. $r[pilihan_d]</b></div>";

    $pag=$posisi+1;
    echo"<input type='hidden' name='r'  value='$ik'        id='k' />";
    echo"<input type='hidden' name='dk' value='$r[id]'     id='dk' />";
    echo"<input type='hidden' name='p'  value='$pag'  id='s'/>";


   $data_selanjutnya=$posisi+1;
   $result1 = mysqli_query($koneksi,"select * from detail_kuis WHERE id_kuis='$ik' limit $data_selanjutnya,1");
   $count= mysqli_num_rows($result1);
  
   if($count == 0){
        echo"<div class='col col-2 push-right'><input type='submit' class='button' value='Selesai' id='selesai' name='btn'/></div> ";     
    }else{

        echo"<div class='col col-2 push-right'><input type='submit' class='button' value='Next' id='next' name='btn'/></div> ";        
    }
        echo "</form>";

    if(isset($_GET['btn'])){
            if($_GET['btn']=="Selesai"){
                priksa_kuis($dk,$jawaban,get_client_ip(),$koneksi);
                header('Location: kuis_selesai.php?kd='.$ik);             
            }elseif($_GET['btn']=="Next"){
                 priksa_kuis($dk,$jawaban,get_client_ip(),$koneksi);  
            }
    }
         
                   ?>
                    </div>
    			</div>
                
    			
    		</div>
    	</div>
    </div>

    <!-- Kube JS + jQuery are used for some functionality, but are not required for the basic setup -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="js/kube.js"></script>
    
</body> 
</html>