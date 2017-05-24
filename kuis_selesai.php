<?php
session_start();
include "functionAll.php";
include "koneksi.php";

if (!isset($_SESSION[session_id()])) echo "<script>location.replace('kuis.php');</script>";

?>
<!DOCTYPE html>
<html>
<head>
    <title>KUIS: SELESAI</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Kube CSS -->
    <link rel="stylesheet" href="css/kube.css">
    <link rel="stylesheet" href="css/medajar.css">
    <link rel="icon" 
      type="image/ico" 
      href="favicon.ico">
    <style type="text/css">
    .example {
    border: 1px solid rgba(0, 0, 0, 0.07);
    padding: 32px;
    margin-bottom: 16px;
    }
    </style>

    <script src="js/jquery.js"></script>

</head>
<body id="index">
<?php
 //   include 'kepala.php';
?>
    <div id="kuis-page">
        <div id="ornamen" class="col col-12 text-center">
            <img id="awan" src="img/index/awan-menu.gif" alt="">
        <!-- <img id="pohon" src="img/index/pohon.png" alt=""> -->
        </div>

        <div class="row">
            <a href="kuis.php" id="back"><img id="back-img" src="img/maps/kembali.png" alt=""></a>
        </div>
        
        <div  class="row align-center">
    		<div id="materi-show" class="materi col-6">
    			<div class="text-center">
    				<h1>KUIS SELESAI</h1>
    				
    			</div>
            
                <br>
                <div class="example">
                <?php
                $kd=$_GET['kd'];
                 $result = mysqli_query($koneksi,"select count(id) as jumlah from detail_kuis WHERE id_kuis='$kd'");
                 $rs= mysqli_fetch_assoc($result);
                ?>
                <h3>Jumlah Soal : <?php echo $rs['jumlah']?></h3>
                <h4>Jawaban  Benar :<?php echo  $_SESSION[session_id()]['benar']; ?></h4>

                <h4>Jawaban Salah  :<?php echo  $_SESSION[session_id()]['salah'];?></h4>
               
                 </div>
    			</div>
                <?php

                unset($_SESSION[session_id()]);
                ?>
    			
    		</div>
    	</div>
    </div>

    <!-- Kube JS + jQuery are used for some functionality, but are not required for the basic setup -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="js/kube.js"></script>

    <script>
        $("#back").hover(
            function(){
                $("#back-img").attr("src", "img/maps/kembali_hover.png");
            },
            function(){
                $("#back-img").attr("src", "img/maps/kembali.png");
            }
        );
    </script>
</body>
</html>