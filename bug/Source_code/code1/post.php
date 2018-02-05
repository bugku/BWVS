<?php
//禁用错误报告
error_reporting(0);
//开启一个会话
session_start();
header("Content-Type: text/html;charset=utf-8");
require_once 'conn.php';
if(isset($_POST["username"])&&$_POST["password"])
{
	
 $uname=$_POST["username"];
 $pwd=$_POST["password"];
 
$uname = mysql_real_escape_string($uname);//防止SQL注入
$pwd = mysql_real_escape_string($pwd);//防止SQL注入


$query = "select * from user where uname='".$uname."' and pwd='".$pwd."'";//构建查询语句


$result = mysql_query($query);//执行查询


if (!$result) {
    die("could not to the database\n" . mysql_error());
}
if (mysql_numrows($result)<=0) {
	echo "<script type='text/javascript'>alert('登录错误，请重新登录！');location.href='index.html'</script>";
}else{
while($result_row=mysql_fetch_row(($result)))//取出结果并显示
{
$uid=$result_row[0];
$db_uname=$result_row[1];
$db_pwd=$result_row[2];
$db_bill=$result_row[3];
$_SESSION['user_id']=$db_uname;
echo "登录成功".$db_uname." !!</br>";;
echo "用户名:".$db_uname."</br>";
echo "密码:".$db_pwd."</br>";
}
}
mysql_close($connection);
}
?>