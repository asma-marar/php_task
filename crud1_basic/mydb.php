<?php 
$server="localhost";
$username="root";
$password="";
$dbname="asma";

$dsn= "mysql:host=$server;dbname=$dbname";

try{
    $connection= new PDO ($dsn,$username,$password);
    //echo "connect";
}
catch (PDOException $error){
    echo $error ;
}
?>