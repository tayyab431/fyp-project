<?php


// Database connection details
$host = '172.17.0.2';
$db = 'clothdatabase';
$user = 'root';
$password = '786110';

try {
    $con = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    //header("Location: user_interface.php");
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}


?>

 