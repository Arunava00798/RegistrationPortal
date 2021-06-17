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
			$sql = "SELECT * FROM PUBGSOLO WHERE gid = '$pubg1'";
			$query = $pdoconn->prepare($sql);
            $query->execute();
            $row = $query->fetchAll(PDO::FETCH_ASSOC);

            foreach($row as $val)
            {
            	$id = $val['gid'];
            	echo "WINNER WINNER CHICKEN DINNER TO ".$id ;
			}


			$sql ="UPDATE `PUBGSOLO` SET `amt`=50-$pubgchicken WHERE `gid`=$pubg1";
        	$result = $pdoconn->prepare($sql);
        	$result->execute();

        	
		}

}



?>