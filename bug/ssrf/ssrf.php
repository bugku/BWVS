<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Bugku - ssrf</title>
</head>
<body>
<?php
	include_once('../../bwvs_config/sys_config.php');
	require_once('../header.php');
	include "../class/function.class.php";
	$p = new Func("GET","url");
	$p -> con_html();
	if (isset($_REQUEST['submit'])) {
		$url = $_REQUEST['url'];
		echo $p -> con_function('file_get_contents',$url);
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