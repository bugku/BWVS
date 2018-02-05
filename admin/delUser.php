<?php
include_once('../bwvs_config/sys_config.php');

if (isset($_SESSION['admin']) && !empty($_GET['id'])) {
		$u_id = $_GET['id'];
		$clean_id = clear_register($u_id);
	$sql = "SELECT * FROM dwvs_message WHERE DWVS_uid= '$clean_id' ";
	$data = mysqli_query($connect,$sql) or die(mysqli_error($connect));
	$mes_num = mysqli_num_rows($data);
	$arr = mysqli_fetch_array($data);

		if( $mes_num >= 1)
		{
			echo '<script type="text/javascript"> alert("用户：'.$arr['DWVS_mes_name'].'，存在'.$mes_num.'留言条未删除,导致用户删除失败!"); window.location='.'\''.'./manageUser.php'.'\''.'</script>';
		}else{
				$query = "DELETE FROM dwvs_user_message WHERE DWVS_user_id = '$clean_id' LIMIT 1";
					mysqli_query($connect,$query) or die(mysqli_error($connect));
					mysqli_close($connect);
					echo '<script type="text/javascript"> alert("删除成功!"); window.location='.'\''.'./manageUser.php'.'\''.'</script>';
		}
}
else {
	not_find($_SERVER['PHP_SELF']);
}	
?>