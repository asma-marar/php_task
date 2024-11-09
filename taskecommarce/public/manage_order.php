<?php
include '../includes/db.php';

// Fetch orders
$sql = "SELECT * FROM Orders WHERE deleted_at IS NULL";
$stmt = $conn->prepare($sql);
$stmt->execute();
$orders = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Handle order creation
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_order_id = $_POST['user_order_id'];
    $user_item_order_id = $_POST['user_item_order_id'];

    $stmt = $conn->prepare("INSERT INTO Orders (user_order_id, user_item_order_id) VALUES (?, ?)");
    $stmt->execute([$user_order_id, $user_item_order_id]);
    header("Location: manage_orders.php");
    exit();
}

// Soft delete order
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $stmt = $conn->prepare("UPDATE Orders SET deleted_at = NOW() WHERE order_id = ?");
    $stmt->execute([$id]);
    header("Location: manage_orders.php");
    exit();
}
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
    <button type="submit">Add Order</button>
</form>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>User ID</th>
            <th>Item ID</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($orders as $order): ?>
            <tr>
                <td><?= htmlspecialchars($order['order_id']) ?></td>
                <td><?= htmlspecialchars($order['user_order_id']) ?></td>
                <td><?= htmlspecialchars($order['user_item_order_id']) ?></td>
                <td><a href="?delete=<?= $order['order_id'] ?>">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>
