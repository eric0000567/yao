<?php
header("Content-Type:text/html; charset=utf-8");
include("../conn/mysql.inc.php"); 
    $requestMethod = $_SERVER['REQUEST_METHOD'];

    switch ($requestMethod){
    
    case 'GET':
        $sql = "select * from `about`";
        $result = mysqli_query($ttc_cable,$sql);
        $arr = array();
        while($row = mysqli_fetch_object($result))
        {
          array_push($arr, $row);
        }
        echo json_encode($arr,JSON_UNESCAPED_UNICODE); 
        break;
    
    case 'POST':
        $data =  file_get_contents('php://input');
        echo $data;
        break;
    
    case 'PUT':
        break;
        
    case 'DELETE':
        break;    
    }
    
    
	
?>