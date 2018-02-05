<?php
include_once('../bwvs_config/sys_config.php');
if (isset($_SESSION['user_name'])) {
	include_once('../header.php');
	$html_avatar = htmlspecialchars($_SESSION['user_favicon']);
	$html_username = htmlspecialchars($_SESSION['user_name']);
	$input_error = $name_error = $Uid_error ="";
	if(isset($_SESSION['update_error']) && $_SESSION['update_error'] != '') {
		$name_error = "抱歉，此用户名已存在!";
		$_SESSION['update_error'] = '';
	}
	if(isset($_SESSION['input_error']) && $_SESSION['input_error'] != '') {
		$input_error = $_SESSION['input_error'];
		$_SESSION['input_error'] = '';
	}
    if(isset($_SESSION['Uid_error']) && $_SESSION['Uid_error'] != '') {
        $Uid_error = $_SESSION['Uid_error'];
        $_SESSION['Uid_error'] = '';
    }
?>

<form action="updateName.php" method="post" name="update_name" class="bs-example form-horizontal">
	<input type="hidden" name="u_id" value="<?php echo $_SESSION['user_id']?>">
        <div class="form-group">
            <label for="inputEmail" class="col-lg-2 control-label">用户名：</label>
                <div class="col-lg-3">
                    <input type="text" name="user_name" value="<?php echo $html_username?>" class="form-control" id="inputEmail"><?php echo $name_error;?><?php echo  $Uid_error;?>
				</div>
				<div><input type="submit" name="submit" class="btn btn-primary" value="submit"/></div>
        </div>
</form>
<form class="bs-example form-horizontal" action="updatePass.php" method="post" name="update_passwd">
	<legend></legend>
    <div class="form-group">
        <label for="inputEmail" class="col-lg-2 control-label">新密码：</label>
        <div class="col-lg-3">
            <input type="password" name="New_pass" class="form-control" id="inputEmail" placeholder="New_pass:"/>
        </div>
	</div>
	<div class="form-group">
		<label for="inputEmail" class="col-lg-2 control-label"></label>
        <div class="col-lg-3">
			<input type="password" name="Re_pass" class="form-control" id="inputEmail" placeholder="Re_pass:"/>
			<tb><?php echo $input_error;?><tb>
        </div>
		<div><input type="submit" name="submit" class="btn btn-primary" value="更新"/></div>
    </div>				  
</form>
    <script type="text/javascript">
        function checkAvatar() {
            var file = document.getElementsByName('upfile')[0].value;
            if (file == null || file == "") {
                alert("你还没有选择任何文件，不能上传!");
                return false;
            }
            var allow_ext = ".jpg|.jpeg|.png|.gif";
            var ext_name = file.substring(file.lastIndexOf("."));
            if (allow_ext.indexOf(ext_name + "|") == -1) {
                var errMsg = "该文件不允许上传，请上传" + allow_ext + "类型的文件,当前文件类型为：" + ext_name;
                alert(errMsg);
                return false;
            }
        }
    </script>
<form class="bs-example form-horizontal" action="updateAvatar.php" method="post" enctype="multipart/form-data" onsubmit="return checkAvatar()">
	<legend></legend>                 
	<div class="form-group">
        <label for="inputEmail" class="col-lg-2 control-label">头像：</label>
		<div>
			<img src="<?php echo $html_avatar?>" width="100" height="100" class="img-thumbnail">
			<input type="file" name="upfile" style="float:right;padding-right:600px">
		</div>
    </div>
	<div class="form-group" style="padding-left:200px">
		<label></label>
		<div>
		<input type="submit" name="submit"  class="btn btn-primary" value="上传"/>
		<a href="user.php"><button type="button" class="btn btn-primary">返回</button></a>
		</div>
	</div>
</form>
<?php 
	require_once('../Trim.php');
}
else {
	not_find($_SERVER['PHP_SELF']);
}
?>