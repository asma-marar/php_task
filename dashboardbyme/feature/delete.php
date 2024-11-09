<?php 
include('../db_board_conn.php');

if (isset($_GET['id'])) {
    $userId = $_GET['id'];

    // Soft delete query
    $query = "UPDATE `user_table` SET is_deleted = 1 WHERE user_id = :userid";
    $statement = $connection->prepare($query);
    $statement->execute(['userid' => $userId]);

    header('Location: ../user.php');
}


?>
