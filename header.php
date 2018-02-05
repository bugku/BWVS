<!DOCTYPE html>
<html lang="en">
  <head>
    <title>BWVS - Web漏洞渗透测试系统</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="<?php echo $basedir?>/css/bootstrap.min.css">
    <script type="text/javascript">

     var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-23019901-1']);
      _gaq.push(['_setDomainName', "bootswatch.com"]);
      _gaq.push(['_setAllowLinker', true]);
      _gaq.push(['_trackPageview']);

     (function() {
       var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
       ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
       var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
     })();

    </script>
	<style>
	body{background-image:url(favicon/bg.png);
	body {background-attachment:fixed;}
	</style>
  </head>
<body>
<script src="<?php echo $basedir?>/js/bsa.js"></script>
<br>
<div class="container">
    <div class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
		<a class="navbar-brand" href="#"><img src="/favicon/logo.png" alt=""></a>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
          <ul class="nav navbar-nav">
			<li>
			<a href="<?php echo $basedir?>/index.php">主页</a>
			</li>
            <li>
			<a href="<?php echo $basedir?>/Vulnerability.php">漏洞信息</a>
            </li>
            <li>
             <a href="<?php echo $basedir?>/message.php">留言板</a>
            </li>
            <li>
              <a href="<?php echo $basedir?>/Info.php">平台介绍<span></a>
            </li>
          </ul>
		  <form class="navbar-form navbar-left" action="<?php echo $basedir?>/search.php" method="get">
			<input type="text" name="search" class="form-control col-lg-8" placeholder="搜索留言">
          </form>
          <ul class="nav navbar-nav navbar-right">
		  <?php if (isset($_SESSION['user_name'])) {?>
            <li><a href="<?php echo $basedir?>/user/user.php"><?php echo $_SESSION['user_name'];?></a></li>
            <li><a href="<?php echo $basedir?>/user/logout.php">Logout</a></li>
		  <?php } else if (isset($_SESSION['admin'])) {?>
		    <li><a href="<?php echo $basedir?>/admin/manage.php"><?php echo $_SESSION['admin'];?></a></li>
            <li><a href="<?php echo $basedir?>/user/logout.php">Logout</a></li>
		  <?php } else {?>
			<li><a href="<?php echo $basedir?>/user/login.php">登录</a></li>
            <li><a href="<?php echo $basedir?>/user/reg.php">注册</a></li>
			<?php }?>
          </ul>

        </div>
      </div>
    </div>
    <div class="container">
</div>