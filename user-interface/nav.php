
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$path = dirname(__FILE__);

include($path . '/../language/lang.php');
include($path . '/../language/language-code.php');
include($path . '/../session/session.php');
function get($table, $condition = null, $col = '*')
{
    global $con;

    $query_text = "SELECT $col FROM $table WHERE 1=1 $condition";
    $stmt = $con->prepare($query_text);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $result;
}

if ($_SESSION['user_type'] == 'Customer') {
    $id = $_SESSION['login_user_id']; 
    $cond = "AND id=$id"; 
    $data = get('panel_users', $cond);

    // Check if data exists in the result
    if (!empty($data)) {
        // Assuming there is only one row per user, you can directly access the first element
        $name = $data[0]['name'];

        // Fetch the profile image path and store it in the session variable
        $_SESSION['profile_image_path'] = $data[0]['profile_image_path'];
    } else {
        echo "User data not found.";
    }
}


// Check if the logout message is set
if (isset($_SESSION['logout_message'])) {
    $message = $_SESSION['logout_message'];
    unset($_SESSION['logout_message']); // Clear the message after displaying it
}
?>




<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <title>Clothing barters</title>
    <link rel="icon" href="images/WHITE-COLOR-LOGO.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="../Home-page.css">
    <link rel="stylesheet" type="text/css" href="../product.css">
    <link href="http://fonts.googleapis.com/css?family=KaushanScript|Poppins&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/5c515fb3d0.js" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>     
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
     <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
</head>
<body>
<!---Header-->
<nav>
    <div class="nav-bar">
    <i class='bx bx-menu sidebarOpen'></i>
    <span class="logo navLogo"><a href="Home-page.php"><img id ="logo" src="../images/WHITE-COLOR-LOGO.png" alt="light logo"></a></span>
    <span class="logo navLogo"><a href="Home-page.php"><img id ="dark-logo" src="../images/BLACK-COLOR-LOGO.png" alt="light logo"></a></span>
    <div class="menu">
    <div class="logo-toggle">
    <span class="logo navLogo"><a href="Home-page.php"><img id ="logo" src="../images/WHITE-COLOR-LOGO.png" alt="light logo"></a></span>
    <span class="logo navLogo"><a href="Home-page.php"><img id ="dark-logo" src="../images/BLACK-COLOR-LOGO.png" alt="light logo"></a></span>
 
    <i class='bx bx-x siderbarClose'></i>
    </div>
    <ul class="nav-links">
    <li><a href="user_interface.php"><?php echo $top_nav[$language]['0']?></a></li>
    <li><a href="..\Dashboard/index2.php">Dashboard</a></li>
    <li><a href="accessories.php">Products</a></li>
    <li><a href="index.php"><?php echo $top_nav[$language]['3']?></a></li>
    <li><a href="suppor-page.php"><?php echo $top_nav[$language]['4']?></a></li>
   
    <li>
        <select onchange="set_language()" name="lang" id="language">
      

       <option value="en" <?php echo $en_select ?>><?php echo $top_nav[$language]['7']?></option>
    <option value="urdu" <?php echo $urdu_select ?>><?php echo $top_nav[$language]['8']?></option></select></li>
    
    </ul>
    </div>
    <a href="signup.php" class="btn"><?php echo $top_nav[$language]['10']?></a>
    <div class="darkLight-searchBox">
   <div class="dark-light">
    <i class='bx bx-moon moon'></i>
    <i class='bx bx-sun sun'></i>               
    </div>
    <div class="searchBox">
      <div class="searchToggle">
       <i class='bx bx-x cancel'></i>
       <i class='bx bx-search search'></i>
      </div>           
      <div class="search-field">
        <input type="text" placeholder="<?php echo $top_nav[$language]['12']?>">
        <i class='bx bx-search'></i>
    </div>
   

  </div>
  <!-- HTML code with the dropdown menu -->
  <div class="dropdown">
    <button class="dropdown-toggle" type="button" id="dropdownMenuButton">
        <span class="dropdown-profile">
        <img src="<?php echo isset($_SESSION['profile_image_path']) ? '../Dashboard/includes/profiles/' . $_SESSION['profile_image_path'] : '../housewife-browsing.jpg'; ?>" alt="Profile Picture" class="profile-picture">
        </span>
        <span class="dropdown-icon">▼</span>
    </button>
    <ul class="dropdown-menu">
        <?php if (isset($_SESSION['user_type']) && $_SESSION['user_type'] === 'Customer' && isset($_SESSION['name'])) : ?>
            <li class="dropdown-item"><?php echo $_SESSION['name']; ?></li>
        <?php endif; ?>
        <li class="dropdown-item"><a href="user-profile.php">My Profile</a></li>
        <li class="dropdown-item"><a href="..\Home-page.php?logout=1">Logout</a></li>
    </ul>
</div>



  </div>
  </div>
  </nav>