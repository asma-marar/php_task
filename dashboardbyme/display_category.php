<?php 
include('db_board_conn.php');

// Check if the category_id is set in the URL
if (isset($_GET['id'])) {
    $category_id = $_GET['id'];
    //echo "test".$category_id;
    // SELECT user_item.item_image, user_item.item_description FROM user_item JOIN category ON user_item.category_id = category.category_id WHERE `category_id` = :category_id;

    $query = "SELECT user_item.item_id, user_item.item_image, user_item.item_description 
    FROM user_item 
    JOIN category ON user_item.category_id = category.category_id 
    WHERE category.category_id = :category_id";

    $items = $connection->prepare($query);
    $items->bindParam(':category_id', $category_id, PDO::PARAM_INT);
    $items->execute();
    $products=$items->fetchAll(PDO::FETCH_ASSOC);
    //print_r($products); // fetchAll if you expect multiple results
// print_r($items);

}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Items Page</title>
    <style>
    /* Use the same styles as the previous page */

    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f4f4f9;
        color: #333;
    }

    header,
    .hero,
    .categories,
    footer {
        /* Keep same styling as from the landing page */
    }

    .item-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 20px;
        padding: 40px 20px;
        background-color: #fff;
    }

    .item {
        background-color: #fff;
        border: 1px solid #dee2e6;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
        padding: 20px;
        text-align: center;
    }

    .item:hover {
        transform: scale(1.05);
    }

    .item img {
        width: 100%;
        height: 180px;
        object-fit: cover;
        margin-bottom: 15px;
    }

    .item h3 {
        font-size: 1.5em;
        margin-bottom: 15px;
    }

    .item p {
        font-size: 1em;
        margin-bottom: 15px;
    }

    .item button {
        padding: 10px;
        background-color: #007bff;
        border: none;
        color: white;
        cursor: pointer;
        border-radius: 50px;
        transition: background-color 0.3s ease;
    }

    .item button:hover {
        background-color: #0056b3;
    }
    </style>
</head>

<body>
    <header>
        <div class="logo">My Store</div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li>Categories</li>
                <li>About</li>
                <li>Contact</li>
            </ul>
        </nav>
        <input type="text" placeholder="Search...">
    </header>

    <section class="hero">
        <h1>Items in Selected Category</h1>
    </section>

    <section class="categories">
        <h2>Available Items</h2>
        <div class="item-grid">
            <?php
            if (count($products) == 0) {
                echo "<tr><td colspan='5'>Empty</td></tr>";
            } else {
                //print_r($products);
                foreach ($products as $item) {
                    echo "
                    <div class='item'>
                        <img src='{$item['item_image']}' alt='{$item['item_description']}'>
                        
                        <p>{$item['item_description']}</p>

                        <a href='item_detail.php?id=$item[item_id] class='btn btn-primary'>View Details</a>
                    </div>";
                }
            } 
            ?>
        </div>
    </section>

    <footer>
        <p>© 2024 My Store | <a href="#">Privacy Policy</a></p>
    </footer>
</body>

</html>