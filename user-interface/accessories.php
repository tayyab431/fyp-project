
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
    <link rel="stylesheet" type="text/css" href="../product.css">
    <script src="https://kit.fontawesome.com/5c515fb3d0.js" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'> 
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
     <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />   
    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Mukta&display=swap" rel="stylesheet">
</head>
<style>
  .category__img {
    width: 200px; /* Set the desired width */
    height: 200px; /* Set the desired height */
    object-fit: cover; /* Maintain aspect ratio and cover the entire container */
  }
</style>
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
   <section class="home2">
    <div class="content">
    <h3 data-aos="fade-right">Crafted with Care</h3>
    <p data-aos="fade-left">Unleash the Magic of Handcrafted Garments!"<br>
 Crafting Perfection, One Stitch at a Time: Elevate Your Wardrobe! Experience the Finest in Clothing Craftsmanship. 
 Empowering Your Fashion Statement.
    </p>
    <a href="#" class="btn" data-aos="fade-right"><?php echo $access_ries[$language]['3']?></a>
    </div>
</section>
   <!--=============== CATEGORIES ===============-->
<section class="catagories container section">
    <h3 class="section__title">Popular stuff added by Manufacturers</h3>
    <div class="catagories__container swiper">
        <div class="swiper-wrapper" id="carousel-container">
            <!-- Products will be dynamically added here using JavaScript -->
        </div>
    </div>
</section>
          <!--=============== PRODUCTS ===============-->
          <section class="products section container">
        <div class="tab-btns">
          <span class="tab-btn active-tab" data-target="#men">
            Men 
          </span>
          <span class="tab-btn" data-target="#women">
            Women  
          </span>
          <span class="tab-btn" data-target="#kids">
            Kids
          </span>
        </div>
        <div class="tab-items">
<div class="tab-item active-tab" content id="men">
  <div class="products-container grid">
    <div class="product-item">
      <div class="product-banner">
        <a href="details.html" class="product-images">
          <img src="../assets/img/product-1-1.jpg" alt="" class="product-img default">
          <img src="../assets/img/product-1-2.jpg" alt="" class="product-img hover">
        </a>
        <div class="product-action">
          <a href="#" class="action-btn quick-view-btn" aria-label="Quick View">
            <i class="fas fa-eye"></i>
          </a>
          <a href="#" class="action-btn " aria-label="Join as a Manufacturer">
            <i class="fas fa-user"></i>
          </a>
          <a href="#" class="action-btn" aria-label="Add to wish list">
            <i class="fas fa-heart"></i>
          </a>
        </div>
        <div class="product-badge light-pink">New</div>
      </div>
      <div class="product-content">
        <span class="product-catagory">Clothing</span>
        <a href="details.html">
          <h3 class="product-title">Colorful Pattern Shirts</h3>
        </a>
        <div class="product-catagory">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos atque dolo</p>
        </div>
        <a href="index.html" class="btn">Find out</a>
      </div>
    </div>
    <div class="product-item">
      <div class="product-banner">
        <a href="details.html" class="product-images">
          <img src="../assets/img/product-2-1.jpg" alt="" class="product-img default">
          <img src="../assets/img/product-2-2.jpg" alt="" class="product-img hover">
        </a>
        <div class="product-action">
          <a href="#" class="action-btn quick-view-btn" aria-label="Quick View">
            <i class="fas fa-eye"></i>
          </a>
          <a href="#" class="action-btn" aria-label="Join as a Manufacturer">
            <i class="fas fa-user"></i>
          </a>
          <a href="#" class="action-btn" aria-label="Add to wish list">
            <i class="fas fa-heart"></i>
          </a>
        </div>
        <div class="product-badge light-green">New</div>
      </div>
      <div class="product-content">
        <span class="product-catagory">Clothing</span>
        <a href="details.html">
          <h3 class="product-title">Colorful Pattern Shirts</h3>
        </a>
        <div class="product-catagory">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos atque dolo</p>
        </div>
        <a href="index.html" class="btn">Find out</a>
      </div>
    </div>
    <div class="product-item">
      <div class="product-banner">
        <a href="details.html" class="product-images">
          <img src="../assets/img/product-3-1.jpg" alt="" class="product-img default">
          <img src="../assets/img/product-3-2.jpg" alt="" class="product-img hover">
        </a>
        <div class="product-action">
          <a href="#" class="action-btn quick-view-btn" aria-label="Quick View">
            <i class="fas fa-eye"></i>
          </a>
          <a href="#" class="action-btn" aria-label="Join as a Manufacturer">
            <i class="fas fa-user"></i>
          </a>
          <a href="#" class="action-btn" aria-label="Add to wish list">
            <i class="fas fa-heart"></i>
          </a>
        </div>
        <div class="product-badge light-orange">New</div>
      </div>
      <div class="product-content">
        <span class="product-catagory">Clothing</span>
        <a href="details.html">
          <h3 class="product-title">Colorful Pattern Shirts</h3>
        </a>
        <div class="product-catagory">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos atque dolo</p>
        </div>
        <a href="index.html" class="btn">Find out</a>
      </div>
    </div>
    <div class="product-item">
      <div class="product-banner">
        <a href="details.html" class="product-images">
          <img src="../assets/img/product-4-1.jpg" alt="" class="product-img default">
          <img src="../assets/img/product-4-2.jpg" alt="" class="product-img hover">
        </a>
        <div class="product-action">
          <a href="#" class="action-btn quick-view-btn" aria-label="Quick View">
            <i class="fas fa-eye"></i>
          </a>
          <a href="#" class="action-btn" aria-label="Join as a Manufacturer">
            <i class="fas fa-user"></i>
          </a>
          <a href="#" class="action-btn" aria-label="Add to wish list">
            <i class="fas fa-heart"></i>
          </a>
        </div>
        <div class="product-badge light-blue">New</div>
      </div>
      <div class="product-content">
        <span class="product-catagory">Clothing</span>
        <a href="details.html">
          <h3 class="product-title">Colorful Pattern Shirts</h3>
        </a>
        <div class="product-catagory">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos atque dolo</p>
        </div>
        <a href="index.html" class="btn">Find out</a>
      </div>
    </div>
    <div class="product-item">
      <div class="product-banner">
        <a href="details.html" class="product-images">
          <img src="../assets/img/product-5-1.jpg" alt="" class="product-img default">
          <img src="../assets/img/product-5-2.jpg" alt="" class="product-img hover">
        </a>
        <div class="product-action">
          <a href="#" class="action-btn" aria-label="Quick View">
            <i class="fas fa-eye"></i>
          </a>
          <a href="#" class="action-btn quick-view-btn" aria-label="Join as a Manufacturer">
            <i class="fas fa-user"></i>
          </a>
          <a href="#" class="action-btn" aria-label="Add to wish list">
            <i class="fas fa-heart"></i>
          </a>
        </div>
        <div class="product-badge light-orange">New</div>
      </div>
      <div class="product-content">
        <span class="product-catagory">Clothing</span>
        <a href="details.html">
          <h3 class="product-title">Colorful Pattern Shirts</h3>
        </a>
        <div class="product-catagory">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos atque dolo</p>
        </div>
        <a href="index.html" class="btn">Find out</a>
      </div>
    </div>
    <div class="product-item">
      <div class="product-banner">
        <a href="details.html" class="product-images">
          <img src="../assets/img/product-6-1.jpg" alt="" class="product-img default">
          <img src="../assets/img/product-6-2.jpg" alt="" class="product-img hover">
        </a>
        <div class="product-action">
          <a href="#" class="action-btn quick-view-btn" aria-label="Quick View">
            <i class="fas fa-eye"></i>
          </a>
          <a href="#" class="action-btn" aria-label="Join as a Manufacturer">
            <i class="fas fa-user"></i>
          </a>
          <a href="#" class="action-btn" aria-label="Add to wish list">
            <i class="fas fa-heart"></i>
          </a>
        </div>
        <div class="product-badge light-blue">New</div>
      </div>
      <div class="product-content">
        <span class="product-catagory">Clothing</span>
        <a href="details.html">
          <h3 class="product-title">Colorful Pattern Shirts</h3>
        </a>
        <div class="product-catagory">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos atque dolo</p>
        </div>
        <a href="index.html" class="btn">Find out</a>
      </div>
    </div>
    <div class="product-item">
      <div class="product-banner">
        <a href="details.html" class="product-images">
          <img src="../assets/img/product-7-1.jpg" alt="" class="product-img default">
          <img src="../assets/img/product-7-2.jpg" alt="" class="product-img hover">
        </a>
        <div class="product-action">
          <a href="#" class="action-btn quick-view-btn" aria-label="Quick View">
            <i class="fas fa-eye"></i>
          </a>
          <a href="#" class="action-btn" aria-label="Join as a Manufacturer">
            <i class="fas fa-user"></i>
          </a>
          <a href="#" class="action-btn" aria-label="Add to wish list">
            <i class="fas fa-heart"></i>
          </a>
        </div>
        <div class="product-badge light-green">New</div>
      </div>
      <div class="product-content">
        <span class="product-catagory">Clothing</span>
        <a href="details.html">
          <h3 class="product-title">Colorful Pattern Shirts</h3>
        </a>
        <div class="product-catagory">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos atque dolo</p>
        </div>
        <a href="index.html" class="btn">Find out</a>
      </div>
    </div>
    <div class="product-item">
      <div class="product-banner">
        <a href="details.html" class="product-images">
          <img src="../assets/img/product-8-1.jpg" alt="" class="product-img default">
          <img src="../assets/img/product-8-2.jpg" alt="" class="product-img hover">
        </a>
        <div class="product-action">
          <a href="#" class="action-btn quick-view-btn" aria-label="Quick View">
            <i class="fas fa-eye"></i>
          </a>
          <a href="#" class="action-btn" aria-label="Join as a Manufacturer">
            <i class="fas fa-user"></i>
          </a>
          <a href="#" class="action-btn" aria-label="Add to wish list">
            <i class="fas fa-heart"></i>
          </a>
        </div>
      </div>
      <div class="product-content">
        <span class="product-catagory">Clothing</span>
        <a href="details.html">
          <h3 class="product-title">Colorful Pattern Shirts</h3>
        </a>
        <div class="product-catagory">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos atque dolo</p>
        </div>
        <a href="index.html" class="btn">Find out</a>
      </div>
    </div>
  </div>
