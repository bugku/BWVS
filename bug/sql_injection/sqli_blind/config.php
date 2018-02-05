<?php
$XVWA_WEBROOT = '';
$host = "localhost";
$dbname = 'dwvs';
$user = 'root';
$pass = 'root';
$conn = mysql_connect($host,$user,$pass);
$conn1 = new mysqli($host, $user, $pass, $dbname);
?>