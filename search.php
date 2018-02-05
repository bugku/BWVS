<?php
include_once('bwvs_config/sys_config.php');
require_once('header.php');
if (!empty($_GET['search'])) {
	$content = $_GET['search'];
	$clear_content = search_waf($content);
	$sql = "SELECT * FROM dwvs_message WHERE dwvs_message LIKE '%".$clear_content."%'";
	//echo $sql;
	$data = mysqli_query($connect,$sql);	
?>
<div class="bs-example table-responsive">
	<script type="text/javascript">
    	    var $str="<?php echo 'The result for ' .$clear_content.' is:'?>";
    	    document.write($str);
    </script>
	<table class="table table-striped table-hover ">
	<tr>
		<th>ID</th>
		<th>User</th>
		<th>Message</th>
		<th>Time</th>
	</tr>
<?php
while($com = mysqli_fetch_array($data)) {
	//净化输出变量 防护可以用htmlspecialchars()
	$html['mes_id'] = $com['DWVS_mes_id'];
	$html['user_name'] = $com['DWVS_mes_name'];
	$html['message'] = $com['dwvs_message'];
	$html['time'] = $com['DWVS_mes_time'];
	
	echo '<tr>';
	echo '<td>'.htmlspecialchars($html['mes_id']).'</td>';
	echo '<td>'.htmlspecialchars($html['user_name']).'</td>';
	echo '<td>'.htmlspecialchars($html['message']).'</td>';
	echo '<td>'.htmlspecialchars($html['time']).'</td>';
	echo '</tr>';
}
if (isset($_SESSION['user_name']))
{?>
	
</table>
</div>
<form action="messageSub.php" method="post" name="message" >
	<div class="col-lg-12" >
        <textarea class="form-control" rows="11" id="textArea" name="message" placeholder="在这里，写下你想说的话……"></textarea>
    </div>
    <div class="col-lg-12" style="margin-top:15px; height:40px; right:-946px">
    <input type="submit" name="submit" class="btn btn-primary " value="留言"/>
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp
	<a href="./user/user.php"><button type="button" class="btn btn-primary btn-danger">返回</button></a></div><br /><br /><br /><br /><br />
	</div>
</form>
<?php 
}
}
require_once('Trim.php');
?>