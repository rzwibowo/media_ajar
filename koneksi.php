<?php
	$host="localhost";
	$user="root";
	$pass="";
	$dbname="medajar";

	$koneksi=mysqli_connect($host,$user,$pass,$dbname);
	if(!$koneksi)
		die(mysqli_connect_error());
?>