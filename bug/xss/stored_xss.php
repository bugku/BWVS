<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Bugku - 存储XSS</title>
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
	$p = new Func("POST","name");
	$p -> con_html();
	if (isset($_REQUEST['submit'])) {
		$name = $_REQUEST['name'];
		echo $p -> con_function('file_put_contents',__FILE__,$name,FILE_APPEND);
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