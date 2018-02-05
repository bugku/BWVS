<?php 
require_once('bwvs_config/sys_config.php');
require_once('header.php');
?>
	<html>
	<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
	<style>
	.jumbotron{
	background:url(favicon/a.png);
	}
	</style>
	</head>
	<body>
	<div class="well well-sm"><span class="glyphicon glyphicon-volume-up"></span>   欢迎贡献题目代码，官方QQ群：222959472，Email：admin@bugku.com</div>
	<div class="jumbotron">
    <h1><b>B   </b><b>W     </b><b>V    </b> <b>S   </b></h1>
    <p>Bugku Web Vulnerability System</p>
    <p>Web漏洞渗透测试系统</p><br />
    <p>
     <a class="btn btn-lg btn-primary" href="Vulnerability.php" role="button">开始实验 &raquo;</a>
    </p>
    </div>
	<div class="alert alert-success">
	<button type="button" class="close" data-dismiss="alert">×</button>
	<h4>
		提示!
	</h4> <strong>警告!</strong> 请勿在生产环境搭建.
	</div>
	<div class="container">
	<div class="row">
		<div class="span12">
			<blockquote>
				<p>
					BWVS是一个开源的web漏洞靶场.
				</p> <small>version <cite>1.0</cite></small>
			</blockquote>
		</div>
	</div>
	</div>
	</body>
	</html>
<?php
require_once('Trim.php');
?>