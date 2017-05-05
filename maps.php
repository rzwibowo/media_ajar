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
		$(".se-pre-con").fadeOut("slow");;
	});
   $(function(){
 
	// show popup
	$('.popup-show').click(function(e) {
	
	//    e.preventDefault();
	$('.popup').fadeIn();
		
	});
	
	$('.bg,.close1').click(function(e){
	//    e.preventDefault();
	$('.popup').fadeOut('slow');
	});
	$('.close1').hover(function(){
			$("#close").attr("src", "pop_up_2-x-hover.png");
		},function(){
			$("#close").attr("src", "pop_up_2-x.png");
		});
		
	
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
	width:900px; 
	height: 500px;
	margin: 0 auto;
	padding: 10px 20px;
	background-image: url("pop_up_2.png");
	background-repeat: no-repeat;
	background-size: 100% 100%;
	
	}
	.content-text{
		
	
	}
	.close1{
	display: inline-block;
	padding: 7px 15px;
	margin-left:0px;
	cursor: pointer;
	color: #fff;
	
	}
	#info_rumah{
		border:2px solid #f2b90d;
		border-radius: 8px;
		overflow: hidden;
	}
	#info_nama_provinsi{
		text-align: center;
		margin-top: 12px;
	}
	#info_nama_provinsi h3{
		color: white;
	}
	#info_lain h4,table{
		color: #f2f20d;
	}


	table, th, td {
		padding: 0px 0px;
	}
	table{
		/*border: 1px solid black;*/
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
					<img id="map-img" src="img/maps/Peta-4-mini_bener.png" data-magnify-src="img/maps/Peta-4-mini.png" alt="" usemap="#petaInd">

	<!-- pemanggilan koordinat area dari database -->

						<map id="petaInd" name="petaInd">

						<?php
							include 'koneksi.php';
							$result = mysqli_query($koneksi,"SELECT coords,nama_prov,id_prov FROM provinsi");
							while ($rs=mysqli_fetch_array($result)) {
								echo "<area shape='poly' coords='$rs[coords]' href='#'  title='$rs[nama_prov]'  onclick='gembus(\"$rs[id_prov]\")'  class='popup-show' >";
							}
						?>
						</map>

	<!-- pemanggilan area selesai -->

	<!-- popup info provinsi -->
					<div class="popup">
						<div class="bg"></div>
							<div class="content">
								<div class="content-text">
									<div class="row">
										<div class="col col-10" id="info_nama_provinsi">
										</div>
										<div class="col col-2" >
											<div class="close1"><img id="close" src="pop_up_2-x.png"></div>
										</div>
									</div>
									<div class="row info" >
										<div class="col col-4" id="info_rumah">
												
										</div>
										<div class="col col-4" id="info_baju">
											
										</div>
										<div class="col col-4" id="info_lain"  >
												<h4>Info Provinsi</h4>

												<table>
													
												</table>
										</div>
									</div>
								</div>
						
						</div>
					</div>
 	<!-- popup info provinsi selesai -->




				</div>
				
				<div class="row pilih-peta between">
					<a href="" class="button large">Peta pembagian waktu</a>
					<a href="" class="button large">Peta batas wilayah</a>
					<a href="" class="button large">Peta letak Indonesia</a>
				</div>
			</div>
		</div>

	</div>

	
    <script src="js/kube.js"></script>


	<script>
		// pemanggilan popup dan data
		function gembus(id){
			 $.post("ajax_getdata.php",
       		 {
          		id: id,
         		
       		 },
        	function(data,status){
        		$("#info_rumah").html("<img src='img/rumah/"+data.gbr_rumah_adat+"'>");
       			$("#info_nama_provinsi").html("<h3>"+data.nama+"</h3>");
       			$("#info_baju").html("<img src='img/baju/"+data.gbr_bju_adat+"'>");
       			$("tr").remove();
       			$("table").append("<tr><td width='46%'>Nama Ibu Kota</td><td> : </td><td> "+data.ibukota+"</td></tr>");
       			$("table").append("<tr><td>Jumlah Penduduk</td><td> : </td><td> "+data.jml_penduduk+" juta</td></tr>");
       			$("table").append("<tr><td>Luas Wilayah</td><td> : </td><td>"+data.luas_wilayah+" km²</td></tr>");
       			$("table").append("<tr><td>Nama Rumah Adat</td><td> : </td><td> "+data.rumah_adat+"</td></tr>");
       			$("table").append("<tr><td>Nama Baju Adat</td><td> : </td><td>"+data.nama_baju_adat+"</td></tr>");
       			$("table").append("<tr><td>Nama Tarian Adat</td><td> : </td><td>"+data.tari_adat+"</td></tr>");
       			$("table").append("<tr><td>Bahasa Daerah</td><td> : </td><td>"+data.bhs_daerah+"</td></tr>");
       			$("table").append("<tr><td>Suku</td><td> : </td><td>"+data.suku+"</td></tr>");
        	});			
		}
		// ------

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