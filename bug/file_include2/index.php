<?php
	include "flag.php";
	$a = @$_REQUEST['hello'];
	eval( "var_dump($a);");
	show_source(__FILE__);
?>