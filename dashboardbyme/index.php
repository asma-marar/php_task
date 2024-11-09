
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="styles.css">
    <style>
    body {
    font-family: 'Arial', sans-serif;
    background-color: #f0f2f5;
    margin: 0;
    padding: 20px;
}

.dashboard {
    background: white;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    max-width: 800px;
    margin: auto;
}

h1 {
    color: #333;
    text-align: center;
}

nav {
    margin: 20px 0;
}

nav ul {
    list-style-type: none;
    padding: 0;
    text-align: center;
}

nav ul li {
    display: inline;
    margin: 0 15px;
}

nav ul li a {
    text-decoration: none;
    color: #3498db;
    padding: 10px 15px;
    border-radius: 5px;
    transition: background 0.3s, color 0.3s;
}

nav ul li a:hover {
    background: #3498db;
    color: white;
}

.content {
    text-align: center;
    margin-top: 20px;
}

.content h2 {
    color: #444;
}

.content p {
    color: #666;
    font-size: 1.1em;
}


    </style>
</head>
<body>
    <div class="dashboard">
        <h1>Admin Dashboard</h1>
        <nav>
            <ul>
                <li><a href="order.php">Manage Orders</a></li>
                <li><a href="item.php">Manage Items</a></li>
                <li><a href="user.php">Manage Users</a></li>
            </ul>
        </nav>
        <div class="content">
            <h2>Welcome to the Admin Dashboard</h2>
            <p>Select an option from the menu to get started.</p>
        </div>
    </div>
</body>
</html>
