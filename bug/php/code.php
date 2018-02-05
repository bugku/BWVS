
<?php
include_once('../../bwvs_config/sys_config.php');
require_once('../../header.php');
$num=$_GET['num'];
if(!is_numeric($num))
{
echo $num;
if($num==1)
echo 'flag{挑战成功}';
}
?>
<b>
$num=$_GET['num'];<br>
if(!is_numeric($num))<br>
{<br>
echo $num;<br>
if($num==1)<br>
echo 'flag{**********}';<br>
}<br>
</b>