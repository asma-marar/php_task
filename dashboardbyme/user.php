<?php 
include('db_board_conn.php');

if (isset($_POST['add_user'])) {
    $name = $_POST['myName'];
    $mobile = $_POST['mymobile'];
    $email = $_POST['myemail'];
    $address = $_POST['myadd'];

    $query = "INSERT INTO `user_table` (`user_name`, `user_mobile`, `user_email`, `user_address`) VALUES (:username, :usermobile, :useremail, :useraddress)";
    $statement = $connection->prepare($query);

    $data = [
        'username' => $name,
        'usermobile' => $mobile,
        'useremail' => $email,
        'useraddress' => $address
    ];

    $statement->execute($data);
    header('location:user.php'); // Redirect after adding user
    exit; // Ensure no further code is executed
}

// Fetch only non-deleted users
$query = "SELECT * FROM `user_table` WHERE is_deleted = 0";
$users = $connection->prepare($query);
$users->execute();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
</head>
<body>

<form action="" method="post">
    <label for="myname">User Name</label><br>
    <input type="text" name="myName" placeholder="Enter your name" required>
    <br><br>

    <label for="mymobile">User Mobile</label><br>
    <input type="text" name="mymobile" placeholder="Enter your mobile phone" required>
    <br><br>

    <label for="myemail">User Email</label><br>
    <input type="email" name="myemail" placeholder="Enter your email" required>
    <br><br>

    <label for="myadd">User Address</label><br>
    <input type="text" name="myadd" placeholder="Enter your address" required>
    <br><br>
    
    <input type="submit" value="Submit" name="add_user">
</form>

<table>
    <thead>
        <tr>
            <td>User Name</td>
            <td>User Mobile</td>
            <td>User Email</td>
            <td>User Address</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
        <?php 
        if ($users->rowCount() == 0) {
            echo "<tr><td colspan='5'>Empty table</td></tr>";
        } else {
            foreach ($users as $user) {
                echo "
                <tr>
                    <td>{$user['user_name']}</td>
                    <td>{$user['user_mobile']}</td>
                    <td>{$user['user_email']}</td>
                    <td>{$user['user_address']}</td>
                    <td>
                        <a href='./feature/update.php?id={$user['user_id']}' class='btn'>Edit</a>
                        <a href='./feature/delete.php?id={$user['user_id']}' class='btn'>Delete</a>
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
