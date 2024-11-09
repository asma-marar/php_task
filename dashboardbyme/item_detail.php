<?php 
include('db_board_conn.php');

// Check if the category_id is set in the URL
if (isset($_GET['id'])) {
    $item_id = $_GET['id'];
     

    $query = "SELECT `item_id`, `item_image`,`item_description`,`item_total_number` FROM `user_item` WHERE `item_id`= :item_id";

    $items = $connection->prepare($query);
    $items->bindParam(':item_id', $item_id, PDO::PARAM_INT);
    $items->execute();
    $products=$items->fetchAll(PDO::FETCH_ASSOC);
   print_r($products);

}


    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item Details</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 20px;
        }

        .item-detail {
            display: flex;
            max-width: 1000px;
            margin: auto;
            background: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .item-image {
            flex: 1;
            max-width: 400px;
            margin-right: 20px;
        }

        .item-image img {
            width: 100%;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .item-info {
            flex: 2;
        }

        .item-info h2 {
            color: #333;
            font-size: 2em;
            margin-bottom: 10px;
        }

        .item-info p {
            font-size: 1.1em;
            color: #666;
            margin-bottom: 20px;
        }

        .quantity-container {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .quantity-container input {
            width: 50px;
            text-align: center;
            padding: 10px;
            font-size: 1.1em;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin: 0 10px;
        }

        .quantity-container button {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 10px 15px;
            font-size: 1.1em;
            cursor: pointer;
            border-radius: 5px;
            transition: background 0.3s;
        }

        .quantity-container button:hover {
            background-color: #2980b9;
        }

        .btn-add-to-cart {
            display: inline-block;
            background-color: #2ecc71;
            color: white;
            padding: 12px 25px;
            font-size: 1.2em;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .btn-add-to-cart:hover {
            background-color: #27ae60;
        }

        .out-of-stock {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>


    <div class="item-detail">
        <div class="item-image">
       <?php
        if (count($products) == 0) {
            echo "<tr><td colspan='5'>Empty</td></tr>";
        } else {
            foreach ($products as $item) {
               echo "
            <!-- Replace with dynamic data from the database -->
            <img src='{$item['item_image']}' alt='{$item['item_description']}'>";
        }}
?>
        </div>

        <div class="item-info">

        <?php
        if (count($products) == 0) {
            echo "<tr><td colspan='5'>Empty</td></tr>";
        } else {
            foreach ($products as $item) {
                echo "
            <h2>'{$item['item_id']}'</h2>
            <p>'{$item['item_description']}'</p>";
        }}
        ?>

            <!-- Quantity controls with dynamic stock limit from database -->
            <div class="quantity-container">
                <button id="minus-btn">-</button>
                <input type="number" id="quantity" value="1" min="1" max="10">
                <button id="plus-btn">+</button>
                <span id="stock-warning" class="out-of-stock" style="display:none;">Cannot add more than available stock!</span>
            </div>

            <!-- Add to Cart button -->
            <button class="btn-add-to-cart" id="addToCart">Add to Cart</button>
        </div>
    </div>;



    <script>
        // Simulating the total stock from database
        <?php
        if (count($products) == 0) {
            echo "<tr><td colspan='5'>Empty</td></tr>";
        } else {
            foreach ($products as $item) {
                echo "
        const totalStock = '{$item['item_total_number']}'";
        }}
        ?>


        const quantityInput = document.getElementById('quantity');
        const minusBtn = document.getElementById('minus-btn');
        const plusBtn = document.getElementById('plus-btn');
        const stockWarning = document.getElementById('stock-warning');

        // Minus button click event
        minusBtn.addEventListener('click', function () {
            let currentQuantity = parseInt(quantityInput.value);
            if (currentQuantity > 1) {
                quantityInput.value = currentQuantity - 1;
                stockWarning.style.display = 'none';  // Hide stock warning
            }
        });

        // Plus button click event
        plusBtn.addEventListener('click', function () {
            let currentQuantity = parseInt(quantityInput.value);
            if (currentQuantity < totalStock) {
                quantityInput.value = currentQuantity + 1;
                stockWarning.style.display = 'none';  // Hide stock warning
            } else {
                stockWarning.style.display = 'block';  // Show stock warning
            }
        });

        // Add to Cart button click event
        document.getElementById('addToCart').addEventListener('click', function () {
            let currentQuantity = parseInt(quantityInput.value);
            if (currentQuantity <= totalStock) {
                alert(`You added ${currentQuantity} items to the cart.`);
                // Perform your add-to-cart operation here, e.g., AJAX to add items to the cart in your backend
            } else {
                stockWarning.style.display = 'block';  // Show stock warning
            }
        });
    </script>

</body>
</html>
