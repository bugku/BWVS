<?php
$host = 'localhost';
$database = 'dwvs';
$username = 'root';
$password = 'root';
$connection = mysql_connect($host, $username, $password);
mysql_query("set names 'utf8'");
if (!$connection) {
    die("could not connect to the database.\n" . mysql_error());
}
$selectedDb = mysql_select_db($database);
if (!$selectedDb) {
    die("could not to the database\n" . mysql_error());
}