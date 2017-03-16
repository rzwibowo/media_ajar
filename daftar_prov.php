<?php
session_start();

if (!isset($_SESSION["user"])) echo "<script>location.replace('login.php');</script>";

include "koneksi.php";

?>
<!DOCTYPE html>
<html>
<head>
    <title>Entry Data Provinsi</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Kube CSS -->
    <link rel="stylesheet" href="css/kube.css">
   

</head>
<body>
<?php
    include 'kepala.php';
?>
    <div id="main">
    	<div class="row align-center">
    		<div class="col-6">
    			<div class="text-center">
    				<h1>Daftar Provinsi</h1>
    				
    			</div>
                <div>
                    <a href="entryProp.php" class="button">Tambah Data</a>                    
                </div>
                <br>
    			<div>
                <?php 
                $sql = "select id_prov,nama_prov from provinsi";
                $hasil = mysqli_query ($koneksi,$sql) or die ("Gagal Akses");
                
                $no=1;

                while ($row = mysqli_fetch_array ($hasil)){
                ?>
    				<p><?php echo $no ?>. <a href="detail_prov.php?id=<?php echo $row['id_prov']?>">
                    <?php echo $row['nama_prov']?></a></p>
                    <?php $no++; } ?>
    			</div>
    			
    		</div>
    	</div>
    </div>

    <!-- Kube JS + jQuery are used for some functionality, but are not required for the basic setup -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="js/kube.js"></script>
</body>
</html>