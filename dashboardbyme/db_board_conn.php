<?php

$server="localhost";
$username="root";
$password="";
$dbname="db_board";

$dsn="mysql:host=$server;dbname=$dbname";

try{
    $connection=new PDO ($dsn,$username,$password);
    
    // echo "connect";
    
    }catch (PDOException $error){
    echo $error;
    }
    
    
    ?>
