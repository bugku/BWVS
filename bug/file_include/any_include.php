<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Bugku - 任意文件包含</title>
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
	$p = new Func("GET","file");
	$p -> con_html();
	if (isset($_REQUEST['submit'])) {
		$file = $_REQUEST['file'];
		include $file;
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