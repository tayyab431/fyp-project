<?php
include('..\include/connect.php');


?>
<?php
$path = dirname(__FILE__);
include($path . '/../language/lang.php');
include($path . '/../language/language-code.php');
include($path . '/../session/session.php');

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <title>Clothing barters</title>
    <link rel="icon" href="..\images/WHITE-COLOR-LOGO.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="..\Home-page.css">
    <link href="http://fonts.googleapis.com/css?family=KaushanScript|Poppins&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/5c515fb3d0.js" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>   
     
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
     <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
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
    <li><a href="Aboutt.php"><?php echo $top_nav[$language]['1']?></a></li>
    <li><a href="accessories.php"><?php echo $top_nav[$language]['2']?></a></li>
    <li><a href="index.php"><?php echo $top_nav[$language]['3']?></a></li>
    <li><a href="suppor-page.php"><?php echo $top_nav[$language]['4']?></a></li>
    <li><a href="login.php"><?php echo $top_nav[$language]['9']?></a></li>
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
            <img src="../housewife-browsing.jpg" alt="Profile Picture" class="profile-picture">
        </span>
        <span class="dropdown-icon">▼</span>
    </button>
    <ul class="dropdown-menu">
        <?php if (isset($_SESSION['user_role']) && $_SESSION['user_role'] === 'user' && isset($_SESSION['username'])) : ?>
            <li class="dropdown-item"><?php echo $_SESSION['username']; ?></li>
        <?php endif; ?>
        <li class="dropdown-item"><a href="user-profile.php">My Profile</a></li>
        <li class="dropdown-item"><a href="..\Home-page.php?logout=1">Logout</a></li>
    </ul>
</div>



  </div>
  </div>
  </nav>