</div>
<div class="tab-item" content id="women">
  <div class="products-container grid">
    <div class="product-item">
      <div class="product-banner">
        <a href="details.html" class="product-images">
          <img src="../assets/img/product-13-1.jpg" alt="" class="product-img default">
          <img src="../assets/img/product-13-2.jpg" alt="" class="product-img hover">
        </a>
        <div class="product-action">
          <a href="#" class="action-btn quick-view-btn" aria-label="Quick View">
            <i class="fas fa-eye"></i>
          </a>
          <a href="#" class="action-btn" aria-label="Join as a Manufacturer">
            <i class="fas fa-user"></i>
          </a>
          <a href="#" class="action-btn" aria-label="Add to wish list">
            <i class="fas fa-heart"></i>
          </a>
        </div>
        <div class="product-badge light-pink">New</div>
      </div>
      <div class="product-content">
        <span class="product-catagory">Clothing</span>
        <a href="details.html">
          <h3 class="product-title">Colorful Pattern Shirts</h3>
        </a>
        <div class="product-catagory">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos atque dolo</p>
        </div>
        <a href="index.html" class="btn">Find out</a>
      </div>
    </div>
    <div class="product-item">
      <div class="product-banner">
        <a href="index.php" class="product-images">
          <img src="../assets/img/product-2-1.jpg" alt="" class="product-img default">
          <img src="../assets/img/product-2-2.jpg" alt="" class="product-img hover">
        </a>
        <div class="product-action">
          <a href="#" class="action-btn quick-view-btn" aria-label="Quick View">
            <i class="fas fa-eye"></i>
          </a>
          <a href="#" class="action-btn" aria-label="Join as a Manufacturer">
            <i class="fas fa-user"></i>
          </a>
          <a href="#" class="action-btn" aria-label="Add to wish list">
            <i class="fas fa-heart"></i>
          </a>
        </div>
        <div class="product-badge light-green">New</div>
      </div>
      <div class="product-content">
        <span class="product-catagory">Clothing</span>
        <a href="details.html">
          <h3 class="product-title">Colorful Pattern Shirts</h3>
        </a>
        <div class="product-catagory">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos atque dolo</p>
        </div>
        <a href="index.html" class="btn">Find out</a>
      </div>
    </div>
    <div class="product-item">
      <div class="product-banner">
        <a href="details.html" class="product-images">
          <img src="../assets/img/product-10-1.jpg" alt="" class="product-img default">
          <img src="../assets/img/product-10-2.jpg" alt="" class="product-img hover">
        </a>
        <div class="product-action">
          <a href="#" class="action-btn quick-view-btn" aria-label="Quick View">
            <i class="fas fa-eye"></i>
          </a>
          <a href="#" class="action-btn" aria-label="Join as a Manufacturer">
            <i class="fas fa-user"></i>
          </a>
          <a href="#" class="action-btn" aria-label="Add to wish list">
            <i class="fas fa-heart"></i>
          </a>
        </div>
        <div class="product-badge light-orange">New</div>
      </div>
      <div class="product-content">
        <span class="product-catagory">Clothing</span>
        <a href="details.html">
          <h3 class="product-title">Colorful Pattern Shirts</h3>
        </a>
        <div class="product-catagory">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos atque dolo</p>
        </div>
        <a href="index.html" class="btn">Find out</a>
      </div>
    </div>
    <div class="product-item">
      <div class="product-banner">
        <a href="details.html" class="product-images">
          <img src="../assets/img/product-4-1.jpg" alt="" class="product-img default">
          <img src="../assets/img/product-4-2.jpg" alt="" class="product-img hover">
        </a>
        <div class="product-action">
          <a href="#" class="action-btn quick-view-btn" aria-label="Quick View">
            <i class="fas fa-eye"></i>
          </a>
          <a href="#" class="action-btn" aria-label="Join as a Manufacturer">
            <i class="fas fa-user"></i>
          </a>
          <a href="#" class="action-btn" aria-label="Add to wish list">
            <i class="fas fa-heart"></i>
          </a>
        </div>
        <div class="product-badge light-blue">New</div>
      </div>
      <div class="product-content">
        <span class="product-catagory">Clothing</span>
        <a href="details.html">
          <h3 class="product-title">Colorful Pattern Shirts</h3>
        </a>
        <div class="product-catagory">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos atque dolo</p>
        </div>
        <a href="index.html" class="btn">Find out</a>
      </div>
    </div>
    <div class="product-item">
      <div class="product-banner">
        <a href="details.html" class="product-images">
          <img src="../assets/img/product-5-1.jpg" alt="" class="product-img default">
          <img src="../assets/img/product-5-2.jpg" alt="" class="product-img hover">
        </a>
        <div class="product-action">
          <a href="#" class="action-btn quick-view-btn" aria-label="Quick View">
            <i class="fas fa-eye"></i>
          </a>
          <a href="#" class="action-btn" aria-label="Join as a Manufacturer">
            <i class="fas fa-user"></i>
          </a>
          <a href="#" class="action-btn" aria-label="Add to wish list">
            <i class="fas fa-heart"></i>
          </a>
        </div>
        <div class="product-badge light-orange">New</div>
      </div>
      <div class="product-content">
        <span class="product-catagory">Clothing</span>
        <a href="details.html">
          <h3 class="product-title">Colorful Pattern Shirts</h3>
        </a>
        <div class="product-catagory">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos atque dolo</p>
        </div>
        <a href="index.html" class="btn">Find out</a>
      </div>
    </div>
    <div class="product-item">
      <div class="product-banner">
        <a href="details.html" class="product-images">
          <img src="../assets/img/product-11-1.jpg" alt="" class="product-img default">
          <img src="../assets/img/product-11-2.jpg" alt="" class="product-img hover">
        </a>
        <div class="product-action">
          <a href="#" class="action-btn quick-view-btn" aria-label="Quick View">
            <i class="fas fa-eye"></i>
          </a>
          <a href="#" class="action-btn" aria-label="Join as a Manufacturer">
            <i class="fas fa-user"></i>
          </a>
          <a href="#" class="action-btn" aria-label="Add to wish list">
            <i class="fas fa-heart"></i>
          </a>
        </div>
        <div class="product-badge light-blue">New</div>
      </div>
      <div class="product-content">
        <span class="product-catagory">Clothing</span>
        <a href="details.html">
          <h3 class="product-title">Colorful Pattern Shirts</h3>
        </a>
        <div class="product-catagory">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos atque dolo</p>
        </div>
        <a href="index.html" class="btn">Find out</a>
      </div>
    </div>
    <div class="product-item">
      <div class="product-banner">
        <a href="details.html" class="product-images">
          <img src="../assets/img/product-7-1.jpg" alt="" class="product-img default">
          <img src="../assets/img/product-7-2.jpg" alt="" class="product-img hover">
        </a>
        <div class="product-action">
          <a href="#" class="action-btn quick-view-btn" aria-label="Quick View">
            <i class="fas fa-eye"></i>
          </a>
          <a href="#" class="action-btn" aria-label="Join as a Manufacturer">
            <i class="fas fa-user"></i>
          </a>
          <a href="#" class="action-btn" aria-label="Add to wish list">
            <i class="fas fa-heart"></i>
          </a>
        </div>
        <div class="product-badge light-green">New</div>
      </div>
      <div class="product-content">
        <span class="product-catagory">Clothing</span>
        <a href="details.html">
          <h3 class="product-title">Colorful Pattern Shirts</h3>
        </a>
        <div class="product-catagory">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos atque dolo</p>
        </div>
        <a href="index.html" class="btn">Find out</a>
      </div>
    </div>
    <div class="product-item">
      <div class="product-banner">
        <a href="details.html" class="product-images">
          <img src="../assets/img/product-8-1.jpg" alt="" class="product-img default">
          <img src="../assets/img/product-8-2.jpg" alt="" class="product-img hover">
        </a>
        <div class="product-action">
          <a href="#" class="action-btn quick-view-btn" aria-label="Quick View">
            <i class="fas fa-eye"></i>
          </a>
          <a href="#" class="action-btn" aria-label="Join as a Manufacturer">
            <i class="fas fa-user"></i>
          </a>
          <a href="#" class="action-btn" aria-label="Add to wish list">
            <i class="fas fa-heart"></i>
          </a>
        </div>
      </div>
      <div class="product-content">
        <span class="product-catagory">Clothing</span>
        <a href="details.html">
          <h3 class="product-title">Colorful Pattern Shirts</h3>
        </a>
        <div class="product-catagory">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos atque dolo</p>
        </div>
        <a href="index.html" class="btn">Find out</a>
      </div>
    </div>
  </div>
