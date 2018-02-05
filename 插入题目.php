<?php
include_once('./bwvs_config/sys_config.php');

$sql = "INSERT INTO `DWVS_vulnerability` VALUES ('1', 'SQL联合查询注入', 'SQL注入漏洞', '/user/logCheck.php 、/user/updateName.php', 'http://www.jianshu.com/p/399881e79b1f')";
mysqli_query($connect,$sql) or die(mysqli_error($connect));

$sql="INSERT INTO `DWVS_vulnerability` VALUES ('2', 'SQL搜索型注入', 'SQL注入漏洞', '/search.php', null)";
mysqli_query($connect,$sql) or die(mysqli_error($connect));

$sql="INSERT INTO `DWVS_vulnerability` VALUES ('3', 'SQL报错型注入', 'SQL注入漏洞', '/messageSub.php 、/user/updateName.php', 'http://vinc.top/2017/04/06/')";
mysqli_query($connect,$sql) or die(mysqli_error($connect));

$sql="INSERT INTO `DWVS_vulnerability` VALUES ('4', 'SQL数字型注入', 'SQL注入漏洞', '/bug/sql_injection/sql_num.php', 'http://blog.csdn.net/wizardforcel/article/details/50695913')";
mysqli_query($connect,$sql) or die(mysqli_error($connect));

$sql="INSERT INTO `DWVS_vulnerability` VALUES ('5', 'SQL字符型注入', 'SQL注入漏洞', '/bug/sql_injection/sql_string.php', 'https://www.cnblogs.com/zaki-Gui/p/5719920.html')";
mysqli_query($connect,$sql) or die(mysqli_error($connect));

$sql="INSERT INTO `DWVS_vulnerability` VALUES ('6', 'SQL基于时间的盲注', 'SQL注入漏洞', '/user/updatePass.php', null)";
mysqli_query($connect,$sql) or die(mysqli_error($connect));

$sql="INSERT INTO `DWVS_vulnerability` VALUES ('7', 'SQL逻辑注入', 'SQL注入漏洞', '/admin/logCheack.php', 'http://blog.csdn.net/greyfreedom/article/details/45846137')";
mysqli_query($connect,$sql) or die(mysqli_error($connect));

$sql="INSERT INTO `DWVS_vulnerability` VALUES ('8', 'SQL搜索型注入2', 'SQL注入漏洞', '/bug/sql_injection/sql_search.php', 'http://blog.csdn.net/cnbird2008/article/details/7753144')";
mysqli_query($connect,$sql) or die(mysqli_error($connect));

$sql="INSERT INTO `DWVS_vulnerability` VALUES ('9', '反射型 XSS', 'XSS漏洞', '/bug/xss/reflect_xss.php', 'http://www.freebuf.com/articles/web/42727.html')";
mysqli_query($connect,$sql) or die(mysqli_error($connect));

$sql="INSERT INTO `DWVS_vulnerability` VALUES ('10', '存储型 XSS', 'XSS漏洞', '/bug/xss/stored_xss.php', 'http://www.freebuf.com/articles/web/42727.html')";
mysqli_query($connect,$sql) or die(mysqli_error($connect));

$sql="INSERT INTO `DWVS_vulnerability` VALUES ('11', 'demo型 XSS', 'XSS漏洞', '/bug/xss/dom_xss.php', 'http://www.freebuf.com/articles/web/42727.html')";
mysqli_query($connect,$sql) or die(mysqli_error($connect));

$sql="INSERT INTO `DWVS_vulnerability` VALUES ('12', 'demo型 XSS 2', 'XSS漏洞', '/search.php', 'http://www.freebuf.com/articles/web/42727.html')";
mysqli_query($connect,$sql) or die(mysqli_error($connect));

$sql="INSERT INTO `DWVS_vulnerability` VALUES ('13', '反射型 XSS 2', 'XSS漏洞', '/search.php', 'http://www.freebuf.com/articles/web/42727.html')";
mysqli_query($connect,$sql) or die(mysqli_error($connect));

$sql="INSERT INTO `DWVS_vulnerability` VALUES ('14', '存储型 XSS 2', 'XSS漏洞', '/message.php', 'http://www.freebuf.com/articles/web/42727.html')";
mysqli_query($connect,$sql) or die(mysqli_error($connect));

$sql="INSERT INTO `DWVS_vulnerability` VALUES ('15', '暴力破解', '其他', '/user/login.php 、/admin/logCheack.php', null)";
mysqli_query($connect,$sql) or die(mysqli_error($connect));

 $sql="INSERT INTO `DWVS_vulnerability` VALUES ('16', 'PHP远程命令执行漏洞', '命令执行漏洞', '/ping.php、/bug/code_exec/exec.php', 'https://www.cnblogs.com/xiaozi/p/7831529.html')";
mysqli_query($connect,$sql) or die(mysqli_error($connect));

 $sql="INSERT INTO `DWVS_vulnerability` VALUES ('17', '本地文件包含漏洞', '文件包含漏洞', '/Info.php', null)";
 mysqli_query($connect,$sql) or die(mysqli_error($connect));

 $sql="INSERT INTO `DWVS_vulnerability` VALUES ('18', '任意文件包含漏洞', '文件包含漏洞', '/bug/file_include/any_include.php', 'http://blog.csdn.net/hitwangpeng/article/details/45952625')";
 mysqli_query($connect,$sql) or die(mysqli_error($connect));
 
 $sql="INSERT INTO `DWVS_vulnerability` VALUES ('19', '任意代码读取漏洞', '文件包含漏洞', '/Info.php、/bug/others/file_read.php', 'http://blog.csdn.net/hitwangpeng/article/details/45952625')";
 mysqli_query($connect,$sql) or die(mysqli_error($connect));

 $sql="INSERT INTO `DWVS_vulnerability` VALUES ('20', '目录限制文件包含', '文件包含漏洞', ' /bug/file_include/include_1.php', null)";
 mysqli_query($connect,$sql) or die(mysqli_error($connect));
 
