<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>支付页面</title>
</head>
<body>
<?php 
	include_once('../../bwvs_config/sys_config.php');
	require_once('../header.php');
include('../conn.php');
$db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$sql = "SELECT rest FROM account";
$rest = intval($db->query($sql)->fetch_assoc()['rest']);
$sql = "SELECT own FROM account";
$own = intval($db->query($sql)->fetch_assoc()['own']);
echo "
<form action='' method='post'>
    余额：{$rest}元
    <br>
    支付<input type='text' name='money'>元获得1000QB<br>
    <input type='submit' value='支付'><br>
    系统现在有{$own}元
</form>
";
if ($_POST){
    $money = intval($_POST['money']);
    if($money <= $rest) {
        $sql = "UPDATE account SET rest=rest-".$money;
        $db->query($sql);
        $sql = "UPDATE account SET own=own+".$money;
        $db->query($sql);
        echo "<script>alert('支付成功');window.location.href=this.location.href</script>";
    } else {
        echo "支付失败，可能是因为您的余额不足。";
    }
}
?>
</body>
</html>
<br>
<br>
<br>
<br>
<?php 
require_once('../info.php');
?>