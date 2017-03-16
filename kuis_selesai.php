<?php
session_start();
include "functionAll.php";
include "koneksi.php";

if (!isset($_SESSION[get_client_ip()])) echo "<script>location.replace('kuis.php');</script>";

?>
<!DOCTYPE html>
<html>
<head>
    <title>Kuis</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Kube CSS -->
    <link rel="stylesheet" href="css/kube.css">
    <link rel="stylesheet" href="css/medajar.css">
    <style type="text/css">
    .example {
    border: 1px solid rgba(0, 0, 0, 0.07);
    padding: 32px;
    margin-bottom: 16px;
    }
    </style>

</head>
<body>
<?php
 //   include 'kepala.php';
?>
    <div id="main">
    	<div class="row align-center">
    		<div class="col-6">
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
                <h4>Jawaban  Benar :<?php echo  $_SESSION[get_client_ip()]['benar']; ?></h4>

                <h4>Jawaban Salah  :<?php echo  $_SESSION[get_client_ip()]['salah'];?></h4>
               
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