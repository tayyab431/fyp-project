<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();

if (!isset($_SESSION['started'])) {
    $_SESSION['started'] = true;
    echo "Session started successfully";
}


// Database connection details
$host = '172.17.0.2';
$db = 'clothdatabase';
$user = 'root';
$password = '786110';

try {
    $con = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}



// Handle logout
if (isset($_GET['logout']) && $_GET['logout'] === '1') {
    echo "<script>alert('Are you logging out')</script>";
    echo "<script>window.location.href = '../Home-page.php';</script>";
    // Unset all session variables
    $_SESSION = array();
  
    // Destroy the session
    session_destroy();
    
    
  
   

    
  
  }
  
?>
