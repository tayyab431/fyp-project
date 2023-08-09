<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// Start the session
session_start();
// Define and initialize the $path variable
$path = __DIR__;

// Include the functions.php file
include($path . '/functions.php');

// Assuming you have already established the database connection in $con
$uid = $_SESSION['login_user_id'];
$utype = $_SESSION['user_type'];

// Fetch data from panel_users where the user_id matches the logged-in user
$table = 'panel_users';
$condition = "AND user_type='Manufacturer'";
$data = get($table, $condition);

// Return the data as JSON
header('Content-Type: application/json');
echo json_encode($data);
?>
