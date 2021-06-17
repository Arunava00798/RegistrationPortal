<?php
include_once('connect.php');

$action = $_REQUEST['action'];
$amt = 50;
switch($action)
{
	case 'pubgid':

		$pubgid = $_REQUEST['pubgid'];
		
		if($pubgid != 0)
		{
			$sql = " SELECT * FROM MRD WHERE ID='$pubgid' ";
        	$result = $pdoconn->prepare($sql);
        	$result->execute();
        	$row = $result->fetchAll(PDO::FETCH_ASSOC);
            if(count($row)>0)
            {
            	$sql1 = "INSERT INTO PUBGSOLO(gid,amt) VALUE('$pubgid','$amt')";
                $query  = $pdoconn->prepare($sql1);
                $query->execute();

                $sql2 = "SELECT * FROM PUBGSOLO WHERE gid='$pubgid'";
                $query = $pdoconn->prepare($sql2);
                $query->execute();
                 $row = $query->fetchAll(PDO::FETCH_ASSOC);

                    foreach($row as $val)
                    {
                        $id = $val['ID'];
                        echo "PLAYER NO  : " .$id;
                        echo "<br>";
                        echo "Pay 50Rs. <br>";
                    }

            }
            else
            {
            	echo "Not Registered";
            }
        }
    }
?>