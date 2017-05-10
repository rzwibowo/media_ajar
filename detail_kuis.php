<?php

session_start();

if (!isset($_SESSION["user"])) echo "<script>location.replace('login.php');</script>";

include "koneksi.php";


 $id=$_GET['id'];
 $soal=$_GET['soal'];

?>
<!DOCTYPE html>
<html>
<head>
    <title>Detail Kuis</title>

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
    				<h1><?php echo $soal; ?></h1>
    				
    			</div>
    			<div>
                <?php 

                $sql = "SELECT * FROM detail_kuis WHERE  id='$id'";
                $hasil = mysqli_query ($koneksi,$sql) or die ("Gagal Akses");
                                				
				?>
				<table>

				<?php 
			
                while ($row = mysqli_fetch_array ($hasil)){
                ?>
    			
    					<tr>
    						<th>Soal :</th>
    					</tr>
                        <tr>
                            <td><?php echo $row['soal'] ?></td>
                        </tr>
    					<tr>
    						<th>Pilihan:</th>
    					</tr>
                        <tr>
                            <td><b>A </b>: <?php echo $row['pilihan_a'] ?></td>
                        </tr>
                        <tr>
                            <td><b>B </b>: <?php echo $row['pilihan_b'] ?></td>
                        </tr>
                        <tr>
                            <td><b>C </b>: <?php echo $row['pilihan_c'] ?></td>
                        </tr>
                        <tr>
                            <td><b>D </b>: <?php echo $row['pilihan_d'] ?></td>
                        </tr>
    					<tr>
    						<th>Jawaban : <?php echo strtoupper($row['jawaban']) ?></th>
    					</tr>
    					
    			</table>


    			

    			<?php  } ?>
    		</div>
    		<div>
    			


<a href="edit_kuis.php?r=<?php echo $id ?>" class="button">Edit</a>
<a href="delete_detail_kuis.php?r=<?php echo $id ?>" class="button" onclick = "if (! confirm('Yakin akan menghapus data?'))
 { return false; }" style="background-color: #ff3333" >Hapus</a>

    		</div>
    	</div>
    </div>

    <!-- Kube JS + jQuery are used for some functionality, but are not required for the basic setup -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="js/kube.js"></script>
</body>
</html>