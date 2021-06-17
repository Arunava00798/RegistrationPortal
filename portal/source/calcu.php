<?php

include_once("connect.php");
$action=$_REQUEST['action'];

switch($action){
    
    case 'check':
    	$id=0;
    	$event=$_REQUEST['event'];
    	$sql = "SELECT * FROM RD WHERE  event='$event'";
    	$result = $pdoconn->prepare($sql);
        $result->execute();
        $row = $result->fetchAll(PDO::FETCH_ASSOC);

        foreach($row as $val)
        {
            $id += $val['amt'];
            
        }
        echo $id;
    


    break;
}

?>