<?php
 
if(isset($_POST['submit'])){
    $upload_name = $_FILES['file']['name'];
    $tempfile = $_FILES['file']['tmp_name'];
    $upload_ext = trim(get_extension($upload_name));
 
    $savefile = RandomString() . '.txt';
    if ($upload_ext == 'txt') {
            if(move_uploaded_file($tempfile,$savefile)) {
                die('Success upload. FileName: '.$savefile);
            }
            else {
                die('Upload failed..');
            }
    }
    else {
        die('You are not a txt file..');
    }
 
}
function get_extension($file){
    return strtolower(substr($file, strrpos($file, '.')+1));   
}
 
function RandomString()
{
    $characters = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $randstring = "";
    for ($i = 0; $i < 16; $i++) {
        $randstring .= $characters[rand(0, strlen($characters)-1)];
    }
    return $randstring;
}
 
// make a lfi vulnerability
$file = $_REQUEST['file'];
if ($file != '') {
    $inc = sprintf("%s.php", $file); // only php file can be included
    include($inc);
}
?>
 
 
<html>
    <body>
        <form method="post" action="#" enctype="multipart/form-data">
            <input type="file" name="file" value=""/>
            <input type="submit" name="submit" value="upload"/>
        </form>
    </body>
</html>