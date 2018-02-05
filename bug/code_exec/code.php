<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>bugku - 代码执行</title>
</head>
<body>
<?php
	include_once('../../bwvs_config/sys_config.php');
	require_once('../header.php');
	include "../class/function.class.php";
	$p = new Func("GET","code");
	$p -> con_html();
	if (isset($_REQUEST['submit'])) {
		$code = $_REQUEST['code'];
		echo $p -> con_function('assert',$code);
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