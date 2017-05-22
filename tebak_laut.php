<?php
session_start();
unset($_SESSION['kuis_laut']);
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
	        <li style="vertical-align:middle">
	        	<p style="display: inline-block; margin-bottom: 0px; color: #fff">Kaca Pembesar</p>
		        <div class="custom-chk">
				
					<input type="checkbox" value="1" id="chkInput" class="chkZoom">
					<label for="chkInput"></label>
				</div>
			</li>
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
						<p id="kontrolKanan" class="w15 row between">
							<a href="#" class="w30" style="display: inline-block" id="lup">
								<img id="zoomOff" class="img-lup" src="img/maps/zoom_1.png" alt="">
								<img id="zoomOn" class="img-lup" style="display: none" src="img/maps/zoom_2.png" alt="">
							</a>
							<a href="#" style="display: inline-block" class="w30"><img id="help-img" src="img/maps/tanya.png" alt=""></a>
						</p>
					</div>
				</div>
				<div class="clear-fix"></div>
	<!-- header selesai -->

				<!-- gambar peta -->
				<div id="content">
					<img id="map-img" src="img/maps/tebak laut.png"  alt="" usemap="#petaInd">

	<!-- pemanggilan koordinat area dari database -->

						<map id="petaInd" name="petaInd">

						<?php
							include 'koneksi.php';
							$result = mysqli_query($koneksi,"SELECT * FROM peta_buta_laut");
							while ($rs=mysqli_fetch_array($result)) {
								echo "<area shape='poly' coords='$rs[coordinat]' href='#'  title=''  onclick='gembus(\"$rs[id]\")'  class='popup-show' >";
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
								<div class="row"><a href="peta_buta.php" class="button">COBA LAGI</a></div>
						
						</div>
					</div>

  						<div class="popup-kuis" id="popup-kuis">
						<div class="bg"></div>
							<div class="content-kuis-form">
								<div class="content-text">
								<p>Tulis Nama Pulau</p>
								<input type="hidden" id="id_laut">
								<input type="text" id="nama_laut" >
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
			$(".content-kuis-form").css({"top":"400px","width":"300px","height":"100px","margin-left":"350px","padding": "10px 20px"});
			}
			else if(id == 2){
			$(".content-kuis-form").css({"top":"410px","width":"300px","height":"100px","margin-left":"750px","padding": "10px 20px"});
			}else if(id == 3){
			$(".content-kuis-form").css({"top":"440px","width":"300px","height":"100px","margin-left":"990px","padding": "10px 20px"});	
			}else if(id == 4){
			$(".content-kuis-form").css({"top":"500px","width":"300px","height":"100px","margin-left":"500px","padding": "10px 20px"});	
			}
			$('#id_laut').val(id);
			$('.popup-kuis').fadeIn();
		}

     	  $('#ok').click(function(e){
     	  	var id_laut =  $('#id_laut').val();
     	  	var nama_laut=  $('#nama_laut').val();
          
     	  	$('#nama_laut').val("");
     	  	$('.popup-kuis').fadeOut('slow');
     	  	$.post("ajax_tebak_laut.php",
       		{
          		id_laut: id_laut,
          		nama_laut:nama_laut,
       		 },
        	function(data,status){
        		
	        	if(data.status == 'benar')
	        	{
	        	
	            $('#message').html("<div class='row'><div style='margin-left:180px;border:0px solid black;'><img src='img/start.png' width='160px'></div></div><div class='row'><h1 style='text-align:center'>YEAY, KAMU BENAR</h1></div>");
	            $('.popup').fadeIn('slow').delay(1000).hide('slow');

	            }
	            else if (data.status == 'salah')
	            {
	            	
	              $('#message').html("<br><div class='row'><div><h1>UPS, AYO COBA LAGI!</h1></div></div><div class='row'><h1 style='text-align:center'>KAMU PASTI BISA</h1></div>");
	              $('.popup').fadeIn('slow').delay(1000).hide('slow');

	            }else if(data.status =='selesai')
	            {
	            	
	              if(data.benar==4)
	              {
		              $('#message').html("<br><div class='row'><div><h2>SELAMAT!<br>SEKARANG KAMU SUDAH<br>TAHU NAMA-NAMA PULAU<br>TERSEBAR DI INDONESIA</h2></div></div><div class='row align-center'><div class='col col-10'><img src='img/start.png' width='110px'><img src='img/start.png' width='110px'><img src='img/start.png' width='110px'><img src='img/start.png' width='110px'></div></div>");
	                 $('.popup').fadeIn('slow');
	              }else if(data.benar == 3)
	              {
	              	  $('#message').html("<br><div class='row'><div><h2>MAAF!<br>KAMU BELUM MENJAWAB SEMUA DENGAN BENAR, <br>SILAHKAN COBA LAGI</h2></div></div><div class='row align-center'><div class='col col-10'><img src='img/start.png' width='110px'><img src='img/start.png' width='110px'><img src='img/start.png' width='110px'><img src='img/start_silver.png' width='110px'></div></div>");
	                 $('.popup').fadeIn('slow');
				  }else if(data.benar = 2)
				  {
				  	 $('#message').html("<br><div class='row'><div><h2>MAAF!<br>KAMU BELUM MENJAWAB SEMUA DENGAN BENAR, <br>SILAHKAN COBA LAGI</h2></div></div><div class='row align-center'><div class='col col-10'><img src='img/start.png' width='110px'><img src='img/start.png' width='110px'><img src='img/start_silver.png' width='110px'><img src='img/start_silver.png' width='110px'></div></div>");
	                 $('.popup').fadeIn('slow');

				  }else if(data.benar = 1)
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
		// tombol slide untuk kaca pembesar
		$(".chkZoom").click(function(){
			if($(this).prop("checked")==true){
				$perbesar=$("#map-img").magnify();
				$("#map-img").mapster('unbind');
			}
			else if($(this).prop("checked")==false){
				$perbesar.destroy();
				$("#map-img").mapster();
			}
		});
		// tombol kaca pembesar
		$("#lup").click(function(){
			$(".img-lup").fadeToggle();
		});
		$("#zoomOff").click(function(){
			$perbesar=$("#map-img").magnify();
			$("#map-img").mapster('unbind');
		});
		$("#zoomOn").click(function(){
			$perbesar.destroy();
			$("#map-img").mapster();
		});
		
	</script>
</body>
</html>