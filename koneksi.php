 <?php
    $host="localhost"; 
    $user="root";      
    $pass="";      
    $db="medajar";  
    $con=mysqli_connect($host,$user,$pass,$db); 
    if (!$con) die(mysqli_connect_error());
?>