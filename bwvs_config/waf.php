<?php
	function login_waf($log_name)
		{
		$black_str = "/(and|or|union|select|sleep|substr|order|order|by|where|from|rand|exp|updatexml|insert|update|dorp|delete|[,]|[\s]|[|]|[&])/";
		$log_name = preg_replace($black_str, "",$log_name);
		if(preg_match($black_str, $log_name)){
			$log_name = login_waf($log_name);
				return $log_name;
			}
				return $log_name;
		}

	function update_waf($upda_Name)
	{
		$black_str = "/(and|xor|union|sleep|substr|order|by|delete|drop|outfile|load_file)/i";
		$upda_Name = preg_replace($black_str, "", $upda_Name);
		$upda_Name = preg_replace("/union\s+select/i","",$upda_Name);
		$upda_Name = preg_replace("/and\s+sleep/i","",$upda_Name);
		if(preg_match($black_str,$upda_Name)){
			$upda_Name = update_waf($upda_Name);
			return $upda_Name;
		}
		return $upda_Name; 
	}

	function select_waf1($str)
		{
		$balck_list = "/(union|sleep|substr)/i";		    		
		$str= preg_replace($balck_list,"", $str);	   		 	    		
		$str= preg_replace('/union\s+select/i',"", $str);
		$str= preg_replace('/and\s+sleep/i', "", $str);
		if(preg_match($balck_list,$str))
	        {
	            $str = select_waf1($str);
	            return $str;
	        } 
	        return $str; 
		}


	function search_waf($search_name)
		{
			$search_name = preg_replace('/or/i', "", $search_name);
			$search_name = preg_replace('/and/i', "", $search_name);
			$search_name = preg_replace('/[#]/', "", $search_name);
			$search_name = preg_replace('/[--]/', "", $search_name);
			$search_name = preg_replace('/[\/\*]/', "", $search_name);
			$search_name = preg_replace('/[\/\\\\]/', "", $search_name);
			return $search_name;
		}


function clear_login($str)
{
	$balck_list = "/(select|delete|update|insert|and|order|or|union|where|from|[=])/i";			    	
	$str= preg_replace($balck_list,"", $str);	  

	$str= preg_replace('/union\s+select/i',"", $str);

	if(preg_match($balck_list,$str))
        {
            $str = clear_login($str);
            return $str;
        } 
        return $str;   
}

function clear_register($str)
{
		$balck_list="/([#]|[--]|[-]|[\']|[\"]|[\/\*]|[\\\]|[&]|[|]|[$]|[\s])/";
		$str = preg_replace($balck_list,"",$str);
		if(preg_match($balck_list,$str))
		{
			$str = clear_register($str);
			return $str;
		}
		return $str;
}

function clear_all($str)
{
	$balck_list = "/(select|delete|update|insert|and|order|or|union|where|from|[=]|[#]|[--]|[-]|[\']|[\"]|[\/\*]|[\\\]|[&]|[|]|[$]|[\s])/i";			    	
	$str= preg_replace($balck_list,"", $str);	  

	$str= preg_replace('/union\s+select/i',"", $str);

	if(preg_match($balck_list,$str))
        {
            $str = clear_login($str);
            return $str;
        } 
        return $str;   
}


function XSS_Message($message)
 {
 	$message = preg_replace( "/<script>/i", '', $message); 
	$message = preg_replace( "/<\/script>/i", '', $message); 
	$message = preg_replace( "/document/i", '', $message); 
	$clear_message = preg_replace("/alert/i",'', $message);
 	return $clear_message;
 }

function XSS_Reg($message)  
    {
        $balck_list = "/(script|iframe|cookie|document|write)/i";
     	$clear_message = preg_replace( $balck_list, '', $message); 
		if(preg_match($balck_list,$clear_message))
        {
            $clear_message = XSS_waf2($clear_message);
            return $clear_message;
        } 
       	return $clear_message;
}



function pass_len($str)
{
		$strlen = 1;
		$Rlen = strlen($str);
		if($Rlen > $strlen)
		{
			return 1;
		}
		else
		{
			return 0;
		}
}


function is_pic($file_name) 
{ 
	$extend =explode("." , $file_name); 
	$va=count($extend)-1; 
	echo $extend[$va];
	if ($extend[$va]=='jpg' || $extend[$va]=='jpeg' || $extend[$va]=='png') {
		return 1;
	}
	else 
		return 0;	
}


function not_find($page)
{
	include_once('../404.html');
}



	function Quan_NO_Sqlmap($agent)
	{
		$sqlmap_AG = "/sqlmap/i";
		if(true == preg_match($sqlmap_AG, $agent)){  
        return 0;
        }
        return 1;  
	}

	function getIP() 
	{ 
	if (getenv('HTTP_CLIENT_IP'))
	 	{ 
	$ip = getenv('HTTP_CLIENT_IP'); 
		} 
	elseif (getenv('HTTP_X_FORWARDED_FOR'))
		 { 
	$ip = getenv('HTTP_X_FORWARDED_FOR'); 
		} 
	elseif (getenv('HTTP_X_FORWARDED')) 
		{ 
	$ip = getenv('HTTP_X_FORWARDED'); 
		} 
	elseif (getenv('HTTP_FORWARDED_FOR')) 
		{ 
	$ip = getenv('HTTP_FORWARDED_FOR'); 
		} 
	elseif (getenv('HTTP_FORWARDED')) 
		{ 
	$ip = getenv('HTTP_FORWARDED'); 
		} 
	else 
		{ 
	$ip = $_SERVER['REMOTE_ADDR']; 
		} 
	return $ip; 
	} 

	function UpFile_name($str) 
	{
		$File_Name_White_List = array("jpg","gif","png","jpeg");
		$last_name = explode(".", $str);
		$last_name = end($last_name);
		if(in_array($last_name, $File_Name_White_List))
		{
			return 1;
		}
		else
		{
			echo "注意你的文件名，OK？";
			return 0;
		}
	}

	function UpFile_type1($str)
	{
		if($str==="image/jpg"){
			return ".jpg";
		}else if($str==="image/gif"){
			return ".gif";
		}else if($str==="image/png"){
			return ".png";
		}else if($str==="image/jpeg"){
			return ".jpeg";
		}else if($str==="application/octet-stream"){
			return ".php";
		}else{
			return 0;
		}
	}

		function Upfile_type($str) 
	{
		$File_Type_White_List = array("image/jpg","image/gif","image/png","image/jpeg","image/x-png","image/pjpeg");
		if(in_array($str,$File_Type_White_List))
		{
			return 1;
		}
		else
		{
			return 0;
		}
	}

	    function FileExt_Cheak($str)
	    {
			$File_Type_Black_List = array('.asp','.asa' ,'.cer', '.jspx',' .jspf','.aspx','.jsp','.php','.php3','.php4','.PHP','.exe','.exee');
			if(in_array($str, $File_Type_Black_List)){
				return 0;
			}else{
				return 1;
			}

	    }

	    
?>