<?php 
include('db_board_conn.php');

if (isset($_POST['add_orders'])) {

    $orderuserid= $_POST['user_order_id'];
    $orderitemid = $_POST['user_item_order_id'];

    $query = "INSERT INTO `order`(`user_order_id`, `user_item_order_id`) VALUES (:user_order_id,:user_item_order_id)";
    $statement = $connection->prepare($query);

    $data = [
        'user_order_id' => $orderuserid,
        'user_item_order_id' => $orderitemid,
    ];

    $statement->execute($data);

    header('location:order.php'); // Redirect after adding user
    exit; 
}

// Fetch only non-deleted users
$query = "SELECT `order`.order_id, user_table.user_name, user_item.item_description, user_item.item_image
FROM `order`
JOIN user_item ON user_item.item_id = `order`.user_item_order_id
JOIN user_table ON user_table.user_id = `order`.user_order_id;
";
$orders = $connection->prepare($query);
$orders->execute();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manage Orders</title>
</head>
<body>
<h1>Manage Orders</h1>

<form method="POST">
    <input type="number" name="user_order_id" placeholder="User ID" required>
    <input type="number" name="user_item_order_id" placeholder="Item ID" required>
    <input type="submit" value="Add Order" name="add_orders">
</form>


<table>
    <thead>
        <tr>
            <th>Order ID</th>
            <th>User name</th>
            <th>Item Description</th>
            <th>Iteam Image</th>
        </tr>
    </thead>

    <br>
    <br>
    <tbody>
    <?php 

        if ($orders->rowCount() == 0) {
            echo "<tr><td colspan='5'>Empty table</td></tr>";
        } else {
            foreach ($orders as $order) {
                echo "
                <tr>
                    <td>{$order['order_id']}</td>
                    <td>{$order['user_name']}</td>
                    <td>{$order['item_description']}</td>

                    <td><img src='{$order['item_image']}' alt='Item Image' style='max-width:100px; max-height:100px;'></td>
                </tr>
                ";
            }
        }
    ?>
    </tbody>
</table>
</body>
</html>