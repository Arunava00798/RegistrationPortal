<?php
include_once('connect.php');

$action=$_REQUEST['action'];
switch($action)
{
	case 'pubgteam':

		$pubgteam = $_REQUEST['teamname'];
		$sql = "UPDATE PUBGSOLO SET TNO=$pubgteam WHERE TNO=0";
		$query = $pdoconn->prepare($sql);
        $query->execute();

}
?>