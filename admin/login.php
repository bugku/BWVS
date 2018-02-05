<?php
include_once('../bwvs_config/sys_config.php');
require_once('../header.php');
$error_info = "";
if(isset($_SESSION['error_info']) && $_SESSION['error_info'] != '') {
	$error_info = $_SESSION['error_info'];
	$_SESSION['error_info'] = '';
}
?>
<form class="bs-example form-horizontal" action="logCheck.php" method="post" name="log">
	<legend>管理员登录界面</legend>
    <div class="form-group">
        <label for="inputEmail" class="col-lg-2 control-label">用户名：</label>
        <div class="col-lg-3">
            <input type="text" name="admin_name" class="form-control" id="inputEmail">
        </div>
	</div>
	<div class="form-group">
		<label for="inputEmail" class="col-lg-2 control-label">密码：</label>
        <div class="col-lg-3">
			<input type="password" name="admin_pass" class="form-control" id="inputEmail"><?php echo $error_info;?>
        </div>
		<div class="col-lg-12" style="margin-top:15px; height:40px; right:-294px">
    <input type="submit" name="submit" class="btn btn-primary " value="登录"/>
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp
	<a href="../index.php"><button type="button" class="btn btn-primary btn-danger">返回</button></a></div><br /><br /><br /><br /><br />
    </div>				  
</form>
<?php
require_once('../Trim.php');
?>