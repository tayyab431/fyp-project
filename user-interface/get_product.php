<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
// Database connection details
$host = '172.18.0.2';
$db = 'clothdatabase';
$user = 'root';
$password = '786110';

try {
    $con = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully"; // Commenting out this line to prevent unnecessary output
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

$query = "SELECT `name`, `image` FROM `products`";
$stmt = $con->prepare($query);
$stmt->execute();

$products = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Return the products as JSON
header('Content-Type: application/json');
echo json_encode($products);
?>
