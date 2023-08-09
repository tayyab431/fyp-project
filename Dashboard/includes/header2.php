<?php
include('functions.php');
// Show all PHP errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Check if 'login_user_id' and 'user_type' are set in the session and are not empty
if (isset($_SESSION['login_user_id']) && !empty($_SESSION['login_user_id']) && isset($_SESSION['user_type']) && !empty($_SESSION['user_type'])) {
    // Print the value of 'login_user_id'
    echo $_SESSION['login_user_id'];

    // Database connection details
    $host = '172.18.0.2';
    $dbname = 'clothdatabase';
    $username = 'root';
    $password = '786110';

    try {
        // Create a PDO instance
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Prepare and execute the SQL query based on user_type
        $id = $_SESSION['login_user_id'];
        $user_type = $_SESSION['user_type'];
        $cond = "AND id=$id AND user_type='$user_type'";
        $stmt = $pdo->prepare("SELECT * FROM panel_users WHERE 1 $cond");
        $stmt->execute();

        // Check if data exists in the result
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if (!empty($data)) {
            // Assuming there is only one row per user, you can directly access the first element
            $name = $data[0]['name'];

            // Fetch the profile image path and store it in the session variable
            $_SESSION['profile_image_path'] = $data[0]['profile_image_path'];

            // Process the data as needed
            // ...
        } else {
            echo "User data not found.";
        }
    } catch (PDOException $e) {
        echo "Error executing query: " . $e->getMessage();
    }
} else {
    // If 'login_user_id' or 'user_type' is not set in the session or is empty
    echo "Login user ID or user type not available in the session.";
}


  ?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Dashboard </title>
    <?php include ('cssinclude.php');?>
</head>
<body class="layout-boxed">
    <!-- BEGIN LOADER -->
 <div id="load_screen"> 
        <div class="loader">
         <div class="loader-content">
           <div class="spinner-grow align-self-center">

           </div>
         </div>
   </div>
</div>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    <div class="header-container container-xxl">
        <header class="header navbar navbar-expand-sm expand-header">

            <ul class="navbar-item theme-brand flex-row  text-center">
                
                <li class="nav-item theme-text">
                    <a href="index2.php" class="nav-link"><?=$_SESSION['name']?>
                    
                    </a>
                </li>
            </ul>
           

            <ul class="navbar-item flex-row ms-lg-auto ms-0 action-area">

                <li class="nav-item theme-toggle-item">
                    <a href="javascript:void(0);" class="nav-link theme-toggle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-moon dark-mode"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sun light-mode"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>
                    </a>
                </li>
               

                <li class="nav-item dropdown user-profile-dropdown  order-lg-0 order-1">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="avatar-container">
                            <div class="avatar avatar-sm avatar-indicators avatar-online">
                            <?php
    // Check if the session contains the profile image path
    if (isset($_SESSION['profile_image_path']) && !empty($_SESSION['profile_image_path'])) {
        $image_path = 'includes/profiles/' . $_SESSION['profile_image_path'];
        echo '<img alt="avatar" src="' . $image_path . '" class="rounded-circle">';
    } else {
        // If the profile image does not exist in the session, display the default placeholder image
        echo '<img alt="avatar" src="https://static.vecteezy.com/system/resources/previews/019/896/008/original/male-user-avatar-icon-in-flat-design-style-person-signs-illustration-png.png" class="rounded-circle">';
    }
    ?>
                            </div>
                        </div>
                    </a>
                    

                    <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                        <div class="user-profile-section">
                            <div class="media mx-auto">
                                <div class="emoji me-2">
                                    &#x1F44B;
                                </div>
                                <div class="media-body">
                                    <h5><?=$_SESSION['name']?></h5>
                                    
                                </div>
                            </div>
                        </div>
                      
                        <div class="dropdown-item">
                            <a href="includes/functions.php?logout=1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg> <span>Log Out</span>
                            </a>
                        </div>
                    </div>
                    
                </li>
            </ul>
        </header>
    </div>
    <!--  END NAVBAR  -->
    
    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <?php include ('sidebar2.php');?>
        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">
<div class="middle-content container-xxl p-0">

    <!--  BEGIN BREADCRUMBS  -->
    <div class="secondary-nav">
        <div class="breadcrumbs-container" data-page-heading="Analytics">
            <header class="header navbar navbar-expand-sm">
                <a href="javascript:void(0);" class="btn-toggle sidebarCollapse" data-placement="bottom">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
                </a>
                <div class="d-flex breadcrumb-content">
                    <div class="page-header">

                        <div class="page-title">
                        </div>
        
                        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../user-interface/user_interface.php">Back Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Customer</li>
                            </ol>
                        </nav>
        
                    </div>
                </div>
                
            </header>
        </div>
    </div>
    <!--  END BREADCRUMBS  -->
    
    <div class="row layout-top-spacing">