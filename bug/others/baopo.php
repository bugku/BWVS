<?php 
	include_once('../../bwvs_config/sys_config.php');
	require_once('../header.php');
error_reporting(0);
$password = "13579"; // 这里是密码 
$p = ""; 
if(isset($_COOKIE["isview"]) and $_COOKIE["isview"] == $password){ 
$isview = true; 
}else{ 
if(isset($_POST["pwd"])){ 
if($_POST["pwd"] == $password){ 
setcookie("isview",$_POST["pwd"],time()+3600*3); 
$isview = true; 
}else{ 
$p = (empty($_POST["pwd"])) ? "需要密码才能查看，请输入密码。" : "密码不正确，请重新输入。"; 
} 
}else{ 
$isview = false; 
$p = "请输入密码"; 
} 
} 
if($isview){ ?> 
密码正确
<?php }else{ ?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" " http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns=" http://www.w3.org/1999/xhtml"> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta http-equiv="pragma" content="no-cache" /> 
<meta http-equiv="cache-control" content="no-cache" /> 
<meta http-equiv="expires" content="0" /> 
<title>请输入密码</title> 
<!--[if lt IE 6]> 
<style type="text/css"> 
.z3_ie_fix{ 
float:left; 
} 
</style> 
<![endif]--> 
<style type="text/css"> 
<!-- 
body{ 
background:none; 
} 
.passport{ 
border:1px solid red; 
background-color:#FFFFCC; 
width:400px; 
height:100px; 
position:absolute; 
left:49.9%; 
top:49.9%; 
margin-left:-200px; 
margin-top:-55px; 
font-size:14px; 
text-align:center; 
line-height:30px; 
color:#746A6A; 
} 
--> 
</style> 
<div class="passport"> 
<div style="padding-top:20px;"> 
<form action="?yes" method="post" style="margin:0px;">输入查看密码 
<input type="password" name="pwd" /> <input type="submit" value="查看" /> 
</form> 
<?php echo $p; ?> 
</div> 
</div> 
<?php 
} ?> 
</body> 
</html>