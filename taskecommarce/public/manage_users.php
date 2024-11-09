<?php
include("../includes/db.php");



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['user_name'];
    $mobile = $_POST['user_mobile'];
    $email = $_POST['user_email'];
    $address = $_POST['user_address'];

    $query = "INSERT INTO `users` (`user_name`, `user_mobile`, `user_email`, `user_address`) VALUES (:user_name, :user_mobile, :user_email, :user_address)";

    $statement = $dbconnection->prepare($query);

    

    $data = [
        'user_name' => $name,
        'user_email' => $email,
        'user_mobile' => $mobile,
        'user_address' => $address 
    ];
    $statement->execute($data);
    header("Location: manage_users.php");
    exit; 
}

$query = "SELECT * FROM users WHERE deleted_at IS NULL";
$users = $dbconnection->query($query)->fetchAll(PDO::FETCH_ASSOC);

// Handle user deletion
if (isset($_GET['delete'])) {
    $userId = $_GET['delete'];
    $deleteQuery = "UPDATE users SET deleted_at = NOW() WHERE user_id = ?";
    $deleteStmt = $dbconnection->prepare($deleteQuery);
    $deleteStmt->execute([$userId]);
    header("Location: manage_users.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manage Users</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container mt-5">
    <h1 class="mb-4">Manage Users</h1>

    <form method="POST" class="mb-4">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="user_name">Name</label>
                <input type="text" class="form-control" name="user_name" placeholder="Name" required>
            </div>
            <div class="form-group col-md-6">
                <label for="user_mobile">Mobile</label>
                <input type="text" class="form-control" name="user_mobile" placeholder="Mobile" required>
            </div>
        </div>
        <div class="form-group">
            <label for="user_email">Email</label>
            <input type="email" class="form-control" name="user_email" placeholder="Email" required>
        </div>
        <div class="form-group">
            <label for="user_address">Address</label>
            <textarea class="form-control" name="user_address" placeholder="Address"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Add User</button>
    </form>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Mobile</th>
                <th>Email</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= htmlspecialchars($user['user_id']) ?></td>
                    <td><?= htmlspecialchars($user['user_name']) ?></td>
                    <td><?= htmlspecialchars($user['user_mobile']) ?></td>
                    <td><?= htmlspecialchars($user['user_email']) ?></td>
                    <td><?= htmlspecialchars($user['user_address']) ?></td>
                    <td><a href="?delete=<?= $user['user_id'] ?>" class="btn btn-danger btn-sm">Delete</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>