<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>bugku - FileRead</title>
</head>
<body>
<?php
	include_once('../../bwvs_config/sys_config.php');
	require_once('../header.php');
	include "../class/function.class.php";
	$p = new Func("GET","filename");
	$p -> con_html();
	if (isset($_REQUEST['submit'])) {
		$filename = $_REQUEST['filename'];
		if (file_exists($filename)) {
			echo htmlspecialchars($p -> con_function('file_get_contents',$filename));
		}else{
			echo "DoraBox Error: file not exists.";
		}
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