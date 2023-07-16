<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// Database connection details
session_start();

$host = '172.18.0.2';
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

// Function to sanitize user input
function sanitize($input) {
    return htmlspecialchars(trim($input), ENT_QUOTES, 'UTF-8');
}

if (isset($_POST['user_register'])) {
  $user_username = sanitize($_POST['user_name']);
  $user_email = sanitize($_POST['user_email']);
  $user_password = sanitize($_POST['user_password']);
  $user_conf_password = sanitize($_POST['confirm_password']);

  // Validate username format
  if (!preg_match('/^[a-zA-Z0-9]+$/', $user_username)) {
    echo "<script>alert('Invalid username format. Username should only contain alphanumeric characters.')</script>";
    echo "<script>window.location.href = 'login.php';</script>";
    exit();
  }

  // Remove spaces from username
  $user_username = str_replace(' ', '', $user_username);

  // Select query using PDO prepared statement
  $select_query = "SELECT * FROM user_table WHERE username = :username OR user_email = :email";
  $stmt = $con->prepare($select_query);
  $stmt->execute(['username' => $user_username, 'email' => $user_email]);
  $rows_count = $stmt->rowCount();

  if ($rows_count > 0) {
    echo "<script>alert('Username or email already exists')</script>";
    echo "<script>window.location.href = 'login.php';</script>";
  } else if ($user_password != $user_conf_password) {
    echo "<script>alert('Passwords do not match')</script>";
    echo "<script>window.location.href = 'login.php';</script>";
  } else {
    $hashed_password = password_hash($user_password, PASSWORD_BCRYPT);

    // Insert query using PDO prepared statement
    $insert_query = "INSERT INTO user_table (username, user_email, hashed_password) VALUES (:username, :email, :password)";
    $stmt = $con->prepare($insert_query);
    $stmt->execute(['username' => $user_username, 'email' => $user_email, 'password' => $hashed_password]);

    if ($stmt) {
      echo "<script>alert('Data inserted successfully')</script>";
      echo "<script>window.location.href = 'login.php';</script>";
    } else {
      die($con->errorInfo());
    }
  }
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Check if user is already logged in
  if (isset($_SESSION['username'])) {
    // Redirect to appropriate page based on user role
    if ($_SESSION['user_role'] === 'user') {
        echo "<script>alert('You are already logged in as a user.')</script>";
        echo "<script>window.location.href = 'user-interface/user_interface.php';</script>";
        exit();
    } elseif ($_SESSION['user_role'] === 'manufacturer') {
        echo "<script>alert('You are already logged in as a manufacturer.')</script>";
        echo "<script>window.location.href = 'manufacture-interface/manufacture_interface.php';</script>";
        exit();
    }
  }

  // Retrieve form data
  $username = sanitize($_POST['user_name']);
  $password = sanitize($_POST['user_password']);

  // Validate username format
  if (!preg_match('/^[a-zA-Z0-9]+$/', $username)) {
    echo "<script>alert('Invalid username format. Username should only contain alphanumeric characters.')</script>";
    echo "<script>window.location.href = '../login.php';</script>";
    exit();
  }

  // Remove spaces from username
  $username = str_replace(' ', '', $username);

  // Prepare the SQL statement for users
  $userStmt = $con->prepare("SELECT * FROM user_table WHERE username = :username");
  $userStmt->bindParam(':username', $username);
  $userStmt->execute();

  // Prepare the SQL statement for manufacturers
  $manufacturerStmt = $con->prepare("SELECT * FROM manufacturers WHERE username = :username");
  $manufacturerStmt->bindParam(':username', $username);
  $manufacturerStmt->execute();

  // Check if the user exists in the users table
  if ($userRow = $userStmt->fetch(PDO::FETCH_ASSOC)) {
      // Verify the password for users
      if (password_verify($password, $userRow['hashed_password'])) {
          // Set session variables for users
          $_SESSION['username'] = $userRow['username'];
          $_SESSION['user_role'] = 'user';

          // Redirect to the user interface
          echo "<script>alert('Welcome user.....')</script>";
          header("Location: user-interface/user_interface.php");
          exit();
      }
  }

  // Check if the user exists in the manufacturers table
  if ($manufacturerRow = $manufacturerStmt->fetch(PDO::FETCH_ASSOC)) {
      // Verify the password for manufacturers
      if (password_verify($password, $manufacturerRow['hashed_password'])) {
          // Set session variables for manufacturers
          $_SESSION['username'] = $manufacturerRow['username'];
          $_SESSION['user_role'] = 'manufacturer';
          $_SESSION['manufacturer_data'] = $manufacturerRow;

          // Redirect to the manufacturer interface
          echo "<script> alert('Welcome manufacturer.....') </script>";
          header("Location: manufacture-interface/manufacture_interface.php");
          exit();
      } else {
          echo "<script>alert('Invalid username or password')</script>";
          echo "<script>window.location.href = '../login.php';</script>";
          exit();
      }
  } else {
      echo "<script>alert('Invalid username or password')</script>";
      echo "<script>window.location.href = '../login.php';</script>";
      exit();
  }
}

// Handle logout
if (isset($_GET['logout']) && $_GET['logout'] === '1') {
  echo "<script>alert('Are you logging out')</script>";
  // Unset all session variables
  $_SESSION = array();

  // Destroy the session
  session_destroy();
}

// Rest of your code...

?>
