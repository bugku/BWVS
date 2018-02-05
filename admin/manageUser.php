<?php 
include_once('../bwvs_config/sys_config.php');

if (isset($_SESSION['admin'])) {
	include_once('../header.php');
	$sql = "SELECT * FROM dwvs_user_message ORDER BY DWVS_user_id";
	$data = mysqli_query($connect,$sql) or die('Error');
	mysqli_close($connect);
?>
<table class="items table">
	<thead>
	<tr>
		<th id="yw0_c0">User_Name</th>
		<th id="yw0_c0">Tser_enr_Time</th>
		<th id="yw0_c4">Manege</th>
	</thead>
	<tbody>
<?php while ($users = mysqli_fetch_array($data)) {
	$html_user_name = htmlspecialchars($users['DWVS_user_name']);
	$html_tiem = htmlspecialchars($users['DWVS_user_enr_time']);
?>
	<tr class="odd">
		<td><?php echo $html_user_name;?></td>
		<td><?php echo $html_tiem;?></td>
		<td><a href="delUser.php?id=<?php echo $users['DWVS_user_id'];?>"><button type="button" class="btn btn-danger">删除</button></a></td>
	</tr>
<?php } ?>
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