<?php
session_start();
unset($_SESSION['kuis_pulau']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PETA INDONESIA</title>
	<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=0">

    <!-- Kube CSS -->
    <link rel="stylesheet" href="css/kube.css">
    <link rel="stylesheet" href="css/medajar.css">
    <link rel="stylesheet" href="css/magnify.css">
    <link rel="stylesheet" href="css/custocheck.css">

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
	<style type="text/css">
	.popup{
		display: none;
		position: absolute;
		position: fixed;
		top: 0%;
		left: 0%;
		width: 100%;
		height: 100%;
		z-index:1001;
	}
	.bg{
		position: fixed;
		top: 0;
		left: 0;
		right: 0;
		bottom: 0;
		/*background: #ddd;*/
		background: transparent;
	}
	.content{
		position: relative;
		/*  border:1px solid black;*/
		top:50px;
		width:600px; 
		height:400px;
		margin: 0 auto;
		padding: 10px 20px;
		background-color: white;
	
	}
	.close{
	  display: inline-block;
	  padding: 7px 15px;
	  cursor: pointer;
	  background: #E74C3C;
	  color: #fff;
 	}
 	.close:hover,.close:visited{
 		 background: #C0392B;
 	}

	.popup-kuis{
		display: none;
		position: absolute;
		position: fixed;
		top: 0%;
		left: 0%;
		width: 100%;
		height: 100%;
		z-index:1001;
	}
 	.content-kuis{
		position: relative;
		/*  border:1px solid black;*/
		background-color: white;
	
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

							<a href="#" style="display: inline-block"><img id="help-img" src="img/maps/tanya.png" alt=""></a>
						</p>
					</div>
				</div>
				<div class="clear-fix"></div>
	<!-- header selesai -->

				<!-- gambar peta -->
				<div id="content">
					<img id="map-img" src="img/maps/peta buta 2.png" alt="" usemap="#petaInd">

	<!-- pemanggilan koordinat area dari database -->

						<map id="petaInd" name="petaInd">

						<?php
							include 'koneksi.php';
							$result = mysqli_query($koneksi,"SELECT * FROM peta_buta_pulau");
							while ($rs=mysqli_fetch_array($result)) {
								echo "<area shape='poly' coords='$rs[coordinat]' href='#'  title=''  onclick='gembus(\"$rs[id]\")'  class='popup-show' >";
							}

						?>
						</map>

	<!-- pemanggilan area selesai -->

	<!-- popup info provinsi -->
					<div class="popup">
						<div class="bg"></div>
							<div class="content">
							<!-- <div class="close" ></div> -->
								<div class="content-text" id="message">
									
								</div>
								<div class="row"><a href="peta_buta.php" class="button">COBA LAGI</a></div>
						
						</div>
					</div>

  					<div class="popup-kuis" id="popup-kuis">
						<div class="bg"></div>
							<div class="content-kuis">
								<div class="content-text">
								<p>Apa Nama Pulaunya?</p>
								<input type="hidden" id="id_pulau">
								<input type="text" id="nama_pulau" >
								<div style="text-align: center; margin-top: 15px;"><button id="ok">OK</button></div>
								</div>
						
							</div>
					</div>
 	<!-- popup info provinsi selesai -->




				</div>
				
<!-- 				<div class="row pilih-peta between">
					<a href="" class="button large">Peta pembagian waktu</a>
					<a href="" class="button large">Peta batas wilayah</a>
					<a href="" class="button large">Peta letak Indonesia</a>
				</div> -->
			</div>
		</div>

	</div>

	
    <script src="js/kube.js"></script>


	<script>
		// pemanggilan popup dan data
		function gembus(id){



			if(id == 1){
			$(".content-kuis").css({"top":"450px","width":"300px","height":"100px","margin-left":"300px","padding": "10px 20px"});
			}
			else if(id == 2){
			$(".content-kuis").css({"top":"250px","width":"300px","height":"100px","margin-left":"400px","padding": "10px 20px"});
			}else if(id == 3){
			$(".content-kuis").css({"top":"320px","width":"300px","height":"100px","margin-left":"650px","padding": "10px 20px"});	
			}else if(id == 4){
			$(".content-kuis").css({"top":"260px","width":"300px","height":"100px","margin-left":"790px","padding": "10px 20px"});	
			}else if(id == 5){
			$(".content-kuis").css({"top":"400px","width":"300px","height":"100px","margin-left":"850px","padding": "10px 20px"});	
			}else if(id == 6){
			$(".content-kuis").css({"top":"360px","width":"300px","height":"100px","margin-left":"990px","padding": "10px 20px"});	
			}else if(id == 7){
			$(".content-kuis").css({"top":"500px","width":"300px","height":"100px","margin-left":"700px","padding": "10px 20px"});	
			}else if(id == 8){
			$(".content-kuis").css({"top":"500px","width":"300px","height":"100px","margin-left":"550px","padding": "10px 20px"});	
			}else if(id == 9){
			$(".content-kuis").css({"top":"500px","width":"300px","height":"100px","margin-left":"500px","padding": "10px 20px"});	
			}else if(id == 10){
			$(".content-kuis").css({"top":"250px","width":"300px","height":"100px","margin-left":"100px","padding": "10px 20px"});
			}
			$('#id_pulau').val(id);
			$('.popup-kuis').fadeIn();
		}

     	  $('#ok').click(function(e){
     	  	var id_pulau =  $('#id_pulau').val();
     	  	var nama_pulau =  $('#nama_pulau').val();
     	  	$('#nama_pulau').val("");
     	  	$('.popup-kuis').fadeOut('slow');
     	  	$.post("ajax_tebak_pulau.php",
       		{
          		id_pulau: id_pulau,
          		nama_pulau:nama_pulau,
       		 },
        	function(data,status){
	        	if(data.status == 'benar')
	        	{
	        		console.log(data.jumdata);
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
	              if(data.benar==10)
	              {
		              $('#message').html("<br><div class='row'><div><h2>SELAMAT!<br>SEKARANG KAMU SUDAH<br>TAHU NAMA-NAMA PULAU<br>TERSEBAR DI INDONESIA</h2></div></div><div class='row align-center'><div class='col col-10'><img src='img/start.png' width='110px'><img src='img/start.png' width='110px'><img src='img/start.png' width='110px'><img src='img/start.png' width='110px'></div></div>");
	                 $('.popup').fadeIn('slow');
	              }else if((data.benar < 10) && (data.benar >= 7))
	              {
	              	  $('#message').html("<br><div class='row'><div><h2>MAAF!<br>KAMU BELUM MENJAWAB SEMUA DENGAN BENAR, <br>SILAHKAN COBA LAGI</h2></div></div><div class='row align-center'><div class='col col-10'><img src='img/start.png' width='110px'><img src='img/start.png' width='110px'><img src='img/start.png' width='110px'><img src='img/start_silver.png' width='110px'></div></div>");
	                 $('.popup').fadeIn('slow');
				  }else if((data.benar < 7) && (data.benar >= 4))
				  {
				  	 $('#message').html("<br><div class='row'><div><h2>MAAF!<br>KAMU BELUM MENJAWAB SEMUA DENGAN BENAR, <br>SILAHKAN COBA LAGI</h2></div></div><div class='row align-center'><div class='col col-10'><img src='img/start.png' width='110px'><img src='img/start.png' width='110px'><img src='img/start_silver.png' width='110px'><img src='img/start_silver.png' width='110px'></div></div>");
	                 $('.popup').fadeIn('slow');

				  }else if((data.benar < 4) && (data.benar >= 1))
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