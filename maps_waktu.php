<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PETA PEMBAGIAN WAKTU</title>
	<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=0">

    <!-- Kube CSS -->
    <link rel="stylesheet" href="css/kube.css">
    <link rel="stylesheet" href="css/magnify.css">
    <link rel="stylesheet" href="css/custocheck.css">
    <link rel="stylesheet" href="css/medajar.css">
    <link rel="icon" 
      type="image/ico" 
      href="favicon.ico">

    <script src="js/jquery.js"></script>
    <script src="js/jquery.magnify.js"></script>
    <script src="js/jquery.imagemapster.min.js"></script>
    <script src="js/hitung.js"></script>
      <script type="text/javascript">
  	$(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");
		
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
  $('.bg,.close').click(function(e){
   e.preventDefault();
   $('.popup-pembagian-waktu').fadeOut('slow');
  });
	
	});
	</script>
	<style>	
		#head{
		 	/*white-space: nowrap; */
			background: #960 url("img/bagi_waktu/header_bagi_waktu.png") no-repeat;
			background-size: contain;
			position: relative;
			/*z-index: 0;*/
			height: 110px;
		}
	</style>
</head>
<?php
// if(isset($_GET['pembagian_waktu']) && $_GET['pembagian_waktu']=='on' )
// {
// 	echo "<script> $('.popup-pembagian-waktu').fadeIn();</script>";
// }
?>
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
		<button class="button round kontrolAudio" onclick="jeda()">▌▌</button>
		<button class="button round kontrolAudio" style="display: none" onclick="main()">►</button>
		
		<audio id="backsound" autoplay loop>
		  	<source src="snd/backsound_2.ogg" type="audio/ogg">
			Your browser does not support the audio element.
		</audio>
		<div class="row">
			<div class="col col-12">

	<!-- header -->
				<div id="head" class="hide-sm">
					<div class="row between">
					
						<a href="index.html" id="back"><img id="back-img" src="img/maps/kembali.png" alt=""></a>
						<p id="kontrolKanan" class="w20 row between">
							<a href="#" style="display: inline-block" id="lup">
								<img id="zoomOff" class="img-lup" src="img/maps/zoom_1.png" alt="">
								<img id="zoomOn" class="img-lup" style="display: none" src="img/maps/zoomO_1.png" alt="">
							</a>
							<a id="kalk" href="#" style="display: inline-block" onclick="$.modalwindow({target:'#mod_kalk'});"><img id="kalk-img" id="help-img" src="img/bagi_waktu/kalk.png" alt=""></a>
							<a href="#" id="help" style="display: inline-block" onclick="$.modalwindow({ target:'#mod_help'});"><img id="help-img" src="img/maps/tanya.png" alt=""></a>
						</p>
					</div>
				</div>
				<div class="clear-fix"></div>
	<!-- header selesai -->

				<!-- gambar peta -->
				<div id="content">
				<div id="map-peta">
					<img id="map-img" src="img/bagi_waktu/bagi_waktu_mini.png" data-magnify-src="img/bagi_waktu/bagi_waktu.png" alt="" usemap="#petaInd">
				</div>

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

						<map id="petaIndWIB" name="petaIndWIB">

						<?php
							include 'koneksi.php';
							$result = mysqli_query($koneksi,"SELECT coords,nama_prov,id_prov FROM provinsi WHERE wilwak='WIB'");
							while ($rs=mysqli_fetch_array($result)) {
								echo "<area shape='poly' coords='$rs[coords]' href='#'  title='$rs[nama_prov]'  onclick='gembus(\"$rs[id_prov]\")'  class='popup-show' >";
							}
						?>
						</map>
						<map id="petaIndWITA" name="petaIndWITA">

						<?php
							include 'koneksi.php';
							$result = mysqli_query($koneksi,"SELECT coords,nama_prov,id_prov FROM provinsi WHERE wilwak='WITA'");
							while ($rs=mysqli_fetch_array($result)) {
								echo "<area shape='poly' coords='$rs[coords]' href='#'  title='$rs[nama_prov]'  onclick='gembus(\"$rs[id_prov]\")'  class='popup-show' >";
							}
						?>
						</map>
						<map id="petaIndWIT" name="petaIndWIT">

						<?php
							include 'koneksi.php';
							$result = mysqli_query($koneksi,"SELECT coords,nama_prov,id_prov FROM provinsi WHERE wilwak='WIT'");
							while ($rs=mysqli_fetch_array($result)) {
								echo "<area shape='poly' coords='$rs[coords]' href='#'  title='$rs[nama_prov]'  onclick='gembus(\"$rs[id_prov]\")'  class='popup-show' >";
							}
						?>
						</map>
	<!-- pemanggilan area selesai -->

	<!-- Modal Kalk -->
		<div id="mod_kalk" class="modal-box hide">
		    <div class="modal">
		        <span class="close"></span>
		        <div class="modal-header">Kalkulator Waktu</div>
		        <div class="text-center offset-2">
			        <div class="row">
			        	<div class="col col-4">
			        		Kota Asal
			        	</div>
			        	<div class="col col-6">
			        		Waktu
			        	</div>
			        </div>
			        <div class="row">
			        	<div class="col col-4">
			        		<select name="kota-A" id="kota-A" onchange="hitungJam()">
								<optgroup label="WIB">
								<?php
									$sql="select * from bagi_waktu where wilayah_waktu='WIB'";
									$hasil=mysqli_query($koneksi,$sql)
										or die("gagal akses");
									while ($baris=mysqli_fetch_array($hasil)) {
										echo "<option value='".$baris['wilayah_waktu']."'>".$baris['kota']."</option>";
									}
								?>
								</optgroup>
								<optgroup label="WITA">
								<?php
									$sql="select * from bagi_waktu where wilayah_waktu='WITA'";
									$hasil=mysqli_query($koneksi,$sql)
										or die("gagal akses");
									while ($baris=mysqli_fetch_array($hasil)) {
										echo "<option value='".$baris['wilayah_waktu']."'>".$baris['kota']."</option>";
									}
								?>
								</optgroup>
								<optgroup label="WIT">
								<?php
									$sql="select * from bagi_waktu where wilayah_waktu='WIT'";
									$hasil=mysqli_query($koneksi,$sql)
										or die("gagal akses");
									while ($baris=mysqli_fetch_array($hasil)) {
										echo "<option value='".$baris['wilayah_waktu']."'>".$baris['kota']."</option>";
									}
								?>
								</optgroup>
							</select>
			        	</div>
			        	<div class="col col-6">
			        		<input name="jam-A" id="jam-A" type="number" max="23" min="0" placeholder="Jam" onchange="hitungJam()" onkeyup="hitungJam()" class="w30" style="display: inline">
							<input name="menit-A" id="menit-A" type="number" max="59" min="0" placeholder="Menit" onkeyup="salinMenit()" onchange="salinMenit()" class="w30" style="display: inline">
			        	</div>
			        </div>
			        <div class="row">
			        	<div class="col col-4">
			        		Kota Tujuan
			        	</div>
			        	<div class="col col-6">
			        		Waktu
			        	</div>
			        </div>
			        <div class="row">
			        	<div class="col col-4">
			        		<select name="kota-B" id="kota-B" onchange="hitungJam()">
								<optgroup label="WIB">
								<?php
									$sql="select * from bagi_waktu where wilayah_waktu='WIB'";
									$hasil=mysqli_query($koneksi,$sql)
										or die("gagal akses");
									while ($baris=mysqli_fetch_array($hasil)) {
										echo "<option value='".$baris['wilayah_waktu']."'>".$baris['kota']."</option>";
									}
								?>
								</optgroup>
								<optgroup label="WITA">
								<?php
									$sql="select * from bagi_waktu where wilayah_waktu='WITA'";
									$hasil=mysqli_query($koneksi,$sql)
										or die("gagal akses");
									while ($baris=mysqli_fetch_array($hasil)) {
										echo "<option value='".$baris['wilayah_waktu']."'>".$baris['kota']."</option>";
									}
								?>
								</optgroup>
								<optgroup label="WIT">
								<?php
									$sql="select * from bagi_waktu where wilayah_waktu='WIT'";
									$hasil=mysqli_query($koneksi,$sql)
										or die("gagal akses");
									while ($baris=mysqli_fetch_array($hasil)) {
										echo "<option value='".$baris['wilayah_waktu']."'>".$baris['kota']."</option>";
									}
								?>
								</optgroup>
							</select>
			        	</div>
			        	<div class="col col-6">
			        		<input name="jam-B" id="jam-B" type="number" max="23" min="0" placeholder="Jam" disabled="disabled" class="w30" style="display: inline">
							<input name="menit-B" id="menit-B" type="number" max="59" min="0" placeholder="Menit" disabled="disabled" class="w30" style="display: inline">
			        	</div>
			        </div>
			        <div class="text-center" style="height: 5%">&nbsp;</div>
			    </div>
		    </div>
		</div>

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
				<!-- Modal Help -->
				<div id="mod_help" class="modal-box hide">
				    <div class="modal">
				        <span class="close"></span>
				        <div class="modal-header">Bantuan</div>
				        <div>
				        	<?php
				        		include "mod_help_maps_waktu.html"
				        	?>
				        </div>
				    </div>
				</div>
				<!-- modal help selesai -->
				
				<div class="row pilih-peta" style="position:absolute; z-index:5; bottom: 0">
					<button class="button round" id="pilih-peta-lain">Pilih Wilayah Waktu<span class="caret right"></span><span class="caret left" style="display: none"></span></button>
					<!-- <button class="button large" id="pembagian-waktu">Peta pembagian waktu</button> -->
					<div id="pilih-peta-tombol" style="display: none">
						<button class="button round large" id="wib">Waktu Indonesia Barat</button>
						<button  class="button round large" id="wita">Waktu Indonesia Tengah</button>
						<button class="button round large" id="wit">Waktu Indonesia Timur</button>
						<button class="button round large" id="peta-default">Peta Pembagian Waktu<span class="smaller">&nbsp;(Default)</span></button>
					</div>
				</div>
			</div>
		</div>

	</div>

	
    <script src="js/kube.js"></script>


	<script>
		$(document).ready(function(){
			$("#head").animation("slideInLeft");
			$("#map-peta").animation("zoomIn");
			$("#pilih-peta-lain").animation("slideInLeft");
		});
		$("#pilih-peta-lain").click(function(){
			$("#pilih-peta-tombol").toggle("slide");
			$(".caret").toggle();
		});
		// pemanggilan popup dan data
		// var wib='on';
		// var wita ='on';
		// var wit ='on';
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
		//wib
		$("#wib").click(function(){
	      	$('#map-peta').fadeOut('fast');
			// if(wib=='on')
			// {	
				$('#map-peta').empty();
	            $("#map-peta").append("<img id=\"map-img\" src=\"img/bagi_waktu/wib_mini.png\" data-magnify-src=\"img/bagi_waktu/wib.png\" alt=\"\" usemap=\"#petaIndWIB\">");
	      		$('#map-peta').fadeIn('slow');
				// wib='of';
				$('html, body').animate({scrollTop:0},'slow');
				// $('#wib').attr('style','background-color:#039');
			$("#map-img").mapster({
				fillColor: '2c3e50',
				fillOpacity: 0.5,
				stroke: true,
				strokeColor: '95a5a6',
				strokeOpacity: 0.7,
				strokeWidth: 3
			});
		});	
			// }else
			// {
		$("#peta-default").click(function(){
	      	$('#map-peta').fadeOut('fast');
		
				$('#map-peta').empty();
	            $("#map-peta").append("<img id=\"map-img\" src=\"img/bagi_waktu/bagi_waktu_mini.png\" data-magnify-src=\"img/bagi_waktu/bagi_waktu.png\" alt=\"\" usemap=\"#petaInd\">");
	      		$('#map-peta').fadeIn('slow');
				// wib='on';
				$('html, body').animate({scrollTop:0},'slow');
				// $('#wib').attr('style','');

			// }
			$("#map-img").mapster({
				fillColor: '2c3e50',
				fillOpacity: 0.5,
				stroke: true,
				strokeColor: '95a5a6',
				strokeOpacity: 0.7,
				strokeWidth: 3
			});
		});
	//end wib
	//wita
		$("#wita").click(function(){
	      	$('#map-peta').fadeOut('fast');
			// if(wita=='on')
			// {	
				$('#map-peta').empty();
	            $("#map-peta").append("<img id=\"map-img\" src=\"img/bagi_waktu/wita_mini.png\" data-magnify-src=\"img/bagi_waktu/wita.png\" alt=\"\" usemap=\"#petaIndWITA\">");
	      		$('#map-peta').fadeIn('slow');
				// wita='of';
				$('html, body').animate({scrollTop:0},'slow');
				// $('#wita').attr('style','background-color:#039');
				
			// }else
			// {
			// 	$('#map-peta').empty();
	  //           $("#map-peta").append("<img id=\"map-img\" src=\"img/bagi_waktu/bagi_waktu_mini.png\" data-magnify-src=\"img/bagi_waktu/bagi_waktu.png\" alt=\"\" usemap=\"#petaInd\">");
	  //     		$('#map-peta').fadeIn('slow');
			// 	wita='on';
			// 	$('html, body').animate({scrollTop:0},'slow');
			// 	$('#wita').attr('style','');

			// }
			$("#map-img").mapster({
				fillColor: '2c3e50',
				fillOpacity: 0.5,
				stroke: true,
				strokeColor: '95a5a6',
				strokeOpacity: 0.7,
				strokeWidth: 3
			});
		});

		//end wita
		//wit
		$("#wit").click(function(){
	      	$('#map-peta').fadeOut('fast');
			// if(wit=='on')
			// {	
				$('#map-peta').empty();
	            $("#map-peta").append("<img id=\"map-img\" src=\"img/bagi_waktu/wit_mini.png\" data-magnify-src=\"img/bagi_waktu/wit.png\" alt=\"\" usemap=\"#petaIndWIT\">");
	      		$('#map-peta').fadeIn('slow');
				// wit='of';
				$('html, body').animate({scrollTop:0},'slow');
				// $('#wit').attr('style','background-color:#039');
				
			// }else
			// {
			// 	$('#map-peta').empty();
	  //           $("#map-peta").append("<img id=\"map-img\" src=\"img/bagi_waktu/bagi_waktu_mini.png\" data-magnify-src=\"img/bagi_waktu/bagi_waktu.png\" alt=\"\" usemap=\"#petaInd\">");
	  //     		$('#map-peta').fadeIn('slow');
			// 	wit='on';
			// 	$('html, body').animate({scrollTop:0},'slow');
			// 	$('#wit').attr('style','');

			// }
			$("#map-img").mapster({
				fillColor: '2c3e50',
				fillOpacity: 0.5,
				stroke: true,
				strokeColor: '95a5a6',
				strokeOpacity: 0.7,
				strokeWidth: 3
			});
		});

		//end wit
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
		// efek menu zoomIN
		$("#zoomOff").hover(
			function(){
			    $("#zoomOff").attr("src", "img/maps/zoom_2.png");
			},
			function(){
			    $("#zoomOff").attr("src", "img/maps/zoom_1.png");
			}
		);
		// efek menu zoomOUT
		$("#zoomOn").hover(
			function(){
			    $("#zoomOn").attr("src", "img/maps/zoomO_2.png");
			},
			function(){
			    $("#zoomOn").attr("src", "img/maps/zoomO_1.png");
			}
		);
		// efek menu kalkulator
		$("#kalk").hover(
			function(){
			    $("#kalk-img").attr("src", "img/bagi_waktu/kalk_hover.png");
			},
			function(){
			    $("#kalk-img").attr("src", "img/bagi_waktu/kalk.png");
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
		$("a,button,area").click(
			function(){
				new Audio("snd/Click.ogg").play(); 
			}
		);
		$("a,button,area").mouseover(
			function(){
				new Audio("snd/hover.ogg").play(); 
			}
		);
		function jeda(){
			document.getElementById("backsound").pause();
		}
		function main(){
			document.getElementById("backsound").play();
		}
		$(".kontrolAudio").click(function()
			{
				$(".kontrolAudio").fadeToggle();
			}
		);				
	</script>
</body>
</html>