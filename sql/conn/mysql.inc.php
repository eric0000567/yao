<?php
header("Content-Type:text/html; charset=utf-8");
$hostname_ttc_cable = "127.0.0.1";
$database_ttc_cable = "yao";
$username_ttc_cable = "root";
$password_ttc_cable = "";
$ttc_cable = mysqli_connect($hostname_ttc_cable, $username_ttc_cable, $password_ttc_cable) or trigger_error(mysql_error(),E_USER_ERROR); 
if (!$ttc_cable)
	{
		die('無法連線: ' . mysql_error());
	}
mysqli_query($ttc_cable,'SET NAMES UTF8');
if(!mysqli_select_db($ttc_cable,$database_ttc_cable))
	{
		die("無法使用資料庫");
	}

?>