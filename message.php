<?php
include_once('./bwvs_config/sys_config.php');
require_once('header.php');

$sql = "SELECT * FROM dwvs_message ORDER BY DWVS_mes_id";
$data = mysqli_query($connect,$sql) or die('Error!!');
mysqli_close($connect);

?>
<div class="bs-example table-responsive">
	<table class="table table-striped table-hover ">
	<tr>
		<th>ID</th>
		<th>User</th>
		<th>Time</th>
		<th>Message</th>
	</tr>
<?php
while($com = mysqli_fetch_array($data)) {

	$html['mes_id'] = htmlspecialchars($com['DWVS_mes_id']);
	$html['user_name'] = htmlspecialchars($com['DWVS_mes_name']);
	$html['mes_time'] = htmlspecialchars($com['DWVS_mes_time']);
	$html['comment_text'] = $com['dwvs_message'];
	
	echo '<tr>';
	echo '<td>'.$html['mes_id'].'</td>';
	echo '<td>'.$html['user_name'].'</td>';
	echo '<td>'.$html['mes_time'].'</td>';
	echo '<td>'.$html['comment_text'].'</td>';
	echo '</tr>';
}
?>
</table>
</div>
<?php 
if (isset($_SESSION['user_name']))
{?>
<form action="messageSub.php" method="post" name="message" >
	<div class="col-lg-12" >
        <textarea class="form-control" rows="11" id="textArea" name="message" placeholder="在这里，写下你想说的话……"></textarea>
    </div>
    <div class="col-lg-12" style="margin-top:15px; height:40px; right:-946px">
    <input type="submit" name="submit" class="btn btn-primary " value="submit"/>
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp
	<a href="./user/user.php"><button type="button" class="btn btn-primary btn-danger">返回</button></a></div><br /><br /><br /><br /><br />
	</div>
</form>
<br />
<br />
<br />
<br />
<br />
<?php 
}
require_once('./Trim.php');
?>