<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>User Dashboard</title>
</head>
<body>
    
<div class="container d-flex flex-column justify-content-center align-items-center vh-100">
        <div class="card text-center">
            <div class="card-body">
                <h2 class="card-title">Welcome!</h2>
                <p class="card-text">Hello, <strong><?= $userEmail; ?></strong></p>
                <p class="card-text">Thank you for joining us! Enjoy your stay.</p>

                <!-- Display Profile Image -->
                <img src="<?= $userImage; ?>" alt="Profile Image" class="img-fluid mb-3" style="max-width: 150px; border-radius: 50%;">

                <p>Here is your uploaded CV:</p>
                <a href="<?= $userCv; ?>" class="btn btn-primary" target="_blank">Download CV</a>
                <a href="logout.php" class="btn btn-warning">Logout</a>

            </div>
        </div>
    </div>
</body>
</html>