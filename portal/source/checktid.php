<?php
include_once('connect.php');

$action = $_REQUEST['action'];
switch($action)
{
	case 'checktid':

		$chkid = $_REQUEST['idchk'];
		$domain = $_REQUEST['domain'];
		if($chkid != 0)
		{
			
			

			//mem1
			$sql="SELECT * FROM RD WHERE mem1 = '$chkid' AND domain = '$domain' ";
			$result = $pdoconn->prepare($sql);
            $result->execute();
            $row = $result->fetchAll(PDO::FETCH_ASSOC);

            foreach($row as $val)
                {
                    $id = $val['TID'];
                    echo "This ID is with TEAM ID: T" .$id;
                    echo "<br>";
                }


            //mem2
            $sql="SELECT * FROM RD WHERE mem2 = '$chkid' AND domain = '$domain' ";
			$result = $pdoconn->prepare($sql);
            $result->execute();
            $row = $result->fetchAll(PDO::FETCH_ASSOC);

            foreach($row as $val)
                {
                    $id = $val['TID'];
                    echo "This ID is with TEAM ID: T" .$id;
                    echo "<br>";
                }


            //mem3
            $sql="SELECT * FROM RD WHERE mem3 = '$chkid' AND domain = '$domain' ";
			$result = $pdoconn->prepare($sql);
            $result->execute();
            $row = $result->fetchAll(PDO::FETCH_ASSOC);

            foreach($row as $val)
                {
                    $id = $val['TID'];
                    echo "This ID is with TEAM ID: T" .$id;
                    echo "<br>";
                }


            //mem4
            $sql="SELECT * FROM RD WHERE mem4 = '$chkid' AND domain = '$domain' ";
			$result = $pdoconn->prepare($sql);
            $result->execute();
            $row = $result->fetchAll(PDO::FETCH_ASSOC);

            foreach($row as $val)
                {
                    $id = $val['TID'];
                    echo "This ID is with TEAM ID: T" .$id;
                    echo "<br>";
                }


            //mem5
            $sql="SELECT * FROM RD WHERE mem5 = '$chkid' AND domain = '$domain' ";
			$result = $pdoconn->prepare($sql);
            $result->execute();
            $row = $result->fetchAll(PDO::FETCH_ASSOC);

            foreach($row as $val)
                {
                    $id = $val['TID'];
                    echo "This ID is with TEAM ID: T" .$id;
                    echo "<br>";
                }

		}
}
?>