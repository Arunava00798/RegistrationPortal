<?php

include_once('connect.php');

$action=$_REQUEST['action'];

switch($action){

    case 'save':

        $name=$_REQUEST['name'];
        $contact=$_REQUEST['contact'];
        $email=$_REQUEST['email'];
        $year=$_REQUEST['year'];
        $dob=$_REQUEST['dob'];
        $sex=$_REQUEST['sex'];
        

        // $sql = "SELECT name,contact,year,dob,sex,,email  FROM `MRD` WHERE email='$email'  ";
        // $query  = $pdoconn->prepare($sql);
        // $query->execute();
        // $arr_user = $query->fetchAll(PDO::FETCH_ASSOC);
        // if(count($arr_user)>0)
        // {
        //     //die('Duplicate Entry...');
        //     echo "Duplicate Entry";
        //     break;
        // }
        
     


        $sql = "INSERT INTO `MRD`(name,contact,year,dob,sex,email) VALUE('$name','$contact','$year','$dob','$sex','$email')";
        $query  = $pdoconn->prepare($sql);
        $query->execute();
        //echo "Recorded Inserted";
        

        
        $sql = "SELECT * FROM MRD WHERE email = '$email' ";
        $result = $pdoconn->prepare($sql);
        $result->execute();
        $row = $result->fetchAll(PDO::FETCH_ASSOC);
        foreach($row as $val)
        {
            $id = $val['ID'];
            echo "GENERAL ID: G  " . $id . "PAY 20rs.";
            echo "<br>";
        }
                        
              
           

        break;
    }


?>