<?php
session_start();
// Check if the user is logged in and is a manufacturer role
if (isset($_SESSION['user_role']) && $_SESSION['user_role'] === 'manufacturer') {
    // Retrieve manufacturer-specific data from the panel_users table using the login_user_id session variable
    $login_user_id = $_SESSION['login_user_id'];
    // Perform a query to fetch data from the panel_users table using the login_user_id
    // You can modify the query to retrieve specific columns you need
    $manufacturerData = get('panel_users', "AND id = $login_user_id");
    // Now $manufacturerData will contain the manufacturer-specific information, and you can display it on the page as needed
    // For example, to display the manufacturer's name:
    echo "Welcome, " . $manufacturerData[0]['name'];
} else {
    // If the user is not logged in or is not a manufacturer role, redirect them to the login page or any other appropriate page
    header("Location: login.php");
    exit();
}
?>