</div>
<div class="tab-item" content id="kids">
  <div class="products-container grid">
    <div class="product-item">
      <div class="product-banner">
        <a href="details.html" class="product-images">
          <img src="../assets/img/product-1-1.jpg" alt="" class="product-img default">
          <img src="../assets/img/product-1-2.jpg" alt="" class="product-img hover">
        </a>
        <div class="product-action">
          <a href="#" class="action-btn quick-view-btn" aria-label="Quick View">
            <i class="fas fa-eye"></i>
          </a>
          <a href="#" class="action-btn" aria-label="Join as a Manufacturer">
            <i class="fas fa-user"></i>
          </a>
          <a href="#" class="action-btn" aria-label="Add to wish list">
            <i class="fas fa-heart"></i>
          </a>
        </div>
        <div class="product-badge light-pink">New</div>
      </div>
      <div class="product-content">
        <span class="product-catagory">Clothing</span>
        <a href="details.html">
          <h3 class="product-title">Colorful Pattern Shirts</h3>
        </a>
        <div class="product-catagory">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos atque dolo</p>
        </div>
        <a href="index.html" class="btn">Find out</a>
      </div>
    </div>
    <div class="product-item">
      <div class="product-banner">
        <a href="details.html" class="product-images">
          <img src="../assets/img/product-9-1.jpg" alt="" class="product-img default">
          <img src="../assets/img/product-9-2.jpg" alt="" class="product-img hover">
        </a>
        <div class="product-action">
          <a href="#" class="action-btn quick-view-btn" aria-label="Quick View">
            <i class="fas fa-eye"></i>
          </a>
          <a href="#" class="action-btn" aria-label="Join as a Manufacturer">
            <i class="fas fa-user"></i>
          </a>
          <a href="#" class="action-btn" aria-label="Add to wish list">
            <i class="fas fa-heart"></i>
          </a>
        </div>
        <div class="product-badge light-green">New</div>
      </div>
      <div class="product-content">
        <span class="product-catagory">Clothing</span>
        <a href="details.html">
          <h3 class="product-title">Colorful Pattern Shirts</h3>
        </a>
        <div class="product-catagory">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos atque dolo</p>
        </div>
        <a href="index.html" class="btn">Find out</a>
      </div>
    </div>
    <div class="product-item">
      <div class="product-banner">
        <a href="details.html" class="product-images">
          <img src="../assets/img/product-10-1.jpg" alt="" class="product-img default">
          <img src="../assets/img/product-10-2.jpg" alt="" class="product-img hover">
        </a>
        <div class="product-action">
          <a href="#" class="action-btn quick-view-btn" aria-label="Quick View">
            <i class="fas fa-eye"></i>
          </a>
          <a href="#" class="action-btn" aria-label="Join as a Manufacturer">
            <i class="fas fa-user"></i>
          </a>
          <a href="#" class="action-btn" aria-label="Add to wish list">
            <i class="fas fa-heart"></i>
          </a>
        </div>
        <div class="product-badge light-orange">New</div>
      </div>
      <div class="product-content">
        <span class="product-catagory">Clothing</span>
        <a href="details.html">
          <h3 class="product-title">Colorful Pattern Shirts</h3>
        </a>
        <div class="product-catagory">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos atque dolo</p>
        </div>
        <a href="index.html" class="btn">Find out</a>
      </div>
    </div>
    <div class="product-item">
      <div class="product-banner">
        <a href="details.html" class="product-images">
          <img src="../assets/img/product-4-1.jpg" alt="" class="product-img default">
          <img src="../assets/img/product-4-2.jpg" alt="" class="product-img hover">
        </a>
        <div class="product-action">
          <a href="#" class="action-btn quick-view-btn" aria-label="Quick View">
            <i class="fas fa-eye"></i>
          </a>
          <a href="#" class="action-btn" aria-label="Join as a Manufacturer">
            <i class="fas fa-user"></i>
          </a>
          <a href="#" class="action-btn" aria-label="Add to wish list">
            <i class="fas fa-heart"></i>
          </a>
        </div>
        <div class="product-badge light-blue">New</div>
      </div>
      <div class="product-content">
        <span class="product-catagory">Clothing</span>
        <a href="details.html">
          <h3 class="product-title">Colorful Pattern Shirts</h3>
        </a>
        <div class="product-catagory">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos atque dolo</p>
        </div>
        <a href="index.html" class="btn">Find out</a>
      </div>
    </div>
    <div class="product-item">
      <div class="product-banner">
        <a href="details.html" class="product-images">
          <img src="../assets/img/product-5-1.jpg" alt="" class="product-img default">
          <img src="../assets/img/product-5-2.jpg" alt="" class="product-img hover">
        </a>
        <div class="product-action">
          <a href="#" class="action-btn quick-view-btn" aria-label="Quick View">
            <i class="fas fa-eye"></i>
          </a>
          <a href="#" class="action-btn" aria-label="Join as a Manufacturer">
            <i class="fas fa-user"></i>
          </a>
          <a href="#" class="action-btn" aria-label="Add to wish list">
            <i class="fas fa-heart"></i>
          </a>
        </div>
        <div class="product-badge light-orange">New</div>
      </div>
      <div class="product-content">
        <span class="product-catagory">Clothing</span>
        <a href="details.html">
          <h3 class="product-title">Colorful Pattern Shirts</h3>
        </a>
        <div class="product-catagory">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos atque dolo</p>
        </div>
        <a href="index.html" class="btn">Find out</a>
      </div>
    </div>
    <div class="product-item">
      <div class="product-banner">
        <a href="details.html" class="product-images">
          <img src="../assets/img/product-9-1.jpg" alt="" class="product-img default">
          <img src="../assets/img/product-9-2.jpg" alt="" class="product-img hover">
        </a>
        <div class="product-action">
          <a href="#" class="action-btn quick-view-btn" aria-label="Quick View">
            <i class="fas fa-eye"></i>
          </a>
          <a href="#" class="action-btn" aria-label="Join as a Manufacturer">
            <i class="fas fa-user"></i>
          </a>
          <a href="#" class="action-btn" aria-label="Add to wish list">
            <i class="fas fa-heart"></i>
          </a>
        </div>
        <div class="product-badge light-blue">New</div>
      </div>
      <div class="product-content">
        <span class="product-catagory">Clothing</span>
        <a href="details.html">
          <h3 class="product-title">Colorful Pattern Shirts</h3>
        </a>
        <div class="product-catagory">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos atque dolo</p>
        </div>
        <a href="index.html" class="btn">Find out</a>
      </div>
    </div>
    <div class="product-item">
      <div class="product-banner">
        <a href="details.html" class="product-images">
          <img src="../assets/img/product-7-1.jpg" alt="" class="product-img default">
          <img src="../assets/img/product-7-2.jpg" alt="" class="product-img hover">
        </a>
        <div class="product-action">
          <a href="#" class="action-btn quick-view-btn" aria-label="Quick View">
            <i class="fas fa-eye"></i>
          </a>
          <a href="#" class="action-btn" aria-label="Join as a Manufacturer">
            <i class="fas fa-user"></i>
          </a>
          <a href="#" class="action-btn" aria-label="Add to wish list">
            <i class="fas fa-heart"></i>
          </a>
        </div>
        <div class="product-badge light-green">New</div>
      </div>
      <div class="product-content">
        <span class="product-catagory">Clothing</span>
        <a href="details.html">
          <h3 class="product-title">Colorful Pattern Shirts</h3>
        </a>
        <div class="product-catagory">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos atque dolo</p>
        </div>
        <a href="index.html" class="btn">Find out</a>
      </div>
    </div>
    <div class="product-item">
      <div class="product-banner">
        <a href="details.html" class="product-images">
          <img src="../assets/img/product-11-1.jpg" alt="" class="product-img default">
          <img src="../assets/img/product-11-2.jpg" alt="" class="product-img hover">
        </a>
        <div class="product-action">
          <a href="#" class="action-btn quick-view-btn" aria-label="Quick View">
            <i class="fas fa-eye"></i>
          </a>
          <a href="#" class="action-btn" aria-label="Join as a Manufacturer">
            <i class="fas fa-user"></i>
          </a>
          <a href="#" class="action-btn" aria-label="Add to wish list">
            <i class="fas fa-heart"></i>
          </a>
        </div>
      </div>
      <div class="product-content">
        <span class="product-catagory">Clothing</span>
        <a href="details.html">
          <h3 class="product-title">Colorful Pattern Shirts</h3>
        </a>
        <div class="product-catagory">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos atque dolo</p>
        </div>
        <a href="index.html" class="btn">Find out</a>
      </div>
    </div>
  </div>
