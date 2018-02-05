<?php
include_once('../bwvs_config/sys_config.php');
if(isset($_POST['submit'])){
	 if(!empty($_POST['user']) && !empty($_POST['pass'])){
	  	$clean_name = login_waf($_POST['user']);

		$clean_pass = login_waf($_POST['pass']);

    	$sql = "SELECT * FROM dwvs_user_message WHERE DWVS_user_name ="."'"."$clean_name"."'"." AND DWVS_user_passwd="."'".md5("$clean_pass")."'";

    	$data = mysqli_query($connect, $sql) or die('Mysql Error!!');
		mysqli_close($connect);
    		if(mysqli_num_rows($data) == 1) 
    		{
      			 $row = mysqli_fetch_array($data);
       			  $_SESSION['user_id'] = $row['DWVS_user_id'];
				  $_SESSION['user_name'] = $row['DWVS_user_name'];
				  if(!empty($row['DWVS_user_favicon']))
				  {
		  			$_SESSION['user_favicon'] = $row['DWVS_user_favicon'];
				  }else
				  {
				 	$rand_num = rand(1,4);
					$user_favicon = "../favicon/"."$rand_num".".jpg";
					$_SESSION['user_favicon'] = $user_favicon;
		 		  }
         			header('Location: user.php'); 	
    		}else{
				$_SESSION['login_error'] = 'Error';
				header('Location: login.php');			
				}	
   		}else{
				$_SESSION['login_error'] = 'Error';
				header('Location: login.php');			
				}	
	
}else  
{
	not_find($_SERVER['PHP_SELF']);
}
?>