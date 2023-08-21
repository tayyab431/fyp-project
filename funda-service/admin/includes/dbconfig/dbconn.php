<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Database connection details
$host = '172.18.0.2';
$db = 'clothdatabase';
$user = 'root';
$password = '786110';

// Create a MySQLi connection
$con = new mysqli($host, $user, $password, $db);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}


// Handle logout
if (isset($_GET['logout']) && $_GET['logout'] === '1') {
    // Set a session variable to indicate that the user has logged out
    $_SESSION['logout_message'] = "Are you logging out";

    // Unset all session variables except for logged_in
    $logged_in = isset($_SESSION['logged_in']) ? $_SESSION['logged_in'] : false;
    $_SESSION = array();
    $_SESSION['logged_in'] = $logged_in;

    // Destroy the session
    session_destroy();

    // Clear the session cookie by setting it to expire in the past
    if (ini_get('session.use_cookies')) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000, $params['path'], $params['domain'], $params['secure'], $params['httponly']);
    }

    // Redirect to the Home page
    header('Location: ../../../Home-page.php');
    exit;
}
?>