</div>
  </div>
      </section>

      <!--=============== DEALS ===============-->
      <section class="deals section">
        <div class="deals-container container grid">
      <div class="deals-item">
      <div class="deals-group">
       <h3 class="deals-brand">Deal of the Day</h3>
        <span class="deal-catagory">Limited Quantities</span>
      </div>

      <h4 class="deal-title">Summer Collection New Modren Design</h4>
      <div class="deals-group">
        <p class="deals-countdown-text">
          hurry Up! Offer End In:
        </p>
        <div class="countdown">
      <div class="countdown-amount">
      <p class="countdown-period">02</p>
      <span class="unit">Days</span>
</div>
<div class="countdown-amount">
  <p class="countdown-period">22</p>
  <span class="unit">Hours</span>
</div>
<div class="countdown-amount">
  <p class="countdown-period">57</p>
  <span class="unit">Mins</span>
</div>
<div class="countdown-amount">
  <p class="countdown-period">24</p>
  <span class="unit">Sec</span>
</div>
        </div>
      </div>
      <div class="deals-btn">
        <a href="details.html" class="btn btn md">Shop Now</a>
      </div>
      </div>
      <div class="deals-item">
        <div class="deals-group">
         <h3 class="deals-brand">Women Collection</h3>
          <span class="deal-catagory">Sirts & Jeans</span>
        </div>
  
        <h4 class="deal-title">Try something new this Summer</h4>
        <div class="deals-group">
          <p class="deals-countdown-text">
            hurry Up! Offer End In:
          </p>
          <div class="countdown">
        <div class="countdown-amount">
        <p class="countdown-period">02</p>
        <span class="unit">Days</span>
  </div>
  <div class="countdown-amount">
    <p class="countdown-period">22</p>
    <span class="unit">Hours</span>
  </div>
  <div class="countdown-amount">
    <p class="countdown-period">57</p>
    <span class="unit">Mins</span>
  </div>
  <div class="countdown-amount">
    <p class="countdown-period">24</p>
    <span class="unit">Sec</span>
  </div>
          </div>
        </div>
        <div class="deals-btn">
          <a href="details.html" class="btn btn md">Shop Now</a>
        </div>
        </div>
        </div>
      </section>

      <!--=============== NEW ARRIVALS ===============-->
      <section class="new__arrivals container setion">
        <h3 class="section__title">
          <span>New</span> Arrivals
        </h3>
        <div class="new__container swiper">
          <div class="swiper-wrapper">
            <div class="product-item swiper-slide">
              <div class="product-banner">
                <a href="details.html" class="product-images">
                  <img src="../assets/img/product-1-1.jpg" alt="" class="product-img default">
                  <img src="../assets/img/product-1-2.jpg" alt="" class="product-img hover">
                </a>
                <div class="product-action">
                  <a href="#" class="action-btn quick-view-btn" aria-label="Quick View">
                    <i class="fas fa-eye"></i>
                  </a>
                  <a href="#" class="action-btn" aria-label="Join as a Manufacturer">
                    <i class="fas fa-user"></i>
                  </a>
                  <a href="#" class="action-btn" aria-label="Add to wish list">
                    <i class="fas fa-heart"></i>
                  </a>
                </div>
                <div class="product-badge light-pink">New</div>
              </div>
              <div class="product-content">
                <span class="product-catagory">Clothing</span>
                <a href="details.html">
                  <h3 class="product-title">Colorful Pattern Shirts</h3>
                </a>
                <div class="product-catagory">
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos atque dolo</p>
                </div>
                <a href="index.html" class="btn">Find out</a>
              </div>
            </div>
            <div class="product-item swiper-slide">
              <div class="product-banner">
                <a href="details.html" class="product-images">
                  <img src="../assets/img/product-2-1.jpg" alt="" class="product-img default">
                  <img src="../assets/img/product-2-2.jpg" alt="" class="product-img hover">
                </a>
                <div class="product-action">
                  <a href="#" class="action-btn quick-view-btn" aria-label="Quick View">
                    <i class="fas fa-eye"></i>
                  </a>
                  <a href="#" class="action-btn" aria-label="Join as a Manufacturer">
                    <i class="fas fa-user"></i>
                  </a>
                  <a href="#" class="action-btn" aria-label="Add to wish list">
                    <i class="fas fa-heart"></i>
                  </a>
                </div>
                <div class="product-badge light-green">New</div>
              </div>
              <div class="product-content">
                <span class="product-catagory">Clothing</span>
                <a href="details.html">
                  <h3 class="product-title">Colorful Pattern Shirts</h3>
                </a>
                <div class="product-catagory">
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos atque dolo</p>
                </div>
                <a href="index.html" class="btn">Find out</a>
              </div>
            </div>
            <div class="product-item swiper-slide">
              <div class="product-banner">
                <a href="details.html" class="product-images">
                  <img src="../assets/img/product-3-1.jpg" alt="" class="product-img default">
                  <img src="../assets/img/product-3-2.jpg" alt="" class="product-img hover">
                </a>
                <div class="product-action">
                  <a href="#" class="action-btn quick-view-btn" aria-label="Quick View">
                    <i class="fas fa-eye"></i>
                  </a>
                  <a href="#" class="action-btn" aria-label="Join as a Manufacturer">
                    <i class="fas fa-user"></i>
                  </a>
                  <a href="#" class="action-btn" aria-label="Add to wish list">
                    <i class="fas fa-heart"></i>
                  </a>
                </div>
                <div class="product-badge light-orange">New</div>
              </div>
              <div class="product-content">
                <span class="product-catagory">Clothing</span>
                <a href="details.html">
                  <h3 class="product-title">Colorful Pattern Shirts</h3>
                </a>
                <div class="product-catagory">
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos atque dolo</p>
                </div>
                <a href="index.html" class="btn">Find out</a>
              </div>
            </div>
            <div class="product-item swiper-slide">
              <div class="product-banner">
                <a href="details.html" class="product-images">
                  <img src="../assets/img/product-4-1.jpg" alt="" class="product-img default">
                  <img src="../assets/img/product-4-2.jpg" alt="" class="product-img hover">
                </a>
                <div class="product-action">
                  <a href="#" class="action-btn quick-view-btn" aria-label="Quick View">
                    <i class="fas fa-eye"></i>
                  </a>
                  <a href="#" class="action-btn" aria-label="Join as a Manufacturer">
                    <i class="fas fa-user"></i>
                  </a>
                  <a href="#" class="action-btn" aria-label="Add to wish list">
                    <i class="fas fa-heart"></i>
                  </a>
                </div>
                <div class="product-badge light-blue">New</div>
              </div>
              <div class="product-content">
                <span class="product-catagory">Clothing</span>
                <a href="details.html">
                  <h3 class="product-title">Colorful Pattern Shirts</h3>
                </a>
                <div class="product-catagory">
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos atque dolo</p>
                </div>
                <a href="index.html" class="btn">Find out</a>
              </div>
            </div>
            <div class="product-item swiper-slide">
              <div class="product-banner">
                <a href="details.html" class="product-images">
                  <img src="../assets/img/product-5-1.jpg" alt="" class="product-img default">
                  <img src="../assets/img/product-5-2.jpg" alt="" class="product-img hover">
                </a>
                <div class="product-action">
                  <a href="#" class="action-btn quick-view-btn" aria-label="Quick View">
                    <i class="fas fa-eye"></i>
                  </a>
                  <a href="#" class="action-btn" aria-label="Join as a Manufacturer">
                    <i class="fas fa-user"></i>
                  </a>
                  <a href="#" class="action-btn" aria-label="Add to wish list">
                    <i class="fas fa-heart"></i>
                  </a>
                </div>
                <div class="product-badge light-orange">New</div>
              </div>
              <div class="product-content">
                <span class="product-catagory">Clothing</span>
                <a href="details.html">
                  <h3 class="product-title">Colorful Pattern Shirts</h3>
                </a>
                <div class="product-catagory">
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos atque dolo</p>
                </div>
                <a href="index.html" class="btn">Find out</a>
              </div>
            </div>
            <div class="product-item swiper-slide">
              <div class="product-banner">
                <a href="details.html" class="product-images">
                  <img src="../assets/img/product-6-1.jpg" alt="" class="product-img default">
                  <img src="../assets/img/product-6-2.jpg" alt="" class="product-img hover">
                </a>
                <div class="product-action">
                  <a href="#" class="action-btn quick-view-btn" aria-label="Quick View">
                    <i class="fas fa-eye"></i>
                  </a>
                  <a href="#" class="action-btn" aria-label="Join as a Manufacturer">
                    <i class="fas fa-user"></i>
                  </a>
                  <a href="#" class="action-btn" aria-label="Add to wish list">
                    <i class="fas fa-heart"></i>
                  </a>
                </div>
                <div class="product-badge light-blue">New</div>
              </div>
              <div class="product-content">
                <span class="product-catagory">Clothing</span>
                <a href="details.html">
                  <h3 class="product-title">Colorful Pattern Shirts</h3>
                </a>
                <div class="product-catagory">
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos atque dolo</p>
                </div>
                <a href="index.html" class="btn">Find out</a>
              </div>
            </div>
            <div class="product-item swiper-slide">
              <div class="product-banner">
                <a href="details.html" class="product-images">
                  <img src="../assets/img/product-7-1.jpg" alt="" class="product-img default">
                  <img src="../assets/img/product-7-2.jpg" alt="" class="product-img hover">
                </a>
                <div class="product-action"> 
                  <a href="#" class="action-btn quick-view-btn" aria-label="Quick View">
                    <i class="fas fa-eye"></i>
                  </a>
                  <a href="#" class="action-btn" aria-label="Join as a Manufacturer">
                    <i class="fas fa-user"></i>
                  </a>
                  <a href="#" class="action-btn" aria-label="Add to wish list">
                    <i class="fas fa-heart"></i>
                  </a>
                </div>
                <div class="product-badge light-green">New</div>
              </div>
              <div class="product-content">
                <span class="product-catagory">Clothing</span>
                <a href="details.html">
                  <h3 class="product-title">Colorful Pattern Shirts</h3>
                </a>
                <div class="product-catagory">
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos atque dolo</p>
                </div>
                <a href="index.html" class="btn">Find out</a>
              </div>
            </div> 
            <div class="product-item swiper-slide">
              <div class="product-banner">
                <a href="details.html" class="product-images">
                  <img src="../assets/img/product-1-1.jpg" alt="" class="product-img default">
                  <img src="../assets/img/product-1-2.jpg" alt="" class="product-img hover">
                </a>
                <div class="product-action">
                  <a href="#" class="action-btn quick-view-btn" aria-label="Quick View">
                    <i class="fas fa-eye"></i>
                  </a>
                  <a href="#" class="action-btn" aria-label="Join as a Manufacturer">
                    <i class="fas fa-user"></i>
                  </a>
                  <a href="#" class="action-btn" aria-label="Add to wish list">
                    <i class="fas fa-heart"></i>
                  </a>
                </div>
                <div class="product-badge light-pink">New</div>
              </div>
              <div class="product-content">
                <span class="product-catagory">Clothing</span>
                <a href="details.html">
                  <h3 class="product-title">Colorful Pattern Shirts</h3>
                </a>
                <div class="product-catagory">
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos atque dolo</p>
                </div>
                <a href="index.html" class="btn">Find out</a>
              </div>
            </div>
            <div class="product-item swiper-slide">
              <div class="product-banner">
                <a href="details.html" class="product-images">
                  <img src="../assets/img/product-2-1.jpg" alt="" class="product-img default">
                  <img src="../assets/img/product-2-2.jpg" alt="" class="product-img hover">
                </a>
                <div class="product-action">
                  <a href="#" class="action-btn quick-view-btn" aria-label="Quick View">
                    <i class="fas fa-eye"></i>
                  </a>
                  <a href="#" class="action-btn" aria-label="Join as a Manufacturer">
                    <i class="fas fa-user"></i>
                  </a>
                  <a href="#" class="action-btn" aria-label="Add to wish list">
                    <i class="fas fa-heart"></i>
                  </a>
                </div>
                <div class="product-badge light-green">New</div>
              </div>
              <div class="product-content">
                <span class="product-catagory">Clothing</span>
                <a href="details.html">
                  <h3 class="product-title">Colorful Pattern Shirts</h3>
                </a>
                <div class="product-catagory">
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos atque dolo</p>
                </div>
                <a href="index.html" class="btn">Find out</a>
              </div>
            </div>
            <div class="product-item swiper-slide">
              <div class="product-banner">
                <a href="details.html" class="product-images">
                  <img src="../assets/img/product-3-1.jpg" alt="" class="product-img default">
                  <img src="../assets/img/product-3-2.jpg" alt="" class="product-img hover">
                </a>
                <div class="product-action">
                  <a href="#" class="action-btn quick-view-btn" aria-label="Quick View">
                    <i class="fas fa-eye"></i>
                  </a>
                  <a href="#" class="action-btn" aria-label="Join as a Manufacturer">
                    <i class="fas fa-user"></i>
                  </a>
                  <a href="#" class="action-btn" aria-label="Add to wish list">
                    <i class="fas fa-heart"></i>
                  </a>
                </div>
                <div class="product-badge light-orange">New</div>
              </div>
              <div class="product-content">
                <span class="product-catagory">Clothing</span>
                <a href="details.html">
                  <h3 class="product-title">Colorful Pattern Shirts</h3>
                </a>
                <div class="product-catagory">
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos atque dolo</p>
                </div>
                <a href="index.html" class="btn">Find out</a>
              </div>
            </div>
            <div class="product-item swiper-slide">
              <div class="product-banner">
                <a href="details.html" class="product-images">
                  <img src="../assets/img/product-4-1.jpg" alt="" class="product-img default">
                  <img src="../assets/img/product-4-2.jpg" alt="" class="product-img hover">
                </a>
                <div class="product-action">
                  <a href="#" class="action-btn quick-view-btn" aria-label="Quick View">
                    <i class="fas fa-eye"></i>
                  </a>
                  <a href="#" class="action-btn" aria-label="Join as a Manufacturer">
                    <i class="fas fa-user"></i>
                  </a>
                  <a href="#" class="action-btn" aria-label="Add to wish list">
                    <i class="fas fa-heart"></i>
                  </a>
                </div>
                <div class="product-badge light-blue">New</div>
              </div>
              <div class="product-content">
                <span class="product-catagory">Clothing</span>
                <a href="details.html">
                  <h3 class="product-title">Colorful Pattern Shirts</h3>
                </a>
                <div class="product-catagory">
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos atque dolo</p>
                </div>
                <a href="index.html" class="btn">Find out</a>
              </div>
            </div>
            <div class="product-item swiper-slide">
              <div class="product-banner">
                <a href="details.html" class="product-images">
                  <img src="../assets/img/product-5-1.jpg" alt="" class="product-img default">
                  <img src="../assets/img/product-5-2.jpg" alt="" class="product-img hover">
                </a>
                <div class="product-action">
                  <a href="#" class="action-btn quick-view-btn" aria-label="Quick View">
                    <i class="fas fa-eye"></i>
                  </a>
                  <a href="#" class="action-btn" aria-label="Join as a Manufacturer">
                    <i class="fas fa-user"></i>
                  </a>
                  <a href="#" class="action-btn" aria-label="Add to wish list">
                    <i class="fas fa-heart"></i>
                  </a>
                </div>
                <div class="product-badge light-orange">New</div>
              </div>
              <div class="product-content">
                <span class="product-catagory">Clothing</span>
                <a href="details.html">
                  <h3 class="product-title">Colorful Pattern Shirts</h3>
                </a>
                <div class="product-catagory">
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos atque dolo</p>
                </div>
                <a href="index.html" class="btn">Find out</a>
              </div>
            </div>
            <div class="product-item swiper-slide">
              <div class="product-banner">
                <a href="details.html" class="product-images">
                  <img src="../assets/img/product-6-1.jpg" alt="" class="product-img default">
                  <img src="../assets/img/product-6-2.jpg" alt="" class="product-img hover">
                </a>
                <div class="product-action">
                  <a href="#" class="action-btn quick-view-btn" aria-label="Quick View">
                    <i class="fas fa-eye"></i>
                  </a>
                  <a href="#" class="action-btn" aria-label="Join as a Manufacturer">
                    <i class="fas fa-user"></i>
                  </a>
                  <a href="#" class="action-btn" aria-label="Add to wish list">
                    <i class="fas fa-heart"></i>
                  </a>
                </div>
                <div class="product-badge light-blue">New</div>
              </div>
              <div class="product-content">
                <span class="product-catagory">Clothing</span>
                <a href="details.html">
                  <h3 class="product-title">Colorful Pattern Shirts</h3>
                </a>
                <div class="product-catagory">
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos atque dolo</p>
                </div>
                <a href="index.html" class="btn">Find out</a>
              </div>
            </div>
            <div class="product-item swiper-slide">
              <div class="product-banner">
                <a href="details.html" class="product-images">
                  <img src="../assets/img/product-7-1.jpg" alt="" class="product-img default">
                  <img src="../assets/img/product-7-2.jpg" alt="" class="product-img hover">
                </a>
                <div class="product-action">
                  <a href="#" class="action-btn quick-view-btn" aria-label="Quick View">
                    <i class="fas fa-eye"></i>
                  </a>
                  <a href="#" class="action-btn" aria-label="Join as a Manufacturer">
                    <i class="fas fa-user"></i>
                  </a>
                  <a href="#" class="action-btn" aria-label="Add to wish list">
                    <i class="fas fa-heart"></i>
                  </a>
                </div>
                <div class="product-badge light-green">New</div>
              </div>
              <div class="product-content">
                <span class="product-catagory">Clothing</span>
                <a href="details.html">
                  <h3 class="product-title">Colorful Pattern Shirts</h3>
                </a>
                <div class="product-catagory">
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos atque dolo</p>
                </div>
                <a href="index.html" class="btn">Find out</a>
              </div>
            </div> 

          </div>
          <!-- <div class="swiper-button-next">
            <i id="right" class="fas fa-angle-right"></i>
          </div>
    <div class="swiper-button-prev">
      <i id="left" class="fas fa-angle-left"></i>
    </div> -->
  </div>
      </section>
         <!-- Quick View Modal -->
     <div id="quick-view-modal" class="modal hidden">
    <div class="modal-content">
      <span class="close">&times;</span>
      <img src="" alt="Product Image" class="modal-img">
    </div>
  </div>

      <!--=============== SHOWCASE ===============-->
      <section class="showcase section">
        <div class="showcase-container container grid">
           <div class="showcase-wrapper">
            <h3 class="section-title">Western Realease</h3>
            <div class="showcase-item">
              <a href="details.html" class="showcase-img-box">
                <img src="../assets/img/showcase-img-1.jpg" alt="" class="showcase-img">
              </a>
              <div class="show-case-content">
                <a href="details.html">
                  <h4 class="showcase-title">Floral Print Casual purse</h4>
                </a>
                <div class="product-catagory">
                  <p>Chic Floral Print Purse for Casual Eleganceg</p>
                 </div>
              </div>
            </div>
            <div class="showcase-item">
              <a href="details.html" class="showcase-img-box">
                <img src="../assets/img/showcase-img-2.jpg" alt="" class="showcase-img">
              </a>
              <div class="show-case-content">
                <a href="details.html">
                  <h4 class="showcase-title">Ruffled solid square Cushion</h4>
                </a>
                <div class="product-catagory">
                  <p>Elegant Ruffled Solid Square Cushion for Cozy Comfort.</p>
                 </div>
              </div>
            </div>
            <div class="showcase-item">
              <a href="details.html" class="showcase-img-box">
                <img src="../assets/img/showcase-img-3.jpg" alt="" class="showcase-img">
              </a>
              <div class="show-case-content">
                <a href="details.html">
                  <h4 class="showcase-title">Multi-color bag-packs</h4>
                </a>
                <div class="product-catagory">
                  <p>Vibrant Multi-Color Backpacks for Stylish Adventure Seekers.</p>
                 </div>
              </div>
            </div>

           </div>
           <div class="showcase-wrapper">
            <h3 class="section-title">Trendy</h3>
            <div class="showcase-item">
              <a href="details.html" class="showcase-img-box">
                <img src="../assets/img/showcase-img-4.jpg" alt="" class="showcase-img">
              </a>
              <div class="show-case-content">
                <a href="details.html">
                  <h4 class="showcase-title">Beggy caps </h4>
                </a>
                <div class="product-catagory">
                  <p>Trendy Beggy Caps for Casual Street Style Statements.</p>
                 </div>
              </div>
            </div>
            <div class="showcase-item">
              <a href="details.html" class="showcase-img-box">
                <img src="../assets/img/showcase-img-5.jpg" alt="" class="showcase-img">
              </a>
              <div class="show-case-content">
                <a href="details.html">
                  <h4 class="showcase-title">Bootcut style</h4>
                </a>
                <div class="product-catagory">
                  <p>Classic Bootcut Style: Timeless Elegance with a Modern Twist.</p>
                 </div>
              </div>
            </div>
            <div class="showcase-item">
              <a href="details.html" class="showcase-img-box">
                <img src="../assets/img/showcase-img-6.jpg" alt="" class="showcase-img">
              </a>
              <div class="show-case-content">
                <a href="details.html">
                  <h4 class="showcase-title">High Wasted shirts</h4>
                </a>
                <div class="product-catagory">
                  <p>Elevated Elegance: High-Waisted Shirts for Stylish Sophistication.</p>
                 </div>
              </div>
            </div>

           </div>
           <div class="showcase-wrapper">
            <h3 class="section-title">Outlet</h3>
            <div class="showcase-item">
              <a href="details.html" class="showcase-img-box">
                <img src="../assets/img/showcase-img-7.jpg" alt="" class="showcase-img">
              </a>
              <div class="show-case-content">
                <a href="details.html">
                  <h4 class="showcase-title">Formal shoes</h4>
                </a>
                <div class="product-catagory">
                  <p>Refined Footwear: Classic Formal Shoes for Polished Elegance. </p>
                 </div>
              </div>
            </div>
            <div class="showcase-item">
              <a href="details.html" class="showcase-img-box">
                <img src="../assets/img/showcase-img-8.jpg" alt="" class="showcase-img">
              </a>
              <div class="show-case-content">
                <a href="details.html">
                  <h4 class="showcase-title">Casual modern purse </h4>
                </a>
                <div class="product-catagory">
                  <p>Contemporary Casual Purse: Effortless Style for Everyday Chic. </p>
                 </div>
              </div>
            </div>
            <div class="showcase-item">
              <a href="details.html" class="showcase-img-box">
                <img src="../assets/img/showcase-img-9.jpg" alt="" class="showcase-img">
              </a>
              <div class="show-case-content">
                <a href="details.html">
                  <h4 class="showcase-title">casual shirts Wear</h4>
                </a>
                <div class="product-catagory">
                  <p>Relaxed Casual Shirts: Effortless Comfort with Everyday Style. </p>
                 </div>
              </div>
            </div>

           </div>
           <div class="showcase-wrapper">
            <h3 class="section-title">Top Seller</h3>
            <div class="showcase-item">
              <a href="details.html" class="showcase-img-box">
                <img src="../assets/img/showcase-img-1.jpg" alt="" class="showcase-img">
              </a>
              <div class="show-case-content">
                <a href="details.html">
                  <h4 class="showcase-title">Floral Print Casual purse</h4>
                </a>
                <div class="product-catagory">
                  <p>Chic Floral Print Purse for Casual Eleganceg</p>
                 </div>
              </div>
            </div>
            <div class="showcase-item">
              <a href="details.html" class="showcase-img-box">
                <img src="../assets/img/showcase-img-2.jpg" alt="" class="showcase-img">
              </a>
              <div class="show-case-content">
                <a href="details.html">
                  <h4 class="showcase-title">Ruffled solid square Cushion</h4>
                </a>
                <div class="product-catagory">
                  <p>Elegant Ruffled Solid Square Cushion for Cozy Comfort. </p>
                 </div>
              </div>
            </div>
            <div class="showcase-item">
              <a href="details.html" class="showcase-img-box">
                <img src="../assets/img/showcase-img-3.jpg" alt="" class="showcase-img">
              </a>
              <div class="show-case-content">
                <a href="details.html">
                  <h4 class="showcase-title">Multi-color bag-packs</h4>
                </a>
                <div class="product-catagory">
                  <p>Vibrant Multi-Color Backpacks for Stylish Adventure Seekers.</p>
                 </div>
              </div>
            </div>
           </div>
        </div>
      </section>
    
      <script>
        
document.addEventListener('DOMContentLoaded', function () {
  // Fetch products from get_product.php using the Fetch API
  fetch('get_product.php')
    .then(response => response.json())
    .then(data => {
      const carouselContainer = document.getElementById('carousel-container');

      // Loop through the products and create carousel items dynamically
      data.forEach(product => {
        const { name, image } = product;

        const carouselItem = document.createElement('a');
        carouselItem.classList.add('category__item', 'swiper-slide');
        carouselItem.href = 'index.php';

        const img = document.createElement('img');
        img.classList.add('category__img');
        img.src = `../Dashboard/includes/${image}`;
        img.alt = name;

        const title = document.createElement('h3');
        title.classList.add('category__title');
        title.textContent = name;

        carouselItem.appendChild(img);
        carouselItem.appendChild(title);

        carouselContainer.appendChild(carouselItem);
      });
    })
    .catch(error => console.error('Error fetching products:', error));
});
</script>

    <?php
include('footer.php');
?>
