<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Bugku - 反射XSS</title>
</head>
<body align="center">
<br>
<br>
<br>
<br>
<?php
	include_once('../../bwvs_config/sys_config.php');
	require_once('../header.php');
	include "../class/function.class.php";
	$p = new Func("GET","name");
	$p -> con_html();
	if (isset($_REQUEST['submit'])) {
		$name = $_REQUEST['name'];
		echo $p -> con_function('var_dump',$name);
	}
?>
</body>
</html>
<br>
<br>
<br>
<br>
<?php 
require_once('../info.php');
?>