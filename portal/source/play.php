<?php

include_once("connect.php");
$action=$_REQUEST['action'];

switch($action){
    
    case 'play':
      
        $tid=$_REQUEST['tid'];
        $event =$_REQUEST['event'];


        $sql ="UPDATE `RD` SET `flag`=1 WHERE `tid`=$tid";;
        $result = $pdoconn->prepare($sql);
        $result->execute();
        echo "DONE";
        

            
       break;
    }
?>