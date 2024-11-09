<?php 
include('db_board_conn.php');

if (isset($_POST['add_items'])) {
    $des= $_POST['des'];
    $image = $_POST['image'];
    $number = $_POST['num'];
    $category = $_POST['category'];

    $query = "INSERT INTO `user_item`( `item_description`, `item_image`, `item_total_number` , `category_id`) VALUES (:item_description,:item_image,:item_total_number ,:category_id)";
    $statement = $connection->prepare($query);

    $data = [
        'item_description' => $des,
        'item_image' => $image,
        'item_total_number' => $number,
        'category_id' => $category
    ];

    $statement->execute($data);
    header('location:item.php'); // Redirect after adding user
    exit; // Ensure no further code is executed
}

// Fetch only non-deleted users
$query = "SELECT * FROM `user_item` WHERE is_deleted = 0";
$items = $connection->prepare($query);
$items->execute();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Items List</title>
</head>
<body>

<form action="" method="post">
    <label for="des">Description</label><br>
    <input type="text" name="des" placeholder="Enter your Description" required>
    <br><br>

    <label for="image">Image URL</label><br>
    <input type="text" name="image" placeholder="Enter your Image URL" required>
    <br><br>

    <label for="num">Total Number</label><br>
    <input type="number" name="num" placeholder="Enter your Number" required>
    <br><br>


    <label for="category">Category id</label><br>
    <input type="number" name="category" placeholder="Enter your Number" required>
    <br><br>
    
    
    <input type="submit" value="Add Item" name="add_items">
</form>

<table>
    <thead>
        <tr>
                <th>ID</th>
                <th>Description</th>
                <th>Image</th>
                <th>Total Number</th>
                <th>Category id</th>
                <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        if ($items->rowCount() == 0) {
            echo "<tr><td colspan='5'>Empty table</td></tr>";
        } else {
            foreach ($items as $item) {
                echo "
                <tr>
                    <td>{$item['item_id']}</td>
                    <td>{$item['item_description']}</td>
            <td><img src='{$item['item_image']}' alt='Item Image' style='max-width:100px; max-height:100px;'></td>
                    <td>{$item['item_total_number']}</td>
                    <td>{$item['category_id']}</td>
                    <td>
                        <a href='./feature/update_item.php?id={$item['item_id']}' class='btn'>Edit</a>
                        <a href='./feature/delete_item.php?id={$item['item_id']}' class='btn'>Delete</a>
                    </td>
                </tr>
                ";
            }
        }
        ?>
    </tbody>
</table>

</body>
</html>
