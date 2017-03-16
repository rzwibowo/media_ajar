<?php
session_start();
//include "koneksi.php";
if (!isset($_SESSION["user"])) header("Location: login.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Entry Data Kuis</title>

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
    				<h1>Kuis</h1>
    				<p>Masukan Nama Kuis</p>
    			</div>
    			<form class="form" action="simpan_kuis.php" method="POST" name="form-kirim">
                
    				<fieldset>
    					<div class="form-item">
    						<label for="nama_kuis">Nama Kuis</label>
    						<input type="text" name="nama_kuis" rows="4" required="required">
                              <div id="message-nama_kuis" style="margin-top: 5px;"></div>
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
   
   
</body>
</html>