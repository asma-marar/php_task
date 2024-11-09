<?php 
include('../db_board_conn.php');

if (isset($_GET['id'])) {
    $userId = $_GET['id'];

    // Soft delete query
    $query = "UPDATE `category` SET is_deleted = 1 WHERE category_id = :category_id";
    $statement = $connection->prepare($query);
    $statement->execute(['category_id' => $userId]);

    header('Location: ../category.php');
}


?>
