<?php

include_once("connect.php");
$action=$_REQUEST['action'];

switch($action){
    
    case 'generate':
      
        $event=$_REQUEST['event'];

        $sql = " SELECT * FROM RD WHERE event='$event' AND flag=0";
        $result = $pdoconn->prepare($sql);
        $result->execute();
        $row = $result->fetchAll(PDO::FETCH_ASSOC);
        if(count($row)>0){
        	foreach($row as $val)
        	{
            	$id = $val['TID'];
            	echo "TEAM ID: T" .$id;
        	}
        }
        else
        {
        	echo "NO Registraion Found";
        }



            
       break;
    }
?>