<?php
include_once('connect.php');

$action = $_REQUEST['action'];
$amt = 50;
switch($action)
{
	case 'pubgsquadid':

		$pubgid1 = $_REQUEST['pubgid1'];
        $pubgid2 = $_REQUEST['pubgid2'];
        $pubgid3 = $_REQUEST['pubgid3'];
        $pubgid4 = $_REQUEST['pubgid4'];
		
		if($pubgid1 != 0 && $pubgid2!=0 && $pubgid3!=0 && $pubgid4!=0)
		{
			
            //id1
            $flag=0;
            $sql = " SELECT * FROM MRD WHERE ID='$pubgid1' ";
        	$result = $pdoconn->prepare($sql);
        	$result->execute();
        	$row = $result->fetchAll(PDO::FETCH_ASSOC);
            if(count($row)>0)
            {
            	
                $flag = 1;
                
            }
            else
            {
            	echo "Not Registered ID NO".$pubgid1;
            }

            //ID2
            $flag=0;
            $sql = " SELECT * FROM MRD WHERE ID='$pubgid2' ";
            $result = $pdoconn->prepare($sql);
            $result->execute();
            $row = $result->fetchAll(PDO::FETCH_ASSOC);
            if(count($row)>0)
            {
                $flag = 1;
                
            }
            else
            {
                echo "Not Registered ID NO".$pubgid2;
            }

            //ID3
            $flag=0;
            $sql = " SELECT * FROM MRD WHERE ID='$pubgid3' ";
            $result = $pdoconn->prepare($sql);
            $result->execute();
            $row = $result->fetchAll(PDO::FETCH_ASSOC);
            if(count($row)>0)
            {
                $flag = 1;
                
            }
            else
            {
                echo "Not Registered ID NO".$pubgid3;
            }

            //ID4
            $flag=0;
            $sql = " SELECT * FROM MRD WHERE ID='$pubgid4' ";
            $result = $pdoconn->prepare($sql);
            $result->execute();
            $row = $result->fetchAll(PDO::FETCH_ASSOC);
            if(count($row)>0)
            {
               
                $flag = 1;
                
            }
            else
            {
                echo "Not Registered ID NO".$pubgid4;
            }



            if($flag == 1)
            {
                $sql1 = "INSERT INTO PUBGSQUAD(mem1,mem2,mem3,mem4,amt) VALUE('$pubgid1','$pubgid2','$pubgid3','$pubgid4','$amt')";
                $query  = $pdoconn->prepare($sql1);
                $query->execute();


                $sql2 = "SELECT * FROM PUBGSQUAD WHERE mem1='$pubgid1' AND mem2='$pubgid2' AND mem3='$pubgid3' AND mem4='$pubgid4' ";
                $query = $pdoconn->prepare($sql2);
                $query->execute();
                 $row = $query->fetchAll(PDO::FETCH_ASSOC);

                    foreach($row as $val)
                    {
                        $id = $val['TID'];
                        echo "PLAYER NO  : " .$id;
                        echo "<br>";
                        echo "Pay 200Rs. <br>";
                    }

               

            }

            else
            {
                echo "<br>Check All GIDs";
            }


        }
        else
        {

                
            echo "Field Is Empty";
        }
    }
?>