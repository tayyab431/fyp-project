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
    //header("Location: user_interface.php");
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

function get($table, $condition = null, $col = '*')
{
    global $con;

    $query_text = "SELECT $col FROM $table WHERE 1=1 $condition";

    try {
        $stmt = $con->prepare($query_text);
        $stmt->execute();

        $data = array();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $data[] = $row;
        }

        return $data;
    } catch (PDOException $e) {
        echo "Error executing query: " . $e->getMessage();
        return false;
    }
}

// Retrieve form data
$email = trim($_POST['email']); // Trim leading and trailing spaces
$password = trim($_POST['password']); // Trim leading and trailing spaces

// Prepare the SQL statement for login
$loginStmt = $con->prepare("SELECT * FROM panel_users WHERE email = :email");
$loginStmt->bindParam(':email', $email);
$loginStmt->execute();

// Check if the user exists in the database
if ($userRow = $loginStmt->fetch(PDO::FETCH_ASSOC)) {
    // Verify the password
    if (password_verify($password, $userRow['hashed_password'])) {
        // Set session variables
        $_SESSION['name'] = $userRow['name'];
        $_SESSION['email'] = $userRow['email'];
        $_SESSION['login_user_id'] = $userRow['id'];
        $_SESSION['user_type'] = $userRow['user_type'];
       // After successful login
      $_SESSION['logged_in'] = true;
        // Redirect based on user type
        if ($_SESSION['user_type'] === 'Customer') {
            // Automatically add customer to the chat room
            $cust = $_SESSION['login_user_id'];
            $menu = null; // As customer does not need the $menu variable

            // ... previous code to check and create chat room ...

            // Redirect to the customer interface
            echo "<script>alert('Welcome user.....')</script>";
            echo "<script>window.location.href = 'user-interface/user_interface.php';</script>";
            exit();
        } elseif ($_SESSION['user_type'] === 'Manufacturer') {
            // Redirect to the manufacturer interface
            echo "<script>alert('Welcome manufacturer.....')</script>";
            echo "<script>window.location.href = 'manufacture-interface/manufacture_interface.php';</script>";
            exit();
        }
    }
}

// Invalid username or password
echo "<script>alert('Invalid username or password')</script>";
echo "<script>window.location.href = 'login.php';</script>";
exit();
?>
