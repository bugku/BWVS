<?php
require_once('bwvs_config/sys_config.php');
if(@$_GET['file_name'] != "header.php" && @$_GET['file_name'] != "phpinfo.php")
{
    include((@$_GET['file_name']?@$_GET['file_name']:"header.php"));
}elseif (@$_GET['file_name'] == "phpinfo.php") {
   header("Content-type: text/html; charset=utf-8");
   include_once("header.php");
   include_once("phpinfo.php");
}else{
    include_once("header.php");
    include(@$_GET['file_name']);
}
?>
<div class="row">
            <div class="span2">
            </div>
            <div class="span10">
                <div id="content">
					<div class="page-header">
                        <h4>BWVS</h4>
                        &nbsp;&nbsp;&nbsp;&nbsp;<font style="font-family:verdana" color="#161823"  size="5">BWVS</font>(Bugku Web Vulnerability System)是一个基于留言功能的简单Web漏洞测试系统，具有较强的可移植性和扩展性，适用于业界主流的Web集成环境，如：<font style="font-family:verdana" color="#161823"  size="3">WAMP(Windows+Apache+Mysql+PHP)、LAMP(Linux+Apache+Mysql+PHP)、LNMP(Linux+Nginx+Mysql+PHP)</font>。<br />&nbsp;&nbsp;&nbsp;&nbsp;系统中包含了主流的PHP Web漏洞( PHP Security Vulnerabilities)，如：<font style="font-family:verdana" color="#161823"  size="4">SQL注入漏洞(SQL Injection)、上传漏洞(File Upload Vulnerabilities)、XSS跨站脚本漏洞 (Cross Site Scripting)、命令注入漏洞(Command Injection)、文件包含漏洞(Remote/Local File Inclusion)、源代码泄露(Source Code Leak)、Session劫持(Session Hijacking)、IP伪造验证漏洞、代码逻辑错误漏洞等</font>。
                        其中以SQL注入漏洞、XSS跨站脚本漏洞等高危Web漏洞为主，系统内置了<font style="font-family:verdana" color="#161823"  size="4">10</font>余个WAF函数，目的是为了更加贴近实战环境，提高渗透测试人员和代码审计人员的综合能力，同时适合有一定基础的Web安全学习者深入学习和了解Web安全。
                        <hr>
						<p>

                             <b>[Development Environment]</b><br />
                            <ul>
                                <li>Apache  2.4.23</li>
                                <li>PHP 7.0.10</li>
                                <li>MySQL 5.7.14</li>
                            </ul>
 

                            <b>[Local System Info]</b><br />
                            <ul></ul>
							<ul>Soft Info：
                                <li>OS/<?php echo  strtoupper(substr(PHP_OS, 0, 3)) === 'WIN' ? 'Windows' : 'Linux' ;?></li>
								<li><?php echo apache_get_version();//输出信息取决于httpd.conf ServerTokens的选项?></li>
								<li>PHP/<?php echo PHP_VERSION;?></li>
								<li>MySQL/<?php include_once('./bwvs_config/sys_config.php'); echo mysqli_get_server_info($connect); mysqli_close($connect);?></li>
							</ul>
							<ul>php.ini：
								<li>allow_url_include = <?php echo ini_get( 'allow_url_include' ) ? 'On' : 'Off' ?></li>
								<li>allow_url_fopen = <?php echo ini_get( 'allow_url_fopen' ) ? 'On' : 'Off' ?></li>
                                <li>display_errors = <?php echo ini_get( 'display_errors' ) ? 'On' : 'Off' ?></li>
                                <li>register_global = <?php echo ini_get( 'register_global' ) ? 'On' : 'Off' ?></li>
                                <li>magic_quotes_gpc = <?php echo ini_get( 'magic_quotes_gpc' ) ? 'On' : 'Off' ?> (PHP版本大于5.4.0可以忽略)</li>
							</ul>
                            <!-- 改为文件包含 -->
                            <ul>PHP Info
                                <li><a href="<?php echo $basedir?>/Info.php?file_name=phpinfo.php"><button type="button" class="btn btn-info">phpinfo</button></a><br></li>
                            </ul>
                            <ul>Network Testing
                            <!-- 改为文件包含 -->
                                <li>IP Address：<?php echo getIP();?></li>
                                <li><a href="./ping.php"><button type="button" class="btn btn-danger">Testing</button></a><br></li>
                            </ul>
                        </p>
                        <hr>
                        <p>
                            <b>[学习平台推荐]</b><br>
                            <a href="http://www.bugku.com/" target="_blank">CTF论坛</a><br>			
                            <a href="http://123.206.31.85" target="_blank">CTF平台</a><br>  
                            <a href="https://www.google.com.hk/" target="_blank">Google</a><br>  
                            <a href="https://www.baidu.com/" target="_blank">百度</a><br>  	
                        </p>    
                    </div>
                </div>
            </div>
        </div>
<?php 
require_once('Trim.php');
?>