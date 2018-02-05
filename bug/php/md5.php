<?php
	include_once('../../bwvs_config/sys_config.php');
	require_once('../../header.php');
	
	
	$password=$_GET['password'];

	if(strcmp('21232f297a57a5a743894a0e4a801fc3',$password)){
	    echo 'password is false ! ! ! ! !';
	}else{
	    echo 'flag is here!!<br>';
	    echo 'flag{挑战成功}';
	}

?>

<?php 
require_once('../info.php');
?>