$sql="INSERT INTO `DWVS_vulnerability` VALUES ('21', '修改任意用户密码漏洞', '逻辑错误漏洞', '/user/updatePass.php', null)";
mysqli_query($connect,$sql) or die(mysqli_error($connect));

$sql="INSERT INTO `DWVS_vulnerability` VALUES ('22', 'Session劫持漏洞', 'Session劫持漏洞', '/user/updateName.php', null)";
mysqli_query($connect,$sql) or die(mysqli_error($connect));

 $sql="INSERT INTO `DWVS_vulnerability` VALUES ('23', 'Apache文件解析漏洞', '上传漏洞', '/user/updeteAvatar.php', null)";
mysqli_query($connect,$sql) or die(mysqli_error($connect));

 $sql="INSERT INTO `DWVS_vulnerability` VALUES ('24', '任意文件上传漏洞', '上传漏洞', '/bug/file_upload/any_upload.php', null)";
mysqli_query($connect,$sql) or die(mysqli_error($connect));

 $sql="INSERT INTO `DWVS_vulnerability` VALUES ('25', 'JS限制文件上传', '上传漏洞', '/bug/file_upload/upload_js.php', null)";
mysqli_query($connect,$sql) or die(mysqli_error($connect));
 
 $sql="INSERT INTO `DWVS_vulnerability` VALUES ('26', 'MIME限制文件上传', '上传漏洞', '/bug/file_upload/upload_mime.php', null)";
mysqli_query($connect,$sql) or die(mysqli_error($connect));

 $sql="INSERT INTO `DWVS_vulnerability` VALUES ('27', '扩展名限制文件上传', '上传漏洞', '/bug/file_upload/upload_name.php', null)";
mysqli_query($connect,$sql) or die(mysqli_error($connect));

 $sql="INSERT INTO `DWVS_vulnerability` VALUES ('28', '内容限制文件上传', '上传漏洞', '/bug/file_upload/upload_content.php', null)";
mysqli_query($connect,$sql) or die(mysqli_error($connect));

 $sql="INSERT INTO `DWVS_vulnerability` VALUES ('29', '任意代码执行', '代码执行漏洞', '/bug/code_exec/code.php ', null)";
mysqli_query($connect,$sql) or die(mysqli_error($connect));

 $sql="INSERT INTO `DWVS_vulnerability` VALUES ('30', 'ssrf', 'SSRF漏洞', '/bug/ssrf/ssrf.php ', null)";
mysqli_query($connect,$sql) or die(mysqli_error($connect));

 $sql="INSERT INTO `DWVS_vulnerability` VALUES ('31', '无验证码爆破', '其他', '/bug/others/baopo.php ', 'http://blog.csdn.net/ls1120704214/article/details/49734883')";
mysqli_query($connect,$sql) or die(mysqli_error($connect));

 $sql="INSERT INTO `DWVS_vulnerability` VALUES ('32', '源码泄漏', '其他', '/bug/Source_code/code1 ', null)";
mysqli_query($connect,$sql) or die(mysqli_error($connect));

 $sql="INSERT INTO `DWVS_vulnerability` VALUES ('33', '本地文件包含漏洞2', '文件包含漏洞', '/bug/file_include2 ', null)";
mysqli_query($connect,$sql) or die(mysqli_error($connect));

 $sql="INSERT INTO `DWVS_vulnerability` VALUES ('34', 'php://input伪协议', '协议', '/bug/phpinput ', 'http://www.cnblogs.com/LittleHann/p/3665062.html')";
mysqli_query($connect,$sql) or die(mysqli_error($connect));

 $sql="INSERT INTO `DWVS_vulnerability` VALUES ('35', 'php://filter伪协议', '协议', '/bug/xieyi/filter', 'http://www.cnblogs.com/LittleHann/p/3665062.html')";
mysqli_query($connect,$sql) or die(mysqli_error($connect));

 $sql="INSERT INTO `DWVS_vulnerability` VALUES ('36', 'data://伪协议', '协议', '/bug/xieyi/data', 'http://www.cnblogs.com/LittleHann/p/3665062.html')";
mysqli_query($connect,$sql) or die(mysqli_error($connect));

 $sql="INSERT INTO `DWVS_vulnerability` VALUES ('37', 'phar://伪协议1', '协议', '/bug/xieyi/phar1/include.php', 'http://www.cnblogs.com/LittleHann/p/3665062.html')";
mysqli_query($connect,$sql) or die(mysqli_error($connect));

 $sql="INSERT INTO `DWVS_vulnerability` VALUES ('38', 'phar://伪协议2', '协议', '/bug/xieyi/phar2', 'http://www.cnblogs.com/LittleHann/p/3665062.html')";
mysqli_query($connect,$sql) or die(mysqli_error($connect));

 $sql="INSERT INTO `DWVS_vulnerability` VALUES ('39', 'sql盲注', 'SQL注入漏洞', '/bug/sql_injection/sqli_blind', null)";
mysqli_query($connect,$sql) or die(mysqli_error($connect));

 $sql="INSERT INTO `DWVS_vulnerability` VALUES ('40', 'strcmp', 'PHP', '/bug/php/md5.php', null)";
mysqli_query($connect,$sql) or die(mysqli_error($connect));

 $sql="INSERT INTO `DWVS_vulnerability` VALUES ('41', '弱类型', 'PHP', '/bug/php/code.php', 'https://www.cnblogs.com/Mrsm1th/p/6745532.html')";
mysqli_query($connect,$sql) or die(mysqli_error($connect));
?>

