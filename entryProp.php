<?php
session_start();
//include "koneksi.php";
if (!isset($_SESSION["user"])) header("Location: login.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Entry Data Provinsi</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Kube CSS -->
    <link rel="stylesheet" href="css/kube.css">
<style type="text/css">
.inputfile {
    width: 0.1px;
    height: 0.1px;
    opacity: 0;
    overflow: hidden;
    position: absolute;
    z-index: -1;
    color: white;
}
.inputfile + label {
    font-size: 1.25em;
    font-weight: 700;
    color: white;
    background-color: #d3394c;
    padding: 10px;
    display: inline-block;
}
.inputfile:focus + label,
.inputfile + label:hover {
    background-color: #8f246b;
}
.inputfile + label {
    cursor: pointer; /* "hand" cursor */
}
.inputfile:focus + label {
    outline: 1px dotted #000;
    outline: -webkit-focus-ring-color auto 5px;
}




</style>
</head>
<body>
<?php
    include 'kepala.php';
?>
    <div id="main">
    	<div class="row align-center">
    		<div class="col-6">
    			<div class="head text-center">
    				<h1>Data Provinsi</h1>
    				<p>Masukkan data provinsi</p>
    			</div>
    			<form class="form" action="simpan_prov.php" method="POST" name="form-kirim" enctype="multipart/form-data">
    				<fieldset>
    					<div class="form-item">
    						<label for="nama_prov">Nama Provinsi</label>
    						<input type="text" name="nama_prov" class="w50" id="nama_prov">
                              <div id="message-nama_prov" style="margin-top: 5px;"></div>
    					</div>
    					<div class="form-item">
    						<label for="ibukota">Nama Ibukota</label>
    						<input type="text" name="ibukota" class="w50" id="ibukota">
                            <div id="message-ibukota" style="margin-top: 5px;"></div>
    					</div>
    					<div class="form-item">
    						<label for="jml_penduduk">Jumlah Penduduk</label>
    						<input type="number" name="jml_penduduk" class="w30" id="jml_penduduk">
                            <div id="message-jml_penduduk" style="margin-top: 5px;"></div>
    					</div>
    					<div class="form-item">
    						<label for="luas_wilayah">Luas Wilayah</label>
    						<div class="append w30">
    							<input type="number" name="luas_wilayah" id="luas_wilayah"><span>km²</span>
    						</div>
                            <div id="message-luas_wilayah" style="margin-top: 5px;"></div>
    					</div>
                        <div class="form-item">
                            <label for="rumah_adat">Nama Baju Adat</label>
                            <input type="text" name="baju_adat" class="w50" id="baju_adat">
                            <div id="message-baju_adat" style="margin-top: 5px;"></div>
                        </div>
    					<div class="form-item">
    						<label for="rumah_adat">Rumah Adat</label>
    						<input type="text" name="rumah_adat" class="w50" id="rumah_adat">
                            <div id="message-rumah_adat" style="margin-top: 5px;"></div>
    					</div>
    					<div class="form-item">
    						<label for="tari_adat">Tari Adat</label>
    						<input type="text" name="tari_adat" class="w50" id="tari_adat">
                            <div id="message-tari_adat" style="margin-top: 5px;"></div>
    					</div>
    					<div class="form-item">
    						<label for="bhs_daerah">Bahasa Daerah</label>
    						<input type="text" name="bhs_daerah" class="w50" id="bhs_daerah">
                            <div id="message-bhs_daerah" style="margin-top: 5px;"></div>
    					</div>
                           

    					<div class="form-item">
    						<label for="suku">Suku</label>
    						<input type="text" name="suku" class="w50" id="suku">
                            <div id="message-suku" style="margin-top: 5px;"></div>
    					</div>
                        <div class="form-item">
                            
                            <input type="file" name="gbr_rumah_adat" class="w50 inputfile1" id="gbr_rumah_adat" onchange="ValidasiInputFile(this,'message-gbr_rumah_adat')" >
                            <label for="gbr_baju_adat"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> Rumah Adat</label>
                            <div id="message-gbr_rumah_adat" style="margin-top: 5px;"></div>
                        </div>
                       <div class="form-item">
                            
                            <input type="file" name="gbr_baju_adat" class="w50 " id="gbr_baju_adat" onchange="ValidasiInputFile(this,'message-gbr_baju_adat')">
                            <label for="gbr_baju_adat"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> Baju Adat</label>
                            <div id="message-gbr_baju_adat" style="margin-top: 5px;"></div>
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
        var nama_prov;
        var ibukota;
        var jml_penduduk;
        var luas_wilayah;
        var rumah_adat;
        var tari_adat;
        var bhs_daerah;
        var suku;
        var gambar1;
        var gambar2;
        var Extensions = [".jpg", ".jpeg", ".bmp", ".gif", ".png"]; 
/*
 validasi nama propinsi , tidak bleh kosong
*/
        $("#nama_prov").blur(function(){
            nama_prov= $(this).val();
            if(nama_prov.length==0)
            {
              $("#message-nama_prov").show();
              $("#message-nama_prov").addClass("message error");
              $("#message-nama_prov").html("<span>Nama propinsi tidak boleh kosong!</span>");
            }else
            {
                $("#message-nama_prov").hide();
            } 
        });

/*
 validasi nama ibukota , tidak bleh kosong
*/
        $("#ibukota").blur(function(){
            ibukota= $(this).val();
            
            if(ibukota.length==0)
            {
              $("#message-ibukota").show();
              $("#message-ibukota").addClass("message error");
              $("#message-ibukota").html("<span>Nama ib ukota tidak boleh kosong!</span>");
            }else
            {
              $("#message-ibukota").hide();
            } 
        });
        

/*
 validasi jumlah penduduk , tidak bleh kosong dan tidak boleh 0
*/
        $("#jml_penduduk").blur(function(){
            jml_penduduk= $(this).val();
            var conrJml=parseInt(jml_penduduk);
            if(jml_penduduk.length==0)
            {
              $("#message-jml_penduduk").show();
              $("#message-jml_penduduk").addClass("message error");
              $("#message-jml_penduduk").html("<span>Jumlah penduduk tidak boleh kosong!</span>");
            }else if(jml_penduduk.length!==0)
            {
              if(conrJml <= 0)
                {
                    $("#message-jml_penduduk").show();
                    $("#message-jml_penduduk").addClass("message error");
                    $("#message-jml_penduduk").html("<span>Jumlah penduduk tidak boleh 0!</span>");
                }else
                {
                    $("#message-jml_penduduk").hide();
                }
            }else
            {
              $("#message-jml_penduduk").hide();
            } 
        });

/*
 validasi luas wilayah , tidak bleh kosong dan tidak boleh 0
*/
  

        $("#luas_wilayah").blur(function(){
            luas_wilayah= $(this).val();
            var conrluas_wilayah=parseInt(luas_wilayah);
            if(luas_wilayah.length==0)
            {
              $("#message-luas_wilayah").show();
              $("#message-luas_wilayah").addClass("message error");
              $("#message-luas_wilayah").html("<span>Luas wilayah tidak boleh kosong!</span>");
            }else if(luas_wilayah.length!==0)
            {
              if(conrluas_wilayah <= 0)
                {
                    $("#message-luas_wilayah").show();
                    $("#message-luas_wilayah").addClass("message error");
                    $("#message-luas_wilayah").html("<span>Luas wilayah  tidak boleh 0!</span>");
                }else
                {
                    $("#message-luas_wilayah").hide();
                }
            }else
            {
              $("#message-luas_wilayah").hide();
            } 
        });
/*
 validasi nama rumah adat , tidak bleh kosong
*/
        $("#rumah_adat").blur(function(){
            rumah_adat= $(this).val();
            if(rumah_adat.length==0)
            {
              $("#message-rumah_adat").show();
              $("#message-rumah_adat").addClass("message error");
              $("#message-rumah_adat").html("<span>Nama rumah adat tidak boleh kosong!</span>");
            }else
            {
              $("#message-rumah_adat").hide();
            } 
        });
        
/*
 validasi nama tari adat , tidak bleh kosong
*/
        $("#tari_adat").blur(function(){
            tari_adat= $(this).val();
            if(tari_adat.length==0)
            {
              $("#message-tari_adat").show();
              $("#message-tari_adat").addClass("message error");
              $("#message-tari_adat").html("<span>Nama tari adat tidak boleh kosong!</span>");
            }else
            {
              $("#message-tari_adat").hide();
            } 
        });

/*
 validasi bhs daerah , tidak bleh kosong
*/
        $("#bhs_daerah").blur(function(){
            bhs_daerah= $(this).val();
            if(bhs_daerah.length==0)
            {
              $("#message-bhs_daerah").show();
              $("#message-bhs_daerah").addClass("message error");
              $("#message-bhs_daerah").html("<span>Bahasa daerah tidak boleh kosong!</span>");
            }else
            {
              $("#message-bhs_daerah").hide();
            } 
        });

/*
 validasi nama suku , tidak bleh kosong
*/
        $("#suku").blur(function(){
            suku= $(this).val();
            if(suku.length==0)
            {
              $("#message-suku").show();
              $("#message-suku").addClass("message error");
              $("#message-suku").html("<span>Nama suku tidak boleh kosong!</span>");
            }else
            {
              $("#message-suku").hide();
            } 
        });

/*
validasi kirim
*/
    $("#kirim").click(function(){
    $('form[name=form-kirim]').submit(function(){
        nama_prov       =$("#nama_prov").val();
        ibukota         =$("#ibukota").val();
        jml_penduduk    =$("#jml_penduduk").val();
        luas_wilayah    =$("#luas_wilayah").val();
        rumah_adat      =$("#rumah_adat").val();
        tari_adat       =$("#tari_adat").val();
        bhs_daerah      =$("#bhs_daerah").val();
        suku            =$("#suku").val();
        gambar1         =$("#gbr_rumah_adat").val();
        gambar2         =$("#gbr_baju_adat").val();

       if(nama_prov.length==0){
           $("#nama_prov").focus();
           $("#message-nama_prov").addClass("message error");
           $("#message-nama_prov").html("<span>nama propinsi tidak boleh kosong!</span>");
           return false;
        }
        else if(ibukota.length==0)
        {
            $("#ibukota").focus();
            $("#message-ibukota").addClass("message error");
            $("#message-ibukota").html("<span>nama ibu kota tidak boleh kosong!</span>");
            return false;
        }
        else if(jml_penduduk.length==0)
        {
            $("#jml_penduduk").focus();
            $("#message-jml_penduduk").addClass("message error");
            $("#message-jml_penduduk").html("<span>Jumlah penduduk tidak boleh kosong!</span>");
            return false;
        }
        else if(luas_wilayah.length==0)
        {
            $("#luas_wilayah").focus();
            $("#message-luas_wilayah").addClass("message error");
            $("#message-luas_wilayah").html("<spanLuas wilayah tidak boleh kosong!</span>");
            return false;
        }
        else if(rumah_adat.length==0)
        {
            $("#rumah_adat").focus();
            $("#message-rumah_adat").addClass("message error");
            $("#message-rumah_adat").html("<span>Rumah adat tidak boleh kosong!</span>");
            return false;
        }
        else if(tari_adat.length==0)
        {
            $("#tari_adat").focus();
            $("#message-tari_adat").addClass("message error");
            $("#message-tari_adat").html("<span>Nama taria Adat tidak boleh kosong!</span>");
            return false;
        }
        else if(bhs_daerah.length==0)
        {
            $("#bhs_daerah").focus();
            $("#message-bhs_daerah").addClass("message error");
            $("#message-bhs_daerah").html("<span>Bahasa Daerah tidak boleh kosong!</span>");
            return false;
        }
        else if(suku.length==0)
        {
            $("#suku").focus();
            $("#message-suku").addClass("message error");
            $("#message-suku").html("<span>Nama suku tidak boleh kosong!</span>");
            return false;
        }
        else if(gambar1.length==0)
        {
            $("#message-gbr_rumah_adat").show();
            $("#message-gbr_rumah_adat").addClass("message error");
            $("#message-gbr_rumah_adat").html("<span>Masukan Gambar!</span>");
            return false;
        }
        else if(gambar2.length==0)
        {
            $("#message-gbr_baju_adat").show();
            $("#message-gbr_baju_adat").addClass("message error");
            $("#message-gbr_baju_adat").html("<span>Masukan Gambar!</span>");
            return false;
        }
        else
        {
            return true;
        }
        
    });
});


   
function ValidasiInputFile(input,message) {
    if (input.type == "file") {
        var namafile = input.value;
         if (namafile.length > 0) {
            var blnValid = false;
            for (var j = 0; j < Extensions.length; j++) {
                var sCurExtension = Extensions[j];
                if (namafile.substr(namafile.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
                    blnValid = true;
                    $("#"+message+"").hide();
                    break;
                   
                }
            }
             
            if (!blnValid) {
                console.log(message);
                $("#"+message+"").show();
              $("#"+message+"").addClass("message error");
              $("#"+message+"").html("<span>File yang anda masukan tidak falid, file arus ber extensi:" + Extensions.join(", ")+"</span>");
                input.value = "";
                return false;
            }
        }
    }
    return true;
}




    </script>
</body>
</html>