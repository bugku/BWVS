<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Bugku - sql搜索型注入</title>
</head>
<body align="center">
<br>
<br>
<br>
<br>
<?php
include_once('../../bwvs_config/sys_config.php');
require_once('../header.php');
include('../conn.php');
include "../class/function.class.php";
$p = new Func("GET","content");
$p -> con_html();
if (isset($_REQUEST['submit'])) {
	$content = empty($_REQUEST['content']) ? "is" : $_REQUEST['content'];
	$row = $p -> con_mysql("news","content",$content,"search");
	$content = htmlspecialchars($content);
	echo "<hr>SQLi语句：SELECT * FROM news WHERE content like '%<font color='red'>$content</font>%'";
	echo "<hr>";
	echo "<center><table border='2'><tr><td>标题</td><td>内容</td></tr><tr><td>{$row['title']}</td><td>{$row['content']}</td></tr></table></center>";
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