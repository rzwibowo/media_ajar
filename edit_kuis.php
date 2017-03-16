<?php
session_start();
//include "koneksi.php";
if (!isset($_SESSION["user"])) header("Location: login.php");
include 'koneksi.php';

$id=$_GET['r'];

?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Kuis</title>

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
    			<div class="head text-center">
    				<h1>Edit Kuis</h1>
    				<p>Masukan Data Kuis</p>
    			</div>
    			<form class="form" action="update_kuis.php" method="POST" name="form-kirim">
                <?php
                    $query= "SELECT * FROM detail_kuis WHERE id='$id'";
                    $result=mysqli_query($koneksi,$query);
                    $row=mysqli_fetch_assoc($result);
                ?>
    				<fieldset>
    					<div class="form-item">
    						<label for="soal">Soal</label>
                            <input type="hidden" name="id" value="<?php echo $row['id'];?>">
    						<textarea name="soal" rows="4" required="required"><?php echo $row['soal'];?></textarea>
                              <div id="message-soal" style="margin-top: 5px;"></div>
    					</div>
    					<div class="form-item">
    						<label for="pilihan_a">A</label>
    						<textarea name="pilihan_a" required="required"> <?php echo $row['pilihan_a'];?> </textarea>
                            <div id="message-pilihan_a" style="margin-top: 5px;"></div>
    					</div>
    					<div class="form-item">
    						<label for="pilihan_b">B</label>
    						<textarea name="pilihan_b" required="required"> <?php echo $row['pilihan_b'];?> </textarea>
                            <div id="message-pilihan_b" style="margin-top: 5px;"></div>
    					</div>
    					<div class="form-item">
    						<label for="pilihan_c">C</label>
    						<textarea name="pilihan_c" required="required"> <?php echo $row['pilihan_c'];?> </textarea>
                            <div id="message-pilihan_c" style="margin-top: 5px;"></div>
    					</div>
    					<div class="form-item">
    						<label for="pilihan_d">D</label>
    						<textarea name="pilihan_d" required="required"> <?php echo $row['pilihan_d'];?> </textarea>
                            <div id="message-pilihan_d" style="margin-top: 5px;"></div>
    					</div>
    					
    					<div class="form-item">
    						<label for="jawaban" >Jawaban</label>
                            <label class="checkbox"><input type="radio" name="jawaban" value="a" id="radio_a">A</label>
                            <label class="checkbox"><input type="radio" name="jawaban" value="b" id="radio_b">B</label>
                            <label class="checkbox"><input type="radio" name="jawaban" value="c" id="radio_c">C</label>
                            <label class="checkbox"><input type="radio" name="jawaban" value="d" id="radio_d">D</label>
                            <div id="message-jawaban" style="margin-top: 5px;"></div>
             
                            
    					</div>
                           

    				

                        <div class="row between">
                         
    						<button type="reset" class="button secondary outline w15">Reset</button>

    						<button type="submit" class="button upper" id="kirim">Simpan</button>
                           
    					</div>

    				</fieldset>
    			</form>
               
    		</div>
    	</div>
    </div>

    <!-- Kube JS + jQuery are used for some functionality, but are not required for the basic setup -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

    <script src="js/kube.js"></script>
   
    <script type="text/javascript">
    var error="error";
    $("#kirim").click(function(){
        $('form[name=form-kirim]').submit(function(){
           // return false;
            if($('#radio_a').is(':checked')) 
            {
                
                error="ok"; 
            }
            else if($('#radio_b').is(':checked'))
            {
                 error="ok"; 
            }
            else if($('#radio_c').is(':checked'))
            {
                 error="ok"; 
            }
            else if($('#radio_d').is(':checked'))
            {
                 error="ok"; 
            }
            else
            {    $("#message-suku").show();
                 $("#message-jawaban").addClass("message error");
                 $("#message-jawaban").html("<span>Anda belum memilih jawaban!</span>");
                 return false;
            }
        });
    });

    </script>
    <?php if($row['jawaban']=='a')
            {
                echo "<script type='text/javascript'>$('#radio_a').prop('checked', true);</script>";
            }
           else if($row['jawaban']=='b')
           {
                echo "<script type='text/javascript'>$('#radio_b').prop('checked', true);</script>";
           }
           else if ($row['jawaban']=='c') 
           {
                echo "<script type='text/javascript'>$('#radio_c').prop('checked', true);</script>";
           }
           else 
           {
                echo "<script type='text/javascript'>$('#radio_d').prop('checked', true);</script>";
           }                    
    ?>
                            

</body>
</html>