<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Database connection details
$host = '172.18.0.2';
$db = 'clothdatabase';
$user = 'root';
$password = '786110';

try {
    $con = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

if (isset($_POST['submit'])) {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $cnic = $_POST['cnic'];
    $unit_name = $_POST['u_name'];
    $unit_address = $_POST['address'];
    $registration_no = $_POST['number'];
    $link_account = $_POST['ID'];
    $acc_password = $_POST['fb_password'];
    $password = $_POST['user_password'];
    $confi_password = $_POST['confirm-password'];

    // Check if username already exists in database
    $nameStmt = $con->prepare("SELECT * FROM panel_users WHERE name = :name");
    $nameStmt->bindParam(':name', $name);
    $nameStmt->execute();
    if ($nameStmt->rowCount() > 0) {
        // Username already exists
        echo "<script>alert('Name already exists')</script>";
        echo "<script>window.location.href = 'signform.php';</script>";
        exit();
    }


    // Check if email or phone already exists in database
    $emailStmt = $con->prepare("SELECT * FROM panel_users WHERE email = :email");
    $emailStmt->bindParam(':email', $email);
    $emailStmt->execute();
    if ($emailStmt->rowCount() > 0) {
        // Email or phone already exists
        echo "<script>alert('Email already registered')</script>";
        echo "<script>window.location.href = 'signform.php';</script>";
        exit();
    }

    // Check if CNIC is valid
    if (!preg_match('/^\d{5}-\d{7}-\d{1}$/', $cnic)) {
        echo "<script>alert('CNIC is not valid')</script>";
        echo "<script>window.location.href = 'signform.php';</script>";
        exit();
    }

    // Check if unit name, unit address, registration number, or linked account already exists in database
    $checkStmt = $con->prepare("SELECT * FROM panel_users WHERE unit_name = :unit_name OR unit_address = :unit_address OR registration_no = :registration_no ");
    $checkStmt->bindParam(':unit_name', $unit_name);
    $checkStmt->bindParam(':unit_address', $unit_address);
    $checkStmt->bindParam(':registration_no', $registration_no);
    $checkStmt->execute();
    if ($checkStmt->rowCount() > 0) {
        // Unit name, unit address, registration number, or linked account already exists
        echo "<script>alert('Unit name, address, or registration already exists')</script>";
        echo "<script>window.location.href = 'signform.php';</script>";
        exit();
    }

    // Check if password and confirm password match
    if ($password !== $confi_password) {
        // Password and confirm password do not match
        echo "<script>alert('Password does not match')</script>";
        echo "<script>window.location.href = 'signform.php';</script>";
        exit();
    }

    // Hash the password and confirm password
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
    $hashedConfPassword = password_hash($confi_password, PASSWORD_BCRYPT);

// Prepare the SQL statement for inserting data
$insertStmt = $con->prepare("INSERT INTO panel_users (id, name, email, phone, cnic, unit_name, unit_address, registration_no, link_acc, acc_password, hashed_password, confirm_password, user_type) VALUES (NULL, :name, :email, :phone, :cnic, :unit_name, :unit_address, :registration_no, :link_acc, :acc_password, :hashed_password, :conf_password, 'Manufacturer')");
$insertStmt->bindParam(':name', $name);
$insertStmt->bindParam(':email', $email);
$insertStmt->bindParam(':phone', $phone);
$insertStmt->bindParam(':cnic', $cnic);
$insertStmt->bindParam(':unit_name', $unit_name);
$insertStmt->bindParam(':unit_address', $unit_address);
$insertStmt->bindParam(':registration_no', $registration_no);
$insertStmt->bindParam(':link_acc', $link_account);
$insertStmt->bindParam(':acc_password', $acc_password);
$insertStmt->bindParam(':hashed_password', $hashedPassword);
$insertStmt->bindParam(':conf_password', $hashedConfPassword);

// Execute the statement and check for errors
if ($insertStmt->execute()) {
    echo "<script>alert('Data inserted successfully')</script>";
    echo "<script>window.location.href = 'signform.php';</script>";
} else {
    die($insertStmt->errorInfo());
}
}
?>
