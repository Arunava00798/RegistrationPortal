<?php

$host = "localhost";
$name= "root";
$password = "";
$database = "portal";

try {
    $pdoconn = new PDO("mysql:host=$host; dbname=$database", $name, $password);

}
catch(PDOException $e)
{
    die("Can not access DB ".$database.", ".$e->getMessage());
}
?>


