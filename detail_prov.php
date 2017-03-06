<?php

session_start();

if (!isset($_SESSION["user"])) echo "<script>location.replace('login.php');</script>";

include "koneksi.php";


 $id=$_GET['id'];

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
    <div id="main">
    	<div class="row align-center">
    		<div class="col-6">
    			<div class="text-center">
    				<h1>Dafar Provinsi</h1>
    				
    			</div>
    			<div>
                <?php 
                $sql = "select * from provinsi where id_prov='$id'";
                $hasil = mysqli_query ($koneksi,$sql) or die ("Gagal Akses");
                
                
				
				?>
				<table>

				<?php 
				$no=1;
                while ($row = mysqli_fetch_array ($hasil)){
                ?>
    			
    					<tr>
    						<th>Nama Provinsi</th><td><?php echo $row['nama_prov'] ?></td>
    					</tr>
    					<tr>
    						<th>Ibu Kota</th><td><?php echo $row['ibukota'] ?></td>
    					</tr>
    					<tr>
    						<th>jumlah Penduduk</th><td><?php echo $row['jml_penduduk'] ?></td>
    					</tr>
    					<tr>
    						<th>Luas Wilayah</th><td><?php echo $row['luas_wilayah'] ?></td>
    					</tr>
    					<tr>
    						<th>Rumah Adat</th><td><?php echo $row['rumah_adat'] ?></td>
    					</tr>
    					<tr>
    						<th>Tarian Adat</th><td><?php echo $row['tari_adat'] ?></td>
    					</tr>
    					<tr>
    						<th>Bahasa Daerah</th><td><?php echo $row['bhs_daerah'] ?></td>
    					</tr>
    					<tr>
    						<th>Suku</th><td><?php echo $row['suku'] ?></td>
    					</tr>
    			</table>


    			

    			<?php  } ?>
    		</div>
    		<div>
    			




<button class="button red">Edit</button>
<button class="button red">hapus</button>



    		</div>
    	</div>
    </div>

    <!-- Kube JS + jQuery are used for some functionality, but are not required for the basic setup -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="js/kube.js"></script>
</body>
</html>