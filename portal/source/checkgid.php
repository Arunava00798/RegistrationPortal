<?php
include_once('connect.php');

$action=$_REQUEST['action'];
switch($action)
{
	case 'checkgid':


		$chkid = $_REQUEST['idchk'];
		if($chkid != 0)
		{
			$sql="SELECT * FROM MRD WHERE ID = '$chkid' ";
			$result = $pdoconn->prepare($sql);
            $result->execute();
            $row = $result->fetchAll(PDO::FETCH_ASSOC);
            if(count($row)>0)
            {
            	echo "Already Registered";
            }
            else
            {
            	echo "Not Registered";
            }
	}
}
?>