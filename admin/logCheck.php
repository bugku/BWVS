<?php
include_once('../bwvs_config/sys_config.php');
if (isset($_POST['submit'])) {
	
	if(empty($_POST['admin_name']) || empty($_POST['admin_pass']))
	{
		$_SESSION['error_info'] = '温馨提示：用户名或密码错误！';
		header('Location: login.php');
	}else{
		$admin_name = $_POST['admin_name'];
		$admin_pass = $_POST['admin_pass']; 
		
		$admin_name = clear_all($admin_name);
		$admin_pass = clear_all($admin_pass);
		
    	$sql = "SELECT * FROM dwvs_admin_message WHERE DWVS_admin_name = '$admin_name' AND DWVS_admin_passwd = '".md5($admin_pass,true)."'";    

    	$data = mysqli_query($connect, $sql) or die('MySQL Error!!');
    	
    if (mysqli_num_rows($data) != 0){
		$_SESSION['admin'] = $admin_name;
		sleep(3);
        header('Location: manage.php');
        }else{
		$_SESSION['error_info'] = '温馨提示：用户名或密码错误！';
  		header('Location: login.php');}
	}
}
else {
	not_find($_SERVER['PHP_SELF']);
}
?>