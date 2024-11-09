<?php 
include('../db_board_conn.php');

if (isset($_GET['id'])) {
    $userId = $_GET['id'];

    // Soft delete query
    $query = "UPDATE `user_item` SET is_deleted = 1 WHERE item_id = :itemid";
    $statement = $connection->prepare($query);
    $statement->execute(['itemid' => $userId]);

    header('Location: ../item.php');
}


?>
