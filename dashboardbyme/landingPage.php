<?php 
include('db_board_conn.php');

$query = "SELECT * FROM `category` WHERE is_deleted = 0";
$categorys = $connection->prepare($query);
$categorys->execute();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Landing Page</title>
    <style>
        /* Reset default browser styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f9;
            color: #333;
        }

        /* Header Styles */
        header {
            background-color: #343a40;
            color: white;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        header .logo {
            font-size: 1.8em;
            font-weight: bold;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 20px;
        }

        nav ul li {
            cursor: pointer;
            transition: color 0.3s ease;
        }

        nav ul li:hover {
            color: #ccc;
        }

        header input[type="text"] {
            padding: 8px 15px;
            border-radius: 20px;
            border: none;
            outline: none;
            width: 200px;
        }

        /* Hero Section */
        .hero {
            background-image: url('hero-image.jpg');
            background-size: cover;
            background-position: center;
            padding: 100px 20px;
            color: white;
            text-align: center;
            position: relative;
            box-shadow: inset 0 0 0 1000px rgba(0, 0, 0, 0.4);
        }

        .hero h1 {
            font-size: 3em;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }

        .hero button {
            padding: 12px 30px;
            background-color: #28a745;
            border: none;
            color: white;
            font-size: 1.2em;
            cursor: pointer;
            border-radius: 50px;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .hero button:hover {
            background-color: #218838;
            transform: translateY(-5px);
        }

        /* Categories Section */
        .categories {
            padding: 50px 20px;
            text-align: center;
            background-color: #fff;
            color: #333;
        }

        .categories h2 {
            font-size: 2.5em;
            margin-bottom: 40px;
        }

        .category-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            padding: 0 20px;
        }

        .category {
            background-color: #fff;
            border: 1px solid #dee2e6;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        .category:hover {
            transform: scale(1.05);
        }

        .category img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }

        .category h3 {
            font-size: 1.5em;
            margin: 15px 0;
            padding: 0 10px;
        }

        .category p {
            padding: 0 10px 10px;
            font-size: 1em;
        }

        .category button {
            padding: 10px;
            background-color: #007bff;
            border: none;
            color: white;
            cursor: pointer;
            border-radius: 50px;
            margin: 10px;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .category button:hover {
            background-color: #0056b3;
            transform: translateY(-3px);
        }

        /* Footer Styles */
        footer {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 40px;
        }

        footer p {
            margin: 0;
        }

        footer a {
            color: #bbb;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        footer a:hover {
            color: white;
        }

    </style>
</head>
<body>
    <header>
        <div class="logo">My Store</div>
        <nav>
            <ul>
                <li>Home</li>
                <li>Categories</li>
                <li>About</li>
                <li>Contact</li>
            </ul>
        </nav>
        <input type="text" placeholder="Search...">
    </header>

    <section class="hero">
        <h1>Explore Our Categories</h1>
        <button>Shop Now</button>
    </section>

    <section class="categories">
        <h2>Categories</h2>
        <br>
        <div class="category-grid">
            <?php 
                if ($categorys->rowCount() == 0) {
                    echo "<p>No categories available.</p>";
                } else {
                    foreach ($categorys as $category) {
                        echo "
                        <div class='category'>
                            <h3>{$category['category_name']}</h3>
                            <p>{$category['category_description']}</p>

                            <a href='display_category.php?id=$category[category_id] class='btn btn-primary'>View Item</a>
             
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
