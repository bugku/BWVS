<?php
header("Content-type: text/html; charset=utf-8");
include_once('./bwvs_config/sys_config.php');
if(isset($_POST['submit']) && isset($_SESSION['user_name'])){
	if(!empty($_POST['message'])){
		$clean_message = update_waf($_POST['message']);
		$clean_message = XSS_Message($clean_message);
		date_default_timezone_set("Asia/Shanghai");
		$time = date("Y-m-d");
		$user_name = $_SESSION['user_name'];
		$user_id = $_SESSION['user_id'];
		$sql = "INSERT INTO dwvs_message(dwvs_message,DWVS_mes_time,DWVS_mes_name,DWVS_uid) VALUES ('$clean_message','$time','$user_name','$user_id')";
	  	mysqli_query($connect,$sql) or die(mysqli_error($connect));
	   	mysqli_close($connect);
	   	echo '<script type="text/javascript"> alert("留言成功!"); window.location='.'\''.'./message.php'.'\''.'</script>';
	}else{
		echo '<script type="text/javascript"> alert("抱歉，留言不可为空!"); window.location='.'\''.'./message.php'.'\''.'</script>';
	}
}else{
	not_find($_SERVER['PHP_SELF']);
}
?>
