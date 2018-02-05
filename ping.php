<?php
include_once('./bwvs_config/sys_config.php');
include_once('./header.php');
if (isset($_SESSION['user_name'])) {
	echo "<pre>";
	echo "<h1>尊敬的:".$_SESSION['user_name']."<br/>你好!</h1>";
	echo "<h2>你 没 有 使 用 此 功 能 的 权 限！</h2>";
	echo "<h3>如有需要请在留言区留言!</h3>";
	echo "</pre>";
	?>
	<div class="col-lg-12" style="right:-1067px">
	<a href="Info.php"><button type="button" class="btn btn-primary">返回</button></a>
	</div>
<?php
}else if(isset($_SESSION['admin'])){
	include_once('./header.php');
	echo "<pre>";
	echo "<h2>尊敬的管理员:".$_SESSION['admin']."，您好!</h2>";
	echo "<h2>                  欢 迎 使 用 网 络 测 试 功 能！</h2>";
	echo "</pre>";
	$IP = @$_POST['IP'];
	if(stristr(php_uname('s'),'Windows NT')){
		$com = "ping ".$IP;
		$result = shell_exec($com);
	}else{
		$com = "ping -c 4".$IP;
		$result = shell_exec($com);
	}
?>
<form action="" method="post" name="ping" class="bs-example form-horizontal">
        <div class="form-group">
            <label for="inputEmail" class="col-lg-2 control-label">IP Adderss：</label>
                <div class="col-lg-3">
                    <input type="text" name="IP" value="" class="form-control" id="inputEmail" placeholder="IP Address:">
				</div>
				<div><input type="submit" name="submit" class="btn btn-primary" value="Testing"/>
				<a href="Info.php"><button type="button" class="btn btn-primary">返回</button></a></div>
				<pre>
				<?php 
				echo iconv("GB2312", "UTF-8" ,"$result");
				?>
				</pre>
        </div>
</form>

<?php 
	require_once('./Trim.php');
}
else {
	echo '<script type="text/javascript"> alert("抱歉，请您先登录!"); window.location='.'\''.'./user/login.php'.'\''.'</script>';
}
?>