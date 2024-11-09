<?php
$host = "localhost";
$db = "admin_dashboard"; // Your database name
$user = "root"; // Your database username
$pass = ""; // Your database password

$dsn = "mysql:host=$host;dbname=$db";
try {
    $dbconnection = new PDO($dsn, $user, $pass);
    $dbconnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $error) {
    die("Connection failed: " . $error->getMessage());
}
?>
