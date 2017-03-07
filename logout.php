<?php
session_start();
session_destroy();
echo "Anda Sudah Logout </br>";
echo "<script>history.go(-1);</script>";
?>