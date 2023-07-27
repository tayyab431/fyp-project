<?php
// Include database connection
include($path.'/db_connect.php'); // Make sure this file contains the database connection code

// Initialize variables
$userCount = 0;
$supplierCount = 0;

// Fetch user registration count
$userQuery = "SELECT COUNT(*) AS total_users FROM panel_user";
$userResult = mysqli_query($con, $userQuery);
if ($userResult) {
  $userData = mysqli_fetch_assoc($userResult);
  $userCount = $userData['total_users'];
} else {
  // Handle database query error
  echo "Error fetching user count: " . mysqli_error($con);
}

// Fetch supplier registration count
$supplierQuery = "SELECT COUNT(*) AS total_suppliers FROM manufacturers";
$supplierResult = mysqli_query($con, $supplierQuery);
if ($supplierResult) {
  $supplierData = mysqli_fetch_assoc($supplierResult);
  $supplierCount = $supplierData['total_suppliers'];
} else {
  // Handle database query error
  echo "Error fetching supplier count: " . mysqli_error($con);
}
?>