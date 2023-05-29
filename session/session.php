<?php
session_start(); // Start the session

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

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if user is already logged in
    if (isset($_SESSION['username'])) {
        echo "<script>alert('You are already logged in.')</script>";
        exit();
    }

   // Retrieve form data
   $username = $_POST['user_name'];
   $password = $_POST['user_password'];

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
           header("Location: user_interface.php");
           exit();
       }
   }

   // Check if the user exists in the manufacturers table
   if ($manufacturerRow = $manufacturerStmt->fetch(PDO::FETCH_ASSOC)) {
       // Compare the password for manufacturers
       if ($password === $manufacturerRow['password']) {
           // Set session variables for manufacturers
           $_SESSION['username'] = $manufacturerRow['username'];
           $_SESSION['user_role'] = 'manufacturer';
           $_SESSION['manufacturer_data'] = $manufacturerRow;

           // Redirect to the manufacturer interface
           header("Location: manufacture_interface.php");
           exit();
       }
   }

   // Invalid username or password
   $error = "Invalid username or password";
}

// Handle logout
if (isset($_GET['logout'])) {
   // Clear session variables
   session_unset();
   session_destroy();

   // Redirect to the Home page
   header("Location: Home-page.php");
   exit();
}
?>
