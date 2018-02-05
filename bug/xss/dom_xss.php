<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Bugku - DOM_XSS</title>
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
?>
<script type='text/javascript'>
function getURLValue(name){
 	var reg = new RegExp('(^|&)'+ name +'=([^&]*)(&|$)');
	var r = window.location.search.substr(1).match(reg);
	if(r != null){
 		return unescape(r[2]);
 	}else{
	 	return "";
 	}
}
document.write(getURLValue('name'));
</script>
</body>
</html>
<br>
<br>
<br>
<br>
<?php 
require_once('../info.php');
?>