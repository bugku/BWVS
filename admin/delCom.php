<?php
include_once('../bwvs_config/sys_config.php');

if (isset($_SESSION['admin']) && !empty($_GET['id'])) {
	$clean_id = clear_all($_GET['id']);
	$query = "DELETE FROM dwvs_message WHERE DWVS_mes_id = '$clean_id' LIMIT 1";
	mysqli_query($connect,$query) or die('Error');
	mysqli_close($connect);
	header('Location: manageCom.php');
}
else {
	not_find($_SERVER['PHP_SELF']);
}	
?>