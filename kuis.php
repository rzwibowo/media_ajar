<?php
session_start();

include "koneksi.php";
include "functionAll.php";

$_SESSION[session_id()]['benar']=0;
$_SESSION[session_id()]['salah']=0;
// if (!isset($_SESSION["user"])) echo "<script>location.replace('login.php');</script>";

?>
<!DOCTYPE html>
<html>
<head>
    <title>KUIS</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Kube CSS -->
    <link rel="stylesheet" href="css/kube.css">
    <link rel="stylesheet" href="css/medajar.css">

    <script src="js/jquery.js"></script> 
    
    <link rel="icon" 
      type="image/ico" 
      href="favicon.ico">
</head>
<body id="index">
<?php
    // include 'kepala.php';
?>
    
    <div id="kuis-page">

        <button class="button round kontrolAudio" onclick="jeda()">▌▌</button>
        <button class="button round kontrolAudio" style="display: none" onclick="main()">►</button>
        
        <audio id="backsound" autoplay loop>
            <source src="snd/backsound_1.ogg" type="audio/ogg">
            Your browser does not support the audio element.
        </audio>

        <div id="ornamen" class="col col-12 text-center">
            <img id="awan" src="img/index/awan-menu.gif" alt="">
        <!-- <img id="pohon" src="img/index/pohon.png" alt=""> -->
        </div>
        <div class="row">
            <a href="index.html" id="back"><img id="back-img" src="img/maps/kembali.png" alt=""></a>
        </div>
    	<div class="row align-center">
    		<div class="col-6">
    			<div id="materi-show" class="text-center">
    				<h1>KUIS</h1>
    				
               
                <br>
                 <?php 
                $sql = "select * from kuis";
                $hasil = mysqli_query ($koneksi,$sql) or die ("Gagal Akses");
                
                $no=1;

                
                ?>
                <?php while ($row = mysqli_fetch_array ($hasil)){
                   
                    echo "<a href='mulai_kuis.php?r=".$row['id']."&p=0'>".$row['nama']."</a><br>";
                }
                   ?>
                    
    			</div>
                
    			
    		</div>
    	</div>
    </div>

    <!-- Kube JS + jQuery are used for some functionality, but are not required for the basic setup -->
    <script src="js/kube.js"></script>
    <script>
        $("#back").hover(
            function(){
                $("#back-img").attr("src", "img/maps/kembali_hover.png");
            },
            function(){
                $("#back-img").attr("src", "img/maps/kembali.png");
            }
        );
        $("a,button").click(
            function(){
                new Audio("snd/Click.ogg").play(); 
            }
        );
        $("a,button").mouseover(
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