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

function get($table, $condition = null, $col = '*')
{
    global $con;

    $query_text = "SELECT $col FROM $table WHERE 1=1 $condition";
    $stmt = $con->prepare($query_text);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $result;
}

function has_valid_domain_dns($email)
{
    $domain = explode("@", $email)[1];
    return checkdnsrr($domain, "MX");
}

function is_valid_email($email)
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

if (isset($_POST['user_register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $user_conf_password = $_POST['confirm_password'];

    // Validate and sanitize input
    $name = trim($_POST['name']); // Trim leading and trailing spaces
 
    // ... repeat the same for other inputs if needed

    if (!is_valid_email($email)) {
        echo "<script>alert('Invalid email format.')</script>";
        echo "<script>window.location.href = 'login.php';</script>";
        exit();
    }

    // Additional validation: Check if the domain has valid DNS records
    if (!has_valid_domain_dns($email)) {
        echo "<script>alert('Invalid domain DNS records for the email.')</script>";
        echo "<script>window.location.href = 'login.php';</script>";
        exit();
    }


    // Select query using PDO prepared statement
    $select_query = "SELECT * FROM panel_users WHERE name = :name OR email = :email";
    $stmt = $con->prepare($select_query);
    $stmt->execute(['name' => $name, 'email' => $email]);
    $rows_count = $stmt->rowCount();

    if ($rows_count > 0) {
        echo "<script>alert('name or email already exists')</script>";
        echo "<script>window.location.href = 'login.php';</script>";
    } else if ($password != $user_conf_password) {
        echo "<script>alert('Passwords do not match')</script>";
        echo "<script>window.location.href = 'login.php';</script>";
    } else {
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

         // Insert query using PDO prepared statement
    $insert_query = "INSERT INTO panel_users (id, name, email, phone, confirm_password, hashed_password, user_type) VALUES (NULL, :name, :email, :phone, :password, :hashed_password, 'Customer')";
    $stmt = $con->prepare($insert_query);
    
    // Check the placeholders in the query and the array passed to execute()
    $execute_params = [
        'name' => $name,
        'email' => $email,
        'phone' => $phone,
        'password' => $hashed_password,
        'hashed_password' => $hashed_password
    ];

    $stmt->execute($execute_params);

    if ($stmt) {
        echo "<script>alert('Data inserted successfully')</script>";
        echo "<script>window.location.href = 'login.php';</script>";
    } else {
        die($con->errorInfo());
    }
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

        if ($userRow['user_type'] === 'Customer') {
            $_SESSION['user_type'] = 'Customer';
            // Redirect to the user interface
            echo "<script>alert('Welcome user.....')</script>";
            echo "<script>window.location.href = 'user-interface/user_interface.php';</script>";
            exit();
        } elseif ($userRow['user_type'] === 'Manufacturer') {
            $_SESSION['user_type'] = 'Manufacturer';
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

    if (isset($_SESSION['login_user_id'])) {
        $cust = $_SESSION['login_user_id'];
        $menu = $_GET['menu'];
        $date = date('Y-m-d');

        $cond = "AND u2=$cust AND u1=$menu";
        $cond2 = "AND u1=$cust AND u2=$menu";
        $data = get('chat_room', $cond);
        $data2 = get('chat_room', $cond2);
        if (empty($data) && empty($data2)) {
            $query = "INSERT INTO `chat_room`(`u1`, `u2`, `date`, `status`)
            VALUES ('$menu','$cust','$date',1)";
            $stmt = $con->prepare($query);
            $stmt->execute();
        }
    }

?>
