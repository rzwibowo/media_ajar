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
    <!-- <script src="js/jquery.maphilight.min.js"></script> -->
<!--     <script src="js/jquery.zoom.js"></script> -->
	
	<!-- script loading screen -->
    <script>
    $(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");;
	});
	// $("document").ready(function()
	// 	{	
	// 		$("#map-img").maphilight(
	// 			{
	// 				fill: true,
	// 				fillColor: '333',
	// 				fillOpacity: 0.5
	// 			}
	// 		);
	// 	}
	// );
	</script>
</head>
<body id="map">
	
	<!-- loading screen -->
	<div class="se-pre-con"></div>

	<!-- menu layar kecil -->
	<div id="head-sm" class="show-sm w100">
		<a id="sm-toggle" href="#">
		<!-- <a id="sm-toggle" href="#" data-component="toggleme" data-target="#menu-sm"> -->
			<img class="tbl-menu" src="img/m_1.png" alt="">
			<img class="tbl-menu" style="display: none;" src="img/m_2.png" alt="">
		</a>
	</div>

	<div id="menu-sm" class="text-center">
	    <ul>
	        <li><a href="#">Bantuan</a></li>
	        <li><a href="index.html">Kembali ke Depan</a></li>
	        <li style="vertical-align:middle">
	        	<p style="display: inline-block; margin-bottom: 0px; color: #fff">Kaca Pembesar</p>
		        <div class="custom-chk">
					<!-- <button id="tblzoom+" class="button round small">ZOOM +</button> -->
					<input type="checkbox" value="1" id="chkInput" class="chkZoom">
					<label for="chkInput"></label>
				</div>
			</li>
	    </ul>
	</div>

	<div id="main">
		<div class="row">
			<div class="col col-12">

				<!-- menu atas -->
				<div id="head" class="hide-sm">
					<div class="row between">
						<!-- <img id="head-map-img" src="img/maps/header.png" alt=""> -->
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

				<!-- gambar peta -->
				<div id="content">
					<img id="map-img" src="img/maps/map-mini_bener.png" data-magnify-src="img/maps/map.png" alt="" usemap="#petaInd">
						<map id="petaInd" name="petaInd">

						<?php
						include 'koneksi.php';
						$result = mysqli_query($koneksi,"SELECT coords,nama_prov,id_prov FROM provinsi");
						while ($rs=mysqli_fetch_array($result)) {
							echo "<area shape='poly' coords='$rs[coords]'  title='$rs[nama_prov]'  onclick='gembus(\"$rs[id_prov]\")'  data-component='modal' data-target='#my-modal' href='#' >";
						}


						?>
						</map>


<div id="my-modal" class="modal-box hide">
    <div class="modal">
        <span class="close"></span>
        <div class="modal-header" id="header-model"></div>
        <div class="modal-body">...</div>
    </div>
</div>

	<!-- 				<a href="maps.html">

<img src="img/maps/map.png" ismap id="klik" >
</a> -->
				</div>
				<!-- <div class="clear-fix"></div> -->
				<!-- <div class="custom-chk hide-sm">
					<input type="checkbox" class="chkZoom" value="1" id="chkInputBig">
					<label for="chkInputBig"></label>
				</div> -->
				<!-- <button id="tblzoom+" class="button round small">ZOOM +</button>
				<button id="zoomIn" class="button round">+</button>
				<button id="zoomOff" class="button round">-</button> -->
			</div>
		</div>

	</div>

	<!-- Experimen!!! -->

	<!-- Kube JS + jQuery are used for some functionality, but are not required for the basic setup -->
    <!-- <script src="js/jquery.js"></script> -->
    <script src="js/kube.js"></script>

	<script>
		// experimen
		function gembus(id){
			 $.post("ajax_getdata.php",
       		 {
          		id: id,
         		
       		 },
        	function(data,status){
        		
       			$("#header-model").html("<h1>"+data.nama+"</h1>");
        	});			
		}
		// ------

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
		$("#sm-toggle").click(
			function(){
				$(".tbl-menu").fadeToggle();
				$("#menu-sm").slideToggle();
			}
		);

		// tombol slide untuk kaca pembesar
		$(".chkZoom").click(function(){
			if($(this).prop("checked")==true){
				$perbesar=$("#map-img").magnify();
			}
			else if($(this).prop("checked")==false){
				$perbesar.destroy();
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
		// $("#zoomIn").click(function(){
		// 	$("#content").zoom();
		// });
		// $("#zoomOff").click(function(){
		// 	$("#content").trigger("zoom.destroy");
		// });
		// $("#tblzoom+").click(
		// 	function(){
		// 		$("#map-img").width("200%");
		// 		$("#map-img").height("200%");
		// 	}
		// );
	</script>
</body>
</html>