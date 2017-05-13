<?php
session_start();

include "koneksi.php";
include "functionAll.php";

$_SESSION[session_id()]['benar']=0;
$_SESSION[session_id()]['salah']=0;
// if (!isset($_SESSION["user"])) echo "<script>location.replace('login.php');</script>";

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
   

</head>
<body>
<?php
    // include 'kepala.php';
?>
    <div id="main">
    	<div class="row align-center">
    		<div class="col-6">
    			<div class="text-center">
    				<h1>KUIS</h1>
    				
    			</div>
               
                <br>
                 <?php 
                $sql = "select * from kuis";
                $hasil = mysqli_query ($koneksi,$sql) or die ("Gagal Akses");
                
                $no=1;

                
                ?>
    			<div>
                   
                <?php while ($row = mysqli_fetch_array ($hasil)){
                   
                    echo "<a href='mulai_kuis.php?r=".$row['id']."&p=0'>".$row['nama']."</a><br>";
                }
                   ?>
                    
    			</div>
                
    			
    		</div>
    	</div>
    </div>

    <!-- Kube JS + jQuery are used for some functionality, but are not required for the basic setup -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="js/kube.js"></script>
</body>
</html>