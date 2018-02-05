<html>
<head>
    <meta charset="utf-8"/>
    <title>
        Bugku - 文件上传漏洞演示脚本
    </title>
</head>
<body>
<br>
<br>
<br>
<h3>Bugku - 文件上传漏洞演示脚本</h3><br/>
<form action="" method="post" enctype="multipart/form-data">
    <label for="file">文件:</label>
    <input type="file" name="file" id="file" />
    <input type="submit" name="submit" value="上传" />
</form>
</body>
</html>
<?php
include_once('../../bwvs_config/sys_config.php');
if (isset($_REQUEST['submit'])) {
    if ($_FILES["file"]["error"] > 0)
    {
        echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
    else
    {
        echo "Upload: " . $_FILES["file"]["name"] . "<br />";
        echo "Type: " . $_FILES["file"]["type"] . "<br />";
        echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
        if (file_exists("upload/" . $_FILES["file"]["name"]))
        {
            echo $_FILES["file"]["name"] . " already exists. ";
        }
        else
        {
            move_uploaded_file($_FILES["file"]["tmp_name"],
                "upload/" . $_FILES["file"]["name"]);
            echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
        }
    }
}

?>
<br>
<br>
<br>
<br>
<?php 
require_once('../info.php');
?>