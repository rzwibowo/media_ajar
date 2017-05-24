<?php
session_start();

if (!isset($_SESSION["user"])) echo "<script>location.replace('login.php');</script>";

include "koneksi.php";

?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Kuis</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Kube CSS -->
    <link rel="stylesheet" href="css/kube.css">
    <link rel="stylesheet" href="css/medajar.css">
   

</head>
<body>
<?php
    include 'kepala.php';
?>
    <div id="main">
    	<div class="row align-center">
    		<div class="col-6">
    			<div class="text-center">
    				<h1>Daftar Kuis</h1>
    				
    			</div>
                <div>
                    <a href="entry_kuis.php" class="button">Tambah Kuis</a>                    
                </div>
                <br>
                 <?php 
                $sql = "select * from kuis";
                $hasil = mysqli_query ($koneksi,$sql) or die ("Gagal Akses");
                
                $no=1;

                
                ?>
    			<div>
                    <ul style="list-style-type: none; color: #000;">
                <?php while ($row = mysqli_fetch_array ($hasil)){
                    ?>              
                    
                        <li data-component="collapse" ><?php echo $no; ?> .
                            <a href="<?php echo "#kuis".$no;?>" class="collapse-toggle"> <?php echo $row['nama']; ?>
                            <span class="caret down"></span>
                            </a> 
                        </li>
                        <ul id="<?php echo "kuis".$no;?>" class="collapse-box hide" style="list-style-type: none;">
                           <?php 
                
                              $sql="SELECT id FROM detail_kuis WHERE id_kuis='$row[id]'";
                              $result= mysqli_query($koneksi,$sql);
                              $n=1;
                              while ($rw = mysqli_fetch_array($result)) {
                                 
                                echo "<li><a href='detail_kuis.php?id=".$rw['id']."&&soal=Soal ".$n."'>Soal no ".$n."</a></li>";
                              $n++;
                              }

                                echo "<li><a href='entry_detail_kuis.php?id=".$row['id']."' class='button'> + </a>
                                <a href='delete_kuis.php?r=".$row['id']."' class='button' onclick = 'if (! confirm(\'Yakin akan menghapus data kuis?\'))
                                    { return false; }' style='background-color:#ff3366'> x </a></li>";


                               ?>
                        </ul>
                        
                <?php $no++;} ?>
                     </ul>
    			</div>
                
    			
    		</div>
    	</div>
    </div>

    <!-- Kube JS + jQuery are used for some functionality, but are not required for the basic setup -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="js/kube.js"></script>
</body>
</html>