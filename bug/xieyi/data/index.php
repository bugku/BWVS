<?php
$user=$_GET['user'];
#echo $user;
if(isset($user)&&(file_get_contents($user,'r')==='the user is admin')){
    echo "flag{xxxxxxxxxxxxx}";
}
else{
    echo "you are not admin ! ";
}
?>
