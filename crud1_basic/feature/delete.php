<?php
require('../mydb.php');

if (isset($_GET['id'])){
    $userId=$_GET['id'];

    $query="DELETE FROM `main` WHERE `id_of_user`=:user_id";

    $statement=$connection->prepare($query);

    $statement->bindParam('user_id',$userId,PDO::PARAM_INT);

    $statement->execute();
}



?>

