<?php
session_start();
unset($_SESSION['kuis_provinsi']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PETA BUTA: TEBAK PROVINSI</title>
	<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=0">

    <!-- Kube CSS -->
    <link rel="stylesheet" href="css/kube.css">
    <link rel="stylesheet" href="css/medajar.css">
    <link rel="stylesheet" href="css/magnify.css">
    <link rel="stylesheet" href="css/custocheck.css">
    <link rel="icon" 
      type="image/ico" 
      href="favicon.ico">

    <script src="js/jquery.js"></script>
    <script src="js/jquery.magnify.js"></script>
    <script src="js/jquery.imagemapster.min.js"></script>
<!--     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
      <script type="text/javascript">
  	 $(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");
		  

	});

	</script>
	<style>	
		#head{
		 	/*white-space: nowrap; */
			background: #960 url("img/peta_buta/tebak_provinsi.png") no-repeat;
			background-size: contain;
			position: relative;
			/*z-index: 0;*/
			height: 110px;
		}
	</style>
</head>
<body id="map">
	
	<!-- loading screen -->
	<div class="se-pre-con"></div>

	<!-- teombol menu layar kecil -->
	<div id="head-sm" class="show-sm w100">
		<a id="sm-toggle" href="#">
		<!-- <a id="sm-toggle" href="#" data-component="toggleme" data-target="#menu-sm"> -->
			<img class="tbl-menu" src="img/m_1.png" alt="">
			<img class="tbl-menu" style="display: none;" src="img/m_2.png" alt="">
		</a>
	</div>

	<!-- menu layar kecil -->
	<div id="menu-sm" class="text-center">
	    <ul>
	        <li><a href="#">Bantuan</a></li>
	        <li><a href="index.html">Kembali ke Depan</a></li>
	    </ul>
	</div>
	<!-- menu layar kecil selesai -->


	<div id="main">
		<div class="row">
			<div class="col col-12">

	<!-- header -->
				<div id="head" class="hide-sm">
					<div class="row between">
					
						<a href="index.html" id="back" class="w10"><img id="back-img" src="img/maps/kembali.png" alt=""></a>
						<p id="kontrolKanan">

							<a href="#" id="help" style="display: inline-block"><img id="help-img" src="img/maps/tanya.png" alt=""></a>
						</p>
					</div>
				</div>
				<div class="clear-fix"></div>
	<!-- header selesai -->

				<!-- gambar peta -->
				<div id="content">
					<img id="map-img" src="img/maps/tebak_provinsi.png"  alt="" usemap="#petaInd">

	<!-- pemanggilan koordinat area dari database -->

						<map id="petaInd" name="petaInd">

						<?php
							include 'koneksi.php';
							$result = mysqli_query($koneksi,"SELECT * FROM provinsi");
							while ($rs=mysqli_fetch_array($result)) {
								echo "<area shape='poly' coords='$rs[coords]' href='#'  title=\"$rs[id_prov]\"  onclick='gembus(\"$rs[id_prov]\")'  class='popup-show' >";
							}

						?>
						</map>

	<!-- pemanggilan area selesai -->

	<!-- popup info provinsi -->
					<div class="popup">
						<div class="bg"></div>
							<div class="view-kuis">
							<!-- <div class="close" ></div> -->
								<div class="content-text" id="message">
									
								</div>
							</div>
					</div>

  					<div class="popup-kuis" id="popup-kuis">
						<div class="bg"></div>
							<div class="content-kuis-form">
								<div class="content-text">
								<p>Tulis Nama Provinsi</p>
								<input type="hidden" id="id_provinsi">
								<input type="text" id="nama_provinsi" >
								<div style="text-align: center; margin-top: 15px;"><button id="ok">OK</button></div>
								</div>
						
							</div>
					</div>
 	<!-- popup info provinsi selesai -->




				</div>
				
				<div class="row pilih-peta" style="position:absolute; z-index:5; bottom: 0">
					<button class="button round" id="pilih-peta-lain">Pilih Peta Buta Lain<span class="caret right"></span><span class="caret left" style="display: none"></span></button>
					<!-- <button class="button large" id="pembagian-waktu">Peta pembagian waktu</button> -->
					<div id="pilih-peta-tombol" style="display: none">
						<a href="tebak_pulau.php" class="button large">Peta Buta: Tebak Pulau</a>
						<a href="tebak_selat.php" class="button large">Peta Buta: Tebak Selat</a>
						<a href="tebak_laut.php" class="button large">Peta Buta: Tebak Laut</a>
					</div>
				</div>
			</div>
		</div>

	</div>

	
    <script src="js/kube.js"></script>


	<script>
		$(document).ready(function(){
			$("#head").animation("slideInLeft");
			$("#map-img").animation("zoomIn");
			$("#pilih-peta-lain").animation("slideInLeft");
		});
		$("#pilih-peta-lain").click(function(){
			$("#pilih-peta-tombol").toggle("slide");
			$(".caret").toggle();
		});
		// pemanggilan popup dan data
		function gembus(id){


			if(id == 1){
			$(".content-kuis-form").css({"top":"160px","width":"300px","height":"100px","margin-left":"500px","padding": "10px 20px"});
			}
			else if(id == 3){
			$(".content-kuis-form").css({"top":"250px","width":"300px","height":"100px","margin-left":"500px","padding": "10px 20px"});	
			}else if(id == 9){
			$(".content-kuis-form").css({"top":"310px","width":"300px","height":"100px","margin-left":"500px","padding": "10px 20px"});	
			}else if(id == 10){
			$(".content-kuis-form").css({"top":"280px","width":"300px","height":"100px","margin-left":"410px","padding": "10px 20px"});
			}else if(id == 11){
			$(".content-kuis-form").css({"top":"260px","width":"300px","height":"100px","margin-left":"350px","padding": "10px 20px"});
			}else if(id == 12){
			$(".content-kuis-form").css({"top":"200px","width":"300px","height":"100px","margin-left":"200px","padding": "10px 20px"});
			}else if(id == 13){
			$(".content-kuis-form").css({"top":"230px","width":"300px","height":"100px","margin-left":"150px","padding": "10px 20px"});
			}else if(id == 14){
			$(".content-kuis-form").css({"top":"280px","width":"300px","height":"100px","margin-left":"160px","padding": "10px 20px"});
			}else if(id == 15){
			$(".content-kuis-form").css({"top":"270px","width":"300px","height":"100px","margin-left":"100px","padding": "10px 20px"});
			}else if(id == 16){
			$(".content-kuis-form").css({"top":"330px","width":"300px","height":"100px","margin-left":"150px","padding": "10px 20px"});
			}else if(id == 17){
			$(".content-kuis-form").css({"top":"330px","width":"300px","height":"100px","margin-left":"180px","padding": "10px 20px"});
			}else if(id == 18){
			$(".content-kuis-form").css({"top":"380px","width":"300px","height":"100px","margin-left":"180px","padding": "10px 20px"});
			}else if(id == 19){
			$(".content-kuis-form").css({"top":"300px","width":"300px","height":"100px","margin-left":"250px","padding": "10px 20px"});
			}else if(id == 20){
			$(".content-kuis-form").css({"top":"300px","width":"300px","height":"100px","margin-left":"250px","padding": "10px 20px"});
			}else if(id == 21){
			$(".content-kuis-form").css({"top":"150px","width":"300px","height":"100px","margin-left":"20px","padding": "10px 20px"});
			}else if(id == 22){
			$(".content-kuis-form").css({"top":"420px","width":"300px","height":"100px","margin-left":"250px","padding": "10px 20px"});
			}else if(id == 23){
			$(".content-kuis-form").css({"top":"400px","width":"300px","height":"100px","margin-left":"250px","padding": "10px 20px"});
			}else if(id == 24){
			$(".content-kuis-form").css({"top":"430px","width":"300px","height":"100px","margin-left":"290px","padding": "10px 20px"});
			}else if(id == 25){
			$(".content-kuis-form").css({"top":"430px","width":"300px","height":"100px","margin-left":"340px","padding": "10px 20px"});
			}else if(id == 26){
			$(".content-kuis-form").css({"top":"450px","width":"300px","height":"100px","margin-left":"350px","padding": "10px 20px"});
			}else if(id == 27){
			$(".content-kuis-form").css({"top":"450px","width":"300px","height":"100px","margin-left":"400px","padding": "10px 20px"});
			}else if(id == 28){
			$(".content-kuis-form").css({"top":"470px","width":"300px","height":"100px","margin-left":"470px","padding": "10px 20px"});
			}else if(id == 29){
			$(".content-kuis-form").css({"top":"470px","width":"300px","height":"100px","margin-left":"520px","padding": "10px 20px"});
			}else if(id == 30){
			$(".content-kuis-form").css({"top":"500px","width":"300px","height":"100px","margin-left":"680px","padding": "10px 20px"});
			}else if(id == 31){
			$(".content-kuis-form").css({"top":"390px","width":"300px","height":"100px","margin-left":"880px","padding": "10px 20px"});
			}else if(id == 32){
			$(".content-kuis-form").css({"top":"360px","width":"300px","height":"100px","margin-left":"1010px","padding": "10px 20px"});
			}else if(id == 33){
			$(".content-kuis-form").css({"top":"300px","width":"300px","height":"100px","margin-left":"950px","padding": "10px 20px"});
			}else if(id == 34){
			$(".content-kuis-form").css({"top":"250px","width":"300px","height":"100px","margin-left":"790px","padding": "10px 20px"});
			}else if(id == 35){
			$(".content-kuis-form").css({"top":"220px","width":"300px","height":"100px","margin-left":"700px","padding": "10px 20px"});
			}else if(id == 36){
			$(".content-kuis-form").css({"top":"220px","width":"300px","height":"100px","margin-left":"650px","padding": "10px 20px"});
			}else if(id == 37){
			$(".content-kuis-form").css({"top":"260px","width":"300px","height":"100px","margin-left":"620px","padding": "10px 20px"});
			}else if(id == 38){
			$(".content-kuis-form").css({"top":"310px","width":"300px","height":"100px","margin-left":"580px","padding": "10px 20px"});
			}else if(id == 39){
			$(".content-kuis-form").css({"top":"360px","width":"300px","height":"100px","margin-left":"590px","padding": "10px 20px"});
			}else if(id == 40){
			$(".content-kuis-form").css({"top":"360px","width":"300px","height":"100px","margin-left":"660px","padding": "10px 20px"});
			}

			$('#id_provinsi').val(id);
			$('.popup-kuis').fadeIn();
			$('#nama_provinsi').focus();
		}

     	  $('#ok').click(function(e){

     	  	var id_provinsi =  $('#id_provinsi').val();
     	  	var nama_provinsi =  $('#nama_provinsi').val();
     	  	$('#nama_provinsi').val("");
     	  	$('.popup-kuis').fadeOut('slow');
     	  	$.post("ajax_tebak_provinsi.php",
       		{
          		id_provinsi: id_provinsi,
          		nama_provinsi:nama_provinsi,
       		 },
        	function(data,status){

	        	if(data.status == 'benar')
	        	{
	        		
	            $('#message').html("<div class='row'><div style='margin-left:180px;border:0px solid black;'><img src='img/start.png' width='160px'></div></div><div class='row'><h1 style='text-align:center'>YEAY, KAMU BENAR</h1></div>");
	            
	            $('.popup').fadeIn('slow').delay(1000).hide('slow');	            

	            }
	            else if (data.status == 'salah')
	            {
	            	console.log(data.jumdata);
	              $('#message').html("<br><div class='row'><div><h1>UPS, AYO COBA LAGI!</h1></div></div><div class='row'><h1 style='text-align:center'>KAMU PASTI BISA</h1></div>");
	              $('.popup').fadeIn('slow').delay(1000).hide('slow');

	            }else if(data.status =='selesai')
	            {
	            	console.log(data.benar+" data_benar");
	              if((data.benar > 25) && (data.benar <=10))
	              {
		              $('#message').html("<br><div class='row'><div><h2>SELAMAT!<br>SEKARANG KAMU SUDAH<br>TAHU NAMA-NAMA PULAU<br>TERSEBAR DI INDONESIA</h2></div></div><div class='row align-center'><div class='col col-10'><img src='img/start.png' width='110px'><img src='img/start.png' width='110px'><img src='img/start.png' width='110px'><img src='img/start.png' width='110px'></div></div>");
	                 $('.popup').fadeIn('slow');
	              }else if((data.benar > 17) && (data.benar <= 25))
	              {
	              	  $('#message').html("<br><div class='row'><div><h2>MAAF!<br>KAMU BELUM MENJAWAB SEMUA DENGAN BENAR, <br>SILAHKAN COBA LAGI</h2></div></div><div class='row align-center'><div class='col col-10'><img src='img/start.png' width='110px'><img src='img/start.png' width='110px'><img src='img/start.png' width='110px'><img src='img/start_silver.png' width='110px'></div></div>");
	                 $('.popup').fadeIn('slow');
				  }else if((data.benar > 8) && (data.benar <= 17))
				  {
				  	 $('#message').html("<br><div class='row'><div><h2>MAAF!<br>KAMU BELUM MENJAWAB SEMUA DENGAN BENAR, <br>SILAHKAN COBA LAGI</h2></div></div><div class='row align-center'><div class='col col-10'><img src='img/start.png' width='110px'><img src='img/start.png' width='110px'><img src='img/start_silver.png' width='110px'><img src='img/start_silver.png' width='110px'></div></div>");
	                 $('.popup').fadeIn('slow');

				  }else if((data.benar > 0) && (data.benar <= 8))
				  {
				  	 $('#message').html("<br><div class='row'><div><h2>MAAF!<br>KAMU BELUM MENJAWAB SEMUA DENGAN BENAR, <br>SILAHKAN COBA LAGI</h2></div></div><div class='row align-center'><div class='col col-10'><img src='img/start.png' width='110px'><img src='img/start_silver.png' width='110px'><img src='img/start_silver.png' width='110px'><img src='img/start_silver.png' width='110px'></div></div>");
	                 $('.popup').fadeIn('slow');

				  }else if(data.benar == 0)
				  {
				  	 $('#message').html("<br><div class='row'><div><h2>MAAF!<br>KAMU BELUM MENJAWAB SEMUA DENGAN BENAR, <br>SILAHKAN COBA LAGI</h2></div></div><div class='row align-center'><div class='col col-10'><img src='img/start_silver.png' width='110px'><img src='img/start_silver.png' width='110px'><img src='img/start_silver.png' width='110px'><img src='img/start_silver.png' width='110px'></div></div>");
	                 $('.popup').fadeIn('slow');
				  }
	            }
        	});	
        	});


		// highlight maps
		$("#map-img").mapster({
			fillColor: '2c3e50',
			fillOpacity: 0.5,
			stroke: true,
			strokeColor: '95a5a6',
			strokeOpacity: 0.7,
			strokeWidth: 3
		});
		// var untuk kaca pembesar
		var $perbesar="";
		// sembunyikan menu untuk layar kecil
		$("#menu-sm").hide();
		// efek menu back
		$("#back").hover(
			function(){
			    $("#back-img").attr("src", "img/maps/kembali_hover.png");
			},
			function(){
			    $("#back-img").attr("src", "img/maps/kembali.png");
			}
		);
		// efek menu help
		$("#help").hover(
			function(){
			    $("#help-img").attr("src", "img/maps/tanya_hover.png");
			},
			function(){
			    $("#help-img").attr("src", "img/maps/tanya.png");
			}
		);
		// efek menu layar kecil
		$("#sm-toggle").click(function(){
				$(".tbl-menu").fadeToggle();
				$("#menu-sm").slideToggle();
			}
		);

		
	</script>
</body>
</html>