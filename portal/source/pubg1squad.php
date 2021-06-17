<?php
include_once('connect.php');
$action=$_REQUEST['action'];
switch($action)
{
	case 'pubg1':

		$pubg1=$_REQUEST['pubg1'];
		$pubgchicken = $_REQUEST['pubgchicken'];
		
		if($pubg1 != 0)
		{
			$sql = "SELECT * FROM PUBGSQUAD WHERE TID = '$pubg1'";
			$query = $pdoconn->prepare($sql);
            $query->execute();
            $row = $query->fetchAll(PDO::FETCH_ASSOC);

            foreach($row as $val)
            {
            	$id = $val['TID'];
            	echo "WINNER WINNER CHICKEN DINNER TO ".$id ;
			}


			$sql ="UPDATE `PUBGSQUAD` SET `amt`=50-$pubgchicken WHERE `TID`=$pubg1";
        	$result = $pdoconn->prepare($sql);
        	$result->execute();

        	
		}

}



?>