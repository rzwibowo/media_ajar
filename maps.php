<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PETA INDONESIA</title>
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
      <script type="text/javascript">
  	$(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");
		
	});

   $(function(){
   	// <?php
   	// 	if(isset($_GET['pembagian_waktu']) && $_GET['pembagian_waktu']=="on"){
    //        echo "$('.popup-pembagian-waktu').fadeIn()";
   	// 	}
        
   	// ?>
 	
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
						<p id="kontrolKanan" class="w15 row between">
							<a href="#" style="display: inline-block" id="lup">
								<img id="zoomOff" class="img-lup" src="img/maps/zoom_1.png" alt="">
								<img id="zoomOn" class="img-lup" style="display: none" src="img/maps/zoomO_1.png" alt="">
							</a>
							<a href="#" id="help" style="display: inline-block" onclick="$.modalwindow({ target:'#mod_help'});"><img id="help-img" src="img/maps/tanya.png" alt=""></a>
						</p>
					</div>
				</div>
				<div class="clear-fix"></div>
	<!-- header selesai -->

				<!-- gambar peta -->
				<div id="content">
				<div id="map-peta">
					<img id="map-img" src="img/maps/Peta-4-mini_bener.png" data-magnify-src="img/maps/Peta-4-mini.png" alt="" usemap="#petaInd">
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

	<!-- popup pembagian waktu -->
					<!-- <div class="popup-pembagian-waktu">
						<div class="bg"></div>
							<div class="content-pembagian-waktu">
							<div class="close"></div>
								<div class="content-text">
									<div class="row auto" style="text-align: center;">

									   	<div class="col" style="border: 0px solid black;">

									       <div class="col" style="border: 0px solid black;" id="peren-wib">
										   	<div class="wib-wita-wit" id="wib" onclick="GetDataPembagianWaktu('wib','Pembagian Waktu Indonesia Bagian Barat')">
										    	<h1>WIB</h1>
										        </div>
									    	</div>

									    	<div style="text-align: right;" id="button-back-wib"><button style=" background-color: #ff3333" onclick="GetDataPembagianWaktu('wib','Pembagian Waktu Indonesia Bagian Barat')">Kembali</button></div>
									    </div>

									    <div class="col" style="border: 0px solid black;">

									       <div class="col" style="border: 0px solid black;" id="peren-wita">
										   	<div class="wib-wita-wit" id="wita" onclick="GetDataPembagianWaktu('wita','Pembagian Waktu Indonesia Bagian Tengah')">
										    	<h1>WITA</h1>
										        </div>
									    	</div>

									    	<div style="text-align: right;" id="button-back-wita"><button style=" background-color: #ff3333" onclick="GetDataPembagianWaktu('wita','Pembagian Waktu Indonesia Bagian Tengah')">Kembali</button></div>
									    </div>

									    <div class="col" style="border: 0px solid black;">
									    	<div class="col" style="border: 0px solid black;" id="peren-wit">
										   		<div class="wib-wita-wit" id="wit"  onclick="GetDataPembagianWaktu('wit','Pembagian Waktu Indonesia Bagian Timur')">
										    	<h1>WIT</h1>
										        </div>
									    	</div>
									    	<div style="text-align: right;" id="button-back-wit"><button style=" background-color: #ff3333"  onclick="GetDataPembagianWaktu('wit','Pembagian Waktu Indonesia Bagian Timur')">Kembali</button></div>
									    </div>
									</div>							
								</div>
							</div>


				</div> -->
<!-- popup pembagian waktu-->
				<!-- Modal Help -->
				<div id="mod_help" class="modal-box hide">
				    <div class="modal">
				        <span class="close"></span>
				        <div class="modal-header">Bantuan</div>
				        <div>
				        	<?php
				        		include "mod_help_maps.html"
				        	?>
				        </div>
				    </div>
				</div>
				<!-- modal help selesai -->

				<!-- modal info sumber  -->
				<div id="mod_info" class="modal-box hide">
				    <div class="modal">
				        <span class="close"></span>
				        <div class="modal-header">Sumber Data</div>
				        <div style="padding: 20px; word-break: break-all;">
				        	<a href="https://id.m.wikipedia.org/wiki/Daftar_provinsi_di_Indonesia">https://id.m.wikipedia.org/wiki/Daftar_provinsi_di_Indonesia</a> <br>
				        	<a href="https://id.m.wikipedia.org/wiki/Daftar_bahasa_di_Indonesia_menurut_BPS_2010">https://id.m.wikipedia.org/wiki/Daftar_bahasa_di_Indonesia_menurut_BPS_2010</a> <br>
				        	<a href="https://id.m.wikipedia.org/wiki/Daftar_suku_bangsa_di_Indonesia_menurut_provinsi">https://id.m.wikipedia.org/wiki/Daftar_suku_bangsa_di_Indonesia_menurut_provinsi</a> <br>
				        	<a href="http://www.pelajaran.co.id/2016/21/nama-rumah-adat-pakaiantarian-adat-dan-senjata-tradisional-di-provinsi-indonesia.html#provinsi-kalimantan-timur">http://www.pelajaran.co.id/2016/21/nama-rumah-adat-pakaiantarian-adat-dan-senjata-tradisional-di-provinsi-indonesia.html#provinsi-kalimantan-timur</a>
				        </div>
				    </div>
				</div>
				<!-- modal info sumber selesai -->

				<div class="row pilih-peta" style="position:absolute; z-index:5; bottom: 0">
					<button class="button round" onclick="$.modalwindow({ target:'#mod_info'});">Info</button>
					<button class="button round" id="pilih-peta-lain">Lihat Peta Lain<span class="caret right"></span><span class="caret left" style="display: none"></span></button>
					<!-- <button class="button large" id="pembagian-waktu">Peta pembagian waktu</button> -->
					<div id="pilih-peta-tombol" style="display: none">
						<button class="button round large" id="batas-wilayah">Peta batas wilayah</button>
						<button class="button round large" id="latak-indonesia">Peta letak Indonesia</button>
						<button class="button round large" id="peta-default">Peta Indonesia<span class="smaller">&nbsp;(Default)</span></button>
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
		// $("#button-back-wib").hide();
		// $("#button-back-wita").hide();
		// $("#button-back-wit").hide();
		// // pemanggilan popup dan data
		// var batas_wilayah='on';
		// var letak_indonesia ='on';
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
		//batas-wilayah
		$("#batas-wilayah").click(function(){
	      	$('#map-peta').fadeOut('fast');
			// if(batas_wilayah=='on')
			// {	
				$('#map-peta').empty();
	            $("#map-peta").append("<img id=\"map-img\" src=\"img/maps/batas_wilayah_mini.png\" data-magnify-src=\"img/maps/batas_wilayah.png\" alt=\"\">");
	      		$('#map-peta').fadeIn('slow');
				// batas_wilayah='of';
				$('html, body').animate({scrollTop:0},'slow');
				// $('#batas-wilayah').attr('style','background-color:#039');
		
			// }else
			// {
				// $("#map-img").mapster({
				// 	fillColor: '2c3e50',
				// 	fillOpacity: 0.5,
				// 	stroke: true,
				// 	strokeColor: '95a5a6',
				// 	strokeOpacity: 0.7,
				// 	strokeWidth: 3
				// });
		});
		$("#peta-default").click(function(){
	      	$('#map-peta').fadeOut('fast');
				$('#map-peta').empty();
	            $("#map-peta").append("<img id=\"map-img\" src=\"img/maps/Peta-4-mini_bener.png\" data-magnify-src=\"img/maps/Peta-4-mini.png\" alt=\"\" usemap=\"#petaInd\">");
	      		$('#map-peta').fadeIn('slow');
				// batas_wilayah='on';
				$('html, body').animate({scrollTop:0},'slow');
				// $('#batas-wilayah').attr('style','');

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
	//end batas wilayah
	//letak indonesia
		$("#latak-indonesia").click(function(){
	      	$('#map-peta').fadeOut('fast');
			// if(letak_indonesia=='on')
			// {	
				$('#map-peta').empty();
	            $("#map-peta").append("<img id=\"map-img\" src=\"img/maps/letak_indo_mini.png\" data-magnify-src=\"img/maps/letak_indo.png\" alt=\"\">");
	      		$('#map-peta').fadeIn('slow');
				letak_indonesia='of';
				$('html, body').animate({scrollTop:0},'slow');
				// $('#latak-indonesia').attr('style','background-color:#039');
				
			// }else
			// {
			// 	$('#map-peta').empty();
	  //           $("#map-peta").append("<img id=\"map-img\" src=\"img/maps/Peta-4-mini_bener.png\" data-magnify-src=\"img/maps/Peta-4-mini.png\" alt=\"\" usemap=\"#petaInd\">");
	  //     		$('#map-peta').fadeIn('slow');
			// 	letak_indonesia='on';
			// 	$('html, body').animate({scrollTop:0},'slow');
			// 	$('#latak-indonesia').attr('style','');

			// }
			// 	$("#map-img").mapster({
			// 		fillColor: '2c3e50',
			// 		fillOpacity: 0.5,
			// 		stroke: true,
			// 		strokeColor: '95a5a6',
			// 		strokeOpacity: 0.7,
			// 		strokeWidth: 3
			// 	});
		});

		//end letak indo
		// highlight maps
		// $('#pembagian-waktu').click(function()
		// {

		// 	$('.popup-pembagian-waktu').fadeIn();
		// 	$('html, body').animate({scrollTop:0},'slow');
		// });
		
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



		// function getPembagianKabupaten(id,div)
		// {
			
		// 	 $("#button-back-"+div+"").show();
		// 	  $.post("AjaxGetKabupatan.php",
  //      		 {
  //         		id_pembagian_waktu: id,
         		
  //      		 },
  //       	function(data,status){
  //       		$('#'+div+'').empty();
  //       		if(div=='wib'){
		// 	        $('#wib').append('<h3>Pembagian Waktu Indonesia Bagian Barat</h3>');
  //       		}else if(div=='wita')
  //       		{
  //       			 $('#wita').append('<h3>Pembagian Waktu Indonesia Bagian Tengah</h3>');
  //       		}else if(div=='wit')
  //       		{
  //       			 $('#wit').append('<h3>Pembagian Waktu Indonesia Bagian Timur</h3>');
  //       		}
  //       		 $('#'+div+'').append('<ol style=\'text-align:left\'></ol>');
	 //        	 $.each(data, function(index,val) {
	 //        	 	 $('#'+div+' > ol').append('<li>'+val.nama_daerah+'</li>');
                       	
  //     			 });
      			
  //       	});		


		// }

  // function GetDataPropinsi(waktu,div)
  // {

  // 	 $.post("ajaxGetDataWIPropinsi.php",
  //      		 {
  //         		bagian_waktu: waktu,
         		
  //      		 },
  //       	function(data,val){
        		
  //       		 $.each(data, function(index,val) {
  //                      	 $('#'+div+'').append('<div onclick="getPembagianKabupaten('+val.id+',\''+div+'\')" style=\"background-color:#ff0066;width:150px;margin:0 auto; cursor: pointer;\">'+val.propinsi+'</div><div style=\" margin-bottom:5px;\"></div>');
  //     			 });
  //       	});

  // }
		// //// wib

  //        function GetDataPembagianWaktu(div,title)
 	// 	 	{

  // 		 $('#'+div+'').remove();
		// 	 $('#peren-'+div+'').append("<div class='data-propinsi-wib-wita-wit'id='"+div+"'></div>");
		// 	 $('#'+div+'').append('<h3>'+title+'</h3>');
		// 	 GetDataPropinsi(div,div);
		// 	 $("#button-back-"+div+"").hide();

 	//  	}
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