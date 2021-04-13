<?php
header("Content-Type:text/html; charset=utf-8");
header('Access-Control-Allow-Origin: *'); 
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
header('Access-Control-Max-Age: 1000');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token, Authorization');
$hostname = "127.0.0.1";
$database = "yao";
$username = "root";
$password = "";
$ttc_cable = mysqli_connect($hostname, $username, $password, $database) or trigger_error(mysqli_error(),E_USER_ERROR); 
if (!$ttc_cable)
	{
		die('無法連線: ' . mysql_error());
	}
mysqli_query($ttc_cable,'SET NAMES UTF8');
if(!mysqli_select_db($ttc_cable,$database))
	{
		die("無法使用資料庫");
	}

?>