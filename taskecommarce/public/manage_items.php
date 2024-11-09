<?php
include '../includes/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $description = $_POST['item_description'];
    $image = $_POST['item_image'];
    $total_number = $_POST['item_total_number'];

    $query = "INSERT INTO `Items` (`item_description`, `item_image`, `item_total_number`) VALUES (?, ?, ?)";
    
    $statement = $dbconnection->prepare($query);
    $statement->execute([$description, $image, $total_number]);
    header("Location: manage_items.php");
    exit; 
}

$query = "SELECT * FROM Items WHERE deleted_at IS NULL";
$items = $dbconnection->query($query)->fetchAll(PDO::FETCH_ASSOC);

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $stmt = $dbconnection->prepare("UPDATE Items SET deleted_at = NOW() WHERE item_id = ?");
    $stmt->execute([$id]);
    header("Location: manage_items.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manage Items</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">Manage Items</h1>

    <form method="POST" class="mb-4">
        <div class="form-group">
            <label for="item_description">Description</label>
            <input type="text" class="form-control" name="item_description" placeholder="Description" required>
        </div>
        <div class="form-group">
            <label for="item_image">Image URL</label>
            <input type="text" class="form-control" name="item_image" placeholder="Image URL" required>
        </div>
        <div class="form-group">
            <label for="item_total_number">Total Number</label>
            <input type="number" class="form-control" name="item_total_number" placeholder="Total Number" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Item</button>
    </form>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Description</th>
                <th>Image</th>
                <th>Total Number</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($items as $item): ?>
                <tr>
                    <td><?= htmlspecialchars($item['item_id']) ?></td>
                    <td><?= htmlspecialchars($item['item_description']) ?></td>
                    <td><img src="<?= htmlspecialchars($item['item_image']) ?>" alt="Item Image" width="50"></td>
                    <td><?= htmlspecialchars($item['item_total_number']) ?></td>
                    <td>
                        <a href="?delete=<?= htmlspecialchars($item['item_id']) ?>" class="btn btn-danger btn-sm">Delete</a>
                    </td>
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
