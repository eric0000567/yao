<?php
header("Content-Type:text/html; charset=utf-8");
include("../conn/mysql.inc.php"); 
	$id=$_GET["id"];
	$update=$_GET["update"];

	$sql = "UPDATE `subject` SET `subject`='$update' WHERE `id`='$id';";
	$result = mysql_query($sql) ;
	$sql = "select * from `subject`";
    $result = mysql_query($sql) ;
	echo "科目總表<br>";
		while($row = mysql_fetch_assoc($result))
		{
			print_r($row);
			echo "<br>";
		}
		

?>