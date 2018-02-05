<?php 
include_once('../bwvs_config/sys_config.php');

if (isset($_SESSION['admin'])) {
	include_once('../header.php');
	$query = "SELECT * FROM dwvs_message ORDER BY DWVS_mes_id";
	$data = mysqli_query($connect,$query) or die('Error');
	mysqli_close($connect);
?>
<table class="items table">
<thead>
<tr>
<th id="yw0_c0">留言</th>
<th id="yw0_c0">用户</th>
<th id="yw0_c4">管理</th>
</thead>
<tbody>
<?php 

	while ($com = mysqli_fetch_array($data)) {
		$html_comment_text = htmlspecialchars($com['dwvs_message']);
		$html_user_name = htmlspecialchars($com['DWVS_mes_name']);
?>
	<tr class="odd">
		<td><?php echo $html_comment_text;?></td>
		<td><?php echo $html_user_name;?></td>
		<td><a href="delCom.php?id=<?php echo $com['DWVS_mes_id'];?>">删除</a></td>
	</tr>
<?php } 
?>
</tbody>
</table>
<a href="manage.php">返回</a>
<?php 
require_once('../Trim.php');
}
else {
	not_find($_SERVER['PHP_SELF']);
}
 ?>