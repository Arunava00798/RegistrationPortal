<?php

include_once("connect.php");
$action=$_REQUEST['action'];

switch($action){
    
    case 'generate':
        $tname=$_REQUEST['tname'];
        $domain=$_REQUEST['domain'];
        $event=$_REQUEST['event'];
        $amt=$_REQUEST['amt'];

        $id1 = $_REQUEST['id1'];
        $id2 = $_REQUEST['id2'];
        $id3 = $_REQUEST['id3'];
        $id4 = $_REQUEST['id4'];
        $id5 = $_REQUEST['id5'];

            if($event == "Robo Combo")
            {
                $sql1 = "INSERT INTO RD(tname,mem1,mem2,mem3,mem4,mem5,domain,event,amt) VALUE('$tname','$id1','$id2','$id3','$id4','$id5','$domain','Infinity War','50')";
                $query  = $pdoconn->prepare($sql1);
                $query->execute();

                $sql2 = "INSERT INTO RD(tname,mem1,mem2,mem3,mem4,mem5,domain,event,amt) VALUE('$tname','$id1','$id2','$id3','$id4','$id5','$domain','Terrestrial Terrain','50')";
                $query  = $pdoconn->prepare($sql2);
                $query->execute();

                $sql3 = "INSERT INTO RD(tname,mem1,mem2,mem3,mem4,mem5,domain,event,amt) VALUE('$tname','$id1','$id2','$id3','$id4','$id5','$domain','Robo Rugby','50')";
                $query  = $pdoconn->prepare($sql3);
                $query->execute();

                $sql3 = "INSERT INTO RD(tname,mem1,mem2,mem3,mem4,mem5,domain,event,amt) VALUE('$tname','$id1','$id2','$id3','$id4','$id5','$domain','Sputnik','50')";
                $query  = $pdoconn->prepare($sql3);
                $query->execute();


                    $sql = "SELECT * FROM RD WHERE tname = '$tname' AND event='Infinity War' AND mem1='$id1' AND mem2='$id2' AND mem3='$id3' AND mem4='$id4' AND mem5='$id5' AND amt='50' ORDER BY TID DESC LIMIT 0,1";
                    $result = $pdoconn->prepare($sql);
                    $result->execute();
                    $row = $result->fetchAll(PDO::FETCH_ASSOC);

                    foreach($row as $val)
                    {
                        $id = $val['TID'];
                        echo "TEAM ID: T" .$id."<br>";
                    }


                    $sql = "SELECT * FROM RD WHERE tname = '$tname' AND event='Terrestrial Terrain' AND mem1='$id1' AND mem2='$id2' AND mem3='$id3' AND mem4='$id4' AND mem5='$id5' AND amt='50' ORDER BY TID DESC LIMIT 0,1";
                    $result = $pdoconn->prepare($sql);
                    $result->execute();
                    $row = $result->fetchAll(PDO::FETCH_ASSOC);

                    foreach($row as $val)
                    {
                        $id = $val['TID'];
                        echo "TEAM ID: T" .$id."<br>";
                    }

                    $sql = "SELECT * FROM RD WHERE tname = '$tname' AND event='Robo Rugby' AND mem1='$id1' AND mem2='$id2' AND mem3='$id3' AND mem4='$id4' AND mem5='$id5' AND amt='50' ORDER BY TID DESC LIMIT 0,1";
                    $result = $pdoconn->prepare($sql);
                    $result->execute();
                    $row = $result->fetchAll(PDO::FETCH_ASSOC);

                    foreach($row as $val)
                    {
                        $id = $val['TID'];
                        echo "TEAM ID: T" .$id."<br>";
                    }

                    $sql = "SELECT * FROM RD WHERE tname = '$tname' AND event='Sputnik' AND mem1='$id1' AND mem2='$id2' AND mem3='$id3' AND mem4='$id4' AND mem5='$id5' AND amt='50'ORDER BY TID DESC LIMIT 0,1";
                    $result = $pdoconn->prepare($sql);
                    $result->execute();
                    $row = $result->fetchAll(PDO::FETCH_ASSOC);

                    foreach($row as $val)
                    {
                        $id = $val['TID'];
                        echo "TEAM ID: T" .$id."<br>";
                    }
            }


            else if($event === "Coding Combo")
            {

                $sql1 = "INSERT INTO RD(tname,mem1,mem2,mem3,mem4,mem5,domain,event,amt) VALUE('$tname','$id1','$id2','$id3','$id4','$id5','$domain','Code Nova','40')";
                $query  = $pdoconn->prepare($sql1);
                $query->execute();

                $sql2 = "INSERT INTO RD(tname,mem1,mem2,mem3,mem4,mem5,domain,event,amt) VALUE('$tname','$id1','$id2','$id3','$id4','$id5','$domain','Web-o-Philia','40')";
                $query  = $pdoconn->prepare($sql2);
                $query->execute();

                $sql3 = "INSERT INTO RD(tname,mem1,mem2,mem3,mem4,mem5,domain,event,amt) VALUE('$tname','$id1','$id2','$id3','$id4','$id5','$domain','Design-O-Static','40')";
                $query  = $pdoconn->prepare($sql3);
                $query->execute();

               

                    $sql = "SELECT * FROM RD WHERE tname = '$tname' AND event='Code Nova' AND mem1='$id1' AND mem2='$id2' AND mem3='$id3' AND mem4='$id4' AND mem5='$id5' AND amt='40' ORDER BY TID DESC LIMIT 0,1";
                    $result = $pdoconn->prepare($sql);
                    $result->execute();
                    $row = $result->fetchAll(PDO::FETCH_ASSOC);

                    foreach($row as $val)
                    {
                        $id = $val['TID'];
                        echo "TEAM ID: T" .$id."<br>";
                    }


                    $sql = "SELECT * FROM RD WHERE tname = '$tname' AND event='Web-o-Philia' AND mem1='$id1' AND mem2='$id2' AND mem3='$id3' AND mem4='$id4' AND mem5='$id5' AND amt='40' ORDER BY TID DESC LIMIT 0,1";
                    $result = $pdoconn->prepare($sql);
                    $result->execute();
                    $row = $result->fetchAll(PDO::FETCH_ASSOC);

                    foreach($row as $val)
                    {
                        $id = $val['TID'];
                        echo "TEAM ID: T" .$id."<br>";
                    }

                    $sql = "SELECT * FROM RD WHERE tname = '$tname' AND event='Design-O-Static' AND mem1='$id1' AND mem2='$id2' AND mem3='$id3' AND mem4='$id4' AND mem5='$id5' AND amt='40' ORDER BY TID DESC LIMIT 0,1";
                    $result = $pdoconn->prepare($sql);
                    $result->execute();
                    $row = $result->fetchAll(PDO::FETCH_ASSOC);

                    foreach($row as $val)
                    {
                        $id = $val['TID'];
                        echo "TEAM ID: T" .$id."<br>";
                    }

                    


            }


            

             else if($event === "Gaming Combo")
            {

                $sql1 = "INSERT INTO RD(tname,mem1,mem2,mem3,mem4,mem5,domain,event,amt) VALUE('$tname','$id1','$id2','$id3','$id4','$id5','$domain','FIFA 11','50')";
                $query  = $pdoconn->prepare($sql1);
                $query->execute();

                $sql2 = "INSERT INTO RD(tname,mem1,mem2,mem3,mem4,mem5,domain,event,amt) VALUE('$tname','$id1','$id2','$id3','$id4','$id5','$domain','NFS MW','50')";
                $query  = $pdoconn->prepare($sql2);
                $query->execute();

           
               

                    $sql = "SELECT * FROM RD WHERE tname = '$tname' AND event='FIFA 11' AND mem1='$id1' AND mem2='$id2' AND mem3='$id3' AND mem4='$id4' AND mem5='$id5' AND amt='50' ORDER BY TID DESC LIMIT 0,1";
                    $result = $pdoconn->prepare($sql);
                    $result->execute();
                    $row = $result->fetchAll(PDO::FETCH_ASSOC);

                    foreach($row as $val)
                    {
                        $id = $val['TID'];
                        echo "TEAM ID: T" .$id."<br>";
                    }


                    $sql = "SELECT * FROM RD WHERE tname = '$tname' AND event='NFS MW' AND mem1='$id1' AND mem2='$id2' AND mem3='$id3' AND mem4='$id4' AND mem5='$id5' AND amt='50' ORDER BY TID DESC LIMIT 0,1";
                    $result = $pdoconn->prepare($sql);
                    $result->execute();
                    $row = $result->fetchAll(PDO::FETCH_ASSOC);

                    foreach($row as $val)
                    {
                        $id = $val['TID'];
                        echo "TEAM ID: T" .$id."<br>";
                    }

                  

                    


            }



             else if($event === "Civil Combo")
            {

                $sql1 = "INSERT INTO RD(tname,mem1,mem2,mem3,mem4,mem5,domain,event,amt) VALUE('$tname','$id1','$id2','$id3','$id4','$id5','$domain','Setu Bandhan','75')";
                $query  = $pdoconn->prepare($sql1);
                $query->execute();

                $sql2 = "INSERT INTO RD(tname,mem1,mem2,mem3,mem4,mem5,domain,event,amt) VALUE('$tname','$id1','$id2','$id3','$id4','$id5','$domain','Track O Treasure','70')";
                $query  = $pdoconn->prepare($sql2);
                $query->execute();

              

               

                    $sql = "SELECT * FROM RD WHERE tname = '$tname' AND event='Setu Bandhan' AND mem1='$id1' AND mem2='$id2' AND mem3='$id3' AND mem4='$id4' AND mem5='$id5' AND amt='75' ORDER BY TID DESC LIMIT 0,1";
                    $result = $pdoconn->prepare($sql);
                    $result->execute();
                    $row = $result->fetchAll(PDO::FETCH_ASSOC);

                    foreach($row as $val)
                    {
                        $id = $val['TID'];
                        echo "TEAM ID: T" .$id."<br>";
                    }


                    $sql = "SELECT * FROM RD WHERE tname = '$tname' AND event='Track O Treasure' AND mem1='$id1' AND mem2='$id2' AND mem3='$id3' AND mem4='$id4' AND mem5='$id5' AND amt='75' ORDER BY TID DESC LIMIT 0,1";
                    $result = $pdoconn->prepare($sql);
                    $result->execute();
                    $row = $result->fetchAll(PDO::FETCH_ASSOC);

                    foreach($row as $val)
                    {
                        $id = $val['TID'];
                        echo "TEAM ID: T" .$id."<br>";
                    }

                  


            }





             else if($event === "Photography+Videography Combo")
            {

                $sql1 = "INSERT INTO RD(tname,mem1,mem2,mem3,mem4,mem5,domain,event,amt) VALUE('$tname','$id1','$id2','$id3','$id4','$id5','$domain','Photography','35')";
                $query  = $pdoconn->prepare($sql1);
                $query->execute();

                $sql2 = "INSERT INTO RD(tname,mem1,mem2,mem3,mem4,mem5,domain,event,amt) VALUE('$tname','$id1','$id2','$id3','$id4','$id5','$domain','Videography','35')";
                $query  = $pdoconn->prepare($sql2);
                $query->execute();

              

               

                    $sql = "SELECT * FROM RD WHERE tname = '$tname' AND event='Photography' AND mem1='$id1' AND mem2='$id2' AND mem3='$id3' AND mem4='$id4' AND mem5='$id5' AND amt='35' ORDER BY TID DESC LIMIT 0,1";
                    $result = $pdoconn->prepare($sql);
                    $result->execute();
                    $row = $result->fetchAll(PDO::FETCH_ASSOC);

                    foreach($row as $val)
                    {
                        $id = $val['TID'];
                        echo "TEAM ID: T" .$id."<br>";
                    }


                    $sql = "SELECT * FROM RD WHERE tname = '$tname' AND event='Videography' AND mem1='$id1' AND mem2='$id2' AND mem3='$id3' AND mem4='$id4' AND mem5='$id5' AND amt='35' ORDER BY TID DESC LIMIT 0,1";
                    $result = $pdoconn->prepare($sql);
                    $result->execute();
                    $row = $result->fetchAll(PDO::FETCH_ASSOC);

                    foreach($row as $val)
                    {
                        $id = $val['TID'];
                        echo "TEAM ID: T" .$id."<br>";
                    }

                  


            }



        

      
                 else
                 {
                    $sql1 = "INSERT INTO RD(tname,mem1,mem2,mem3,mem4,mem5,domain,event,amt) VALUE('$tname','$id1','$id2','$id3','$id4','$id5','$domain','$event','$amt')";
                    $query  = $pdoconn->prepare($sql1);
                    $query->execute();


                    $sql = "SELECT * FROM  RD WHERE tname = '$tname' AND event='$event' AND mem1='$id1' AND mem2='$id2' AND mem3='$id3' AND mem4='$id4' AND mem5='$id5' ORDER BY TID DESC LIMIT 0,1";
                    $result = $pdoconn->prepare($sql);
                    $result->execute();
                    $row = $result->fetchAll(PDO::FETCH_ASSOC);

                    foreach($row as $val)
                    {
                        $id = $val['TID'];
                        echo "TEAM ID: T" .$id;
                    }
    
                
            }    
            break;
        
    }
?>