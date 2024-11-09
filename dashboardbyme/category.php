<?php 
include('db_board_conn.php');

if (isset($_POST['add_category'])) {
    $name = $_POST['Cname'];
    $des = $_POST['Cdescription'];
    

    $query = "INSERT INTO `category`( `category_name`, `category_description`) VALUES (:category_name,:category_description)";


    $statement = $connection->prepare($query);

    $data = [
        'category_name' => $name,
        'category_description' => $des
        
    ];

    $statement->execute($data);
    header('location:category.php'); // Redirect after adding user
    exit; // Ensure no further code is executed
}

// Fetch only non-deleted users
$query = "SELECT * FROM `category` WHERE is_deleted = 0";
$categorys = $connection->prepare($query);
$categorys->execute();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category List</title>
</head>
<body>

<form action="" method="post">
    <label for="Cname">Category Name</label><br>
    <input type="text" name="Cname" placeholder="Enter your Category name" required>
    <br><br>

    <label for="Cdescription">Category Description</label><br>
    <input type="text" name="Cdescription" placeholder="Enter your Category Description" required>
    <br><br>

    
    <input type="submit" value="Submit" name="add_category">
</form>
<br> 
<br>
<table>
    <thead>
        <tr>
            <td>Category Id </td>
            <td>Category Name</td>
            <td>Category Description</td>
            <th>Action</th>

        
        </tr>
    </thead>
    <tbody>
        <?php 
        if ($categorys->rowCount() == 0) {
            echo "<tr><td colspan='5'>Empty table</td></tr>";
        } else {
            foreach ($categorys as $category) {
                echo "
                <tr>
                    <td>{$category['category_id']}</td>
                    <td>{$category['category_name']}</td>
                    <td>{$category['category_description']}</td>
                    
                    <td>
                        <a href='./feature/update_category.php?id={$category['category_id']}' class='btn'>Edit</a>
                        <a href='./feature/delete_category.php?id={$category['category_id']}' class='btn'>Delete</a>
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
