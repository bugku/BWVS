<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Bugku - 命令执行</title>
</head>
<body>
<?php
	include_once('../../bwvs_config/sys_config.php');
	require_once('../header.php');
	include "../class/function.class.php";
	$p = new Func("GET","command");
	$p -> con_html();
	if (isset($_REQUEST['submit'])) {
		$command = $_REQUEST['command'];
		echo $p -> con_function('exec',$command);
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