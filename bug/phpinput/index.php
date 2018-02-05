<?php 
	show_source(__FILE__);
	if(isset($_REQUEST['path'])){
	    include($_REQUEST['path']);
	}else{
	    include('phpinfo.php');
	}
?>