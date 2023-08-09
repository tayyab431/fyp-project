<?php
$path = dirname(__FILE__);
include($path . '/language/lang.php');
include($path . '/language/language-code.php');
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
    <link rel="stylesheet" type="text/css" href="product.css">
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
<body>
  <!---Header-->
  <nav>
    <div class="nav-bar">
    <i class='bx bx-menu sidebarOpen'></i>
    <span class="logo navLogo"><a href="Home-page.php"><img id ="logo" src="images/WHITE-COLOR-LOGO.png" alt="light logo"></a></span>
    <span class="logo navLogo"><a href="Home-page.php"><img id ="dark-logo" src="images/BLACK-COLOR-LOGO.png" alt="light logo"></a></span>
    <div class="menu">
    <div class="logo-toggle">
    <span class="logo navLogo"><a href="Home-page.php"><img id ="logo" src="images/WHITE-COLOR-LOGO.png" alt="light logo"></a></span>
    <span class="logo navLogo"><a href="Home-page.php"><img id ="dark-logo" src="images/BLACK-COLOR-LOGO.png" alt="light logo"></a></span>
 
    <i class='bx bx-x siderbarClose'></i>
    </div>
    <ul class="nav-links">
    <li><a href="Home-page.php"><?php echo $top_nav[$language]['0']?></a></li>
    <li><a href="Aboutt.php"><?php echo $top_nav[$language]['1']?></a></li>
    <li><a href="#!">Products</a></li>
    <li><a href="index.php"><?php echo $top_nav[$language]['3']?></a></li>
    <li><a href="suppor-page.php"><?php echo $top_nav[$language]['4']?></a></li>
    <!-- <li><a href="funda-service/admin\includes\log.php"></a></li> -->
    <li><a href="login.php"><?php echo $top_nav[$language]['9']?></a></li> 
    </ul>
    </div>
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
  <select onchange="set_language()" name="lang" id="language">
   <option value="en" <?php echo $en_select ?>><?php echo $top_nav[$language]['7']?></option>
   <option value="urdu" <?php echo $urdu_select ?>><?php echo $top_nav[$language]['8']?></option></select>
  <a href="signup.php" class="btn"><?php echo $top_nav[$language]['10']?></a>
  <div class="dropdown">
  <button class="dropdown-toggle" type="button" id="dropdownMenuButton">
    <span class="dropdown-profile">
      <img src="icons8-user-64 (1).png" alt="Profile Picture" class="profile-picture">
    </span>
    <span class="dropdown-icon">▼</span>
  </button>
  <ul class="dropdown-menu">
    <li class="dropdown-item">My profile</li>
    <li class="dropdown-item">Settings</li>
    <li class="dropdown-item"><a href="login.php">Log in</a></li>
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
        <h3 class="section__title">
           Products   
        </h3>
        <div class="catagories__container swiper">
          <div class="swiper-wrapper">
            <a href="index.php" class="category__item swiper-slide">
              <img src="assets/img/category-1.jpg" class="catagory__img" alt="">
              <h3 class="catagory__title">T-Shirt</h3>
            </a>
            <a href="index.php" class="category__item swiper-slide">
              <img src="assets/img/category-2.jpg" class="catagory__img" alt="">
              <h3 class="catagory__title">Bags</h3>
            </a>
            <a href="index.php" class="category__item swiper-slide">
              <img src="assets/img/category-3.jpg" class="catagory__img" alt="">
              <h3 class="catagory__title">Sandal</h3>
            </a>
            <a href="index.php" class="category__item swiper-slide">
              <img src="assets/img/category-4.jpg" class="catagory__img" alt="">
              <h3 class="catagory__title">Scarf Caps</h3>
            </a>
            <a href="index.php" class="category__item swiper-slide">
              <img src="assets/img/category-5.jpg" class="catagory__img" alt="">
              <h3 class="catagory__title">Shoes</h3>
            </a>
            <a href="index.php" class="category__item swiper-slide">
              <img src="assets/img/category-6.jpg" class="catagory__img" alt="">
              <h3 class="catagory__title">Pillow-case</h3>
            </a>
            <a href="shop.html" class="category__item swiper-slide">
              <img src="assets/img/category-7.jpg" class="catagory__img" alt="">
              <h3 class="catagory__title">Jump-suit</h3>
            </a>
            <a href="shop.html" class="category__item swiper-slide">
              <img src="assets/img/category-8.jpg" class="catagory__img" alt="">
              <h3 class="catagory__title">Hats</h3>
            </a>
            <a href="shop.html" class="category__item swiper-slide">
              <img src="assets/img/category-1.jpg" class="catagory__img" alt="">
              <h3 class="catagory__title">T-Shirt</h3>
            </a>
            <a href="shop.html" class="category__item swiper-slide">
              <img src="assets/img/category-2.jpg" class="catagory__img" alt="">
              <h3 class="catagory__title">Bags</h3>
            </a>
            <a href="shop.html" class="category__item swiper-slide">
              <img src="assets/img/category-3.jpg" class="catagory__img" alt="">
              <h3 class="catagory__title">Sandal</h3>
            </a>
            <a href="shop.html" class="category__item swiper-slide">
              <img src="assets/img/category-4.jpg" class="catagory__img" alt="">
              <h3 class="catagory__title">Scarf Caps</h3>
            </a>
            <a href="shop.html" class="category__item swiper-slide">
              <img src="assets/img/category-5.jpg" class="catagory__img" alt="">
              <h3 class="catagory__title">Shoes</h3>
            </a>
            <a href="shop.html" class="category__item swiper-slide">
              <img src="assets/img/category-6.jpg" class="catagory__img" alt="">
              <h3 class="catagory__title">Pillow-case</h3>
            </a>
            <a href="shop.html" class="category__item swiper-slide">
              <img src="assets/img/category-7.jpg" class="catagory__img" alt="">
              <h3 class="catagory__title">Jump-suit</h3>
            </a>
            <a href="shop.html" class="category__item swiper-slide">
              <img src="assets/img/category-8.jpg" class="catagory__img" alt="">
              <h3 class="catagory__title">Hats</h3>
            </a>
          </div>
          <!-- <div class="swiper-button-next">
            <i id="right" class="fas fa-angle-right"></i>
</div>
          <div class="swiper-button-prev">
            <i id="left" class="fas fa-angle-left"></i>
            </div> -->
          
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
          <img src="assets/img/product-1-1.jpg" alt="" class="product-img default">
          <img src="assets/img/product-1-2.jpg" alt="" class="product-img hover">
        </a>
        <div class="product-action">
          <a href="#" class="action-btn" aria-label="Quick View">
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
          <img src="assets/img/product-2-1.jpg" alt="" class="product-img default">
          <img src="assets/img/product-2-2.jpg" alt="" class="product-img hover">
        </a>
        <div class="product-action">
          <a href="#" class="action-btn" aria-label="Quick View">
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
          <img src="assets/img/product-3-1.jpg" alt="" class="product-img default">
          <img src="assets/img/product-3-2.jpg" alt="" class="product-img hover">
        </a>
        <div class="product-action">
          <a href="#" class="action-btn" aria-label="Quick View">
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
          <img src="assets/img/product-4-1.jpg" alt="" class="product-img default">
          <img src="assets/img/product-4-2.jpg" alt="" class="product-img hover">
        </a>
        <div class="product-action">
          <a href="#" class="action-btn" aria-label="Quick View">
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
          <img src="assets/img/product-5-1.jpg" alt="" class="product-img default">
          <img src="assets/img/product-5-2.jpg" alt="" class="product-img hover">
        </a>
        <div class="product-action">
          <a href="#" class="action-btn" aria-label="Quick View">
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
          <img src="assets/img/product-6-1.jpg" alt="" class="product-img default">
          <img src="assets/img/product-6-2.jpg" alt="" class="product-img hover">
        </a>
        <div class="product-action">
          <a href="#" class="action-btn" aria-label="Quick View">
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
          <img src="assets/img/product-7-1.jpg" alt="" class="product-img default">
          <img src="assets/img/product-7-2.jpg" alt="" class="product-img hover">
        </a>
        <div class="product-action">
          <a href="#" class="action-btn" aria-label="Quick View">
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
          <img src="assets/img/product-8-1.jpg" alt="" class="product-img default">
          <img src="assets/img/product-8-2.jpg" alt="" class="product-img hover">
        </a>
        <div class="product-action">
          <a href="#" class="action-btn" aria-label="Quick View">
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
          <img src="assets/img/product-13-1.jpg" alt="" class="product-img default">
          <img src="assets/img/product-13-2.jpg" alt="" class="product-img hover">
        </a>
        <div class="product-action">
          <a href="#" class="action-btn" aria-label="Quick View">
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
          <img src="assets/img/product-2-1.jpg" alt="" class="product-img default">
          <img src="assets/img/product-2-2.jpg" alt="" class="product-img hover">
        </a>
        <div class="product-action">
          <a href="#" class="action-btn" aria-label="Quick View">
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
          <img src="assets/img/product-10-1.jpg" alt="" class="product-img default">
          <img src="assets/img/product-10-2.jpg" alt="" class="product-img hover">
        </a>
        <div class="product-action">
          <a href="#" class="action-btn" aria-label="Quick View">
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
          <img src="assets/img/product-4-1.jpg" alt="" class="product-img default">
          <img src="assets/img/product-4-2.jpg" alt="" class="product-img hover">
        </a>
        <div class="product-action">
          <a href="#" class="action-btn" aria-label="Quick View">
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
          <img src="assets/img/product-5-1.jpg" alt="" class="product-img default">
          <img src="assets/img/product-5-2.jpg" alt="" class="product-img hover">
        </a>
        <div class="product-action">
          <a href="#" class="action-btn" aria-label="Quick View">
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
          <img src="assets/img/product-11-1.jpg" alt="" class="product-img default">
          <img src="assets/img/product-11-2.jpg" alt="" class="product-img hover">
        </a>
        <div class="product-action">
          <a href="#" class="action-btn" aria-label="Quick View">
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
          <img src="assets/img/product-7-1.jpg" alt="" class="product-img default">
          <img src="assets/img/product-7-2.jpg" alt="" class="product-img hover">
        </a>
        <div class="product-action">
          <a href="#" class="action-btn" aria-label="Quick View">
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
          <img src="assets/img/product-8-1.jpg" alt="" class="product-img default">
          <img src="assets/img/product-8-2.jpg" alt="" class="product-img hover">
        </a>
        <div class="product-action">
          <a href="#" class="action-btn" aria-label="Quick View">
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
          <img src="assets/img/product-1-1.jpg" alt="" class="product-img default">
          <img src="assets/img/product-1-2.jpg" alt="" class="product-img hover">
        </a>
        <div class="product-action">
          <a href="#" class="action-btn" aria-label="Quick View">
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
          <img src="assets/img/product-9-1.jpg" alt="" class="product-img default">
          <img src="assets/img/product-9-2.jpg" alt="" class="product-img hover">
        </a>
        <div class="product-action">
          <a href="#" class="action-btn" aria-label="Quick View">
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
          <img src="assets/img/product-10-1.jpg" alt="" class="product-img default">
          <img src="assets/img/product-10-2.jpg" alt="" class="product-img hover">
        </a>
        <div class="product-action">
          <a href="#" class="action-btn" aria-label="Quick View">
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
          <img src="assets/img/product-4-1.jpg" alt="" class="product-img default">
          <img src="assets/img/product-4-2.jpg" alt="" class="product-img hover">
        </a>
        <div class="product-action">
          <a href="#" class="action-btn" aria-label="Quick View">
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
          <img src="assets/img/product-5-1.jpg" alt="" class="product-img default">
          <img src="assets/img/product-5-2.jpg" alt="" class="product-img hover">
        </a>
        <div class="product-action">
          <a href="#" class="action-btn" aria-label="Quick View">
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
          <img src="assets/img/product-9-1.jpg" alt="" class="product-img default">
          <img src="assets/img/product-9-2.jpg" alt="" class="product-img hover">
        </a>
        <div class="product-action">
          <a href="#" class="action-btn" aria-label="Quick View">
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
          <img src="assets/img/product-7-1.jpg" alt="" class="product-img default">
          <img src="assets/img/product-7-2.jpg" alt="" class="product-img hover">
        </a>
        <div class="product-action">
          <a href="#" class="action-btn" aria-label="Quick View">
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
          <img src="assets/img/product-11-1.jpg" alt="" class="product-img default">
          <img src="assets/img/product-11-2.jpg" alt="" class="product-img hover">
        </a>
        <div class="product-action">
          <a href="#" class="action-btn" aria-label="Quick View">
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
                  <img src="assets/img/product-1-1.jpg" alt="" class="product-img default">
                  <img src="assets/img/product-1-2.jpg" alt="" class="product-img hover">
                </a>
                <div class="product-action">
                  <a href="#" class="action-btn" aria-label="Quick View">
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
                  <img src="assets/img/product-2-1.jpg" alt="" class="product-img default">
                  <img src="assets/img/product-2-2.jpg" alt="" class="product-img hover">
                </a>
                <div class="product-action">
                  <a href="#" class="action-btn" aria-label="Quick View">
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
                  <img src="assets/img/product-3-1.jpg" alt="" class="product-img default">
                  <img src="assets/img/product-3-2.jpg" alt="" class="product-img hover">
                </a>
                <div class="product-action">
                  <a href="#" class="action-btn" aria-label="Quick View">
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
                  <img src="assets/img/product-4-1.jpg" alt="" class="product-img default">
                  <img src="assets/img/product-4-2.jpg" alt="" class="product-img hover">
                </a>
                <div class="product-action">
                  <a href="#" class="action-btn" aria-label="Quick View">
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
                  <img src="assets/img/product-5-1.jpg" alt="" class="product-img default">
                  <img src="assets/img/product-5-2.jpg" alt="" class="product-img hover">
                </a>
                <div class="product-action">
                  <a href="#" class="action-btn" aria-label="Quick View">
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
                  <img src="assets/img/product-6-1.jpg" alt="" class="product-img default">
                  <img src="assets/img/product-6-2.jpg" alt="" class="product-img hover">
                </a>
                <div class="product-action">
                  <a href="#" class="action-btn" aria-label="Quick View">
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
                  <img src="assets/img/product-7-1.jpg" alt="" class="product-img default">
                  <img src="assets/img/product-7-2.jpg" alt="" class="product-img hover">
                </a>
                <div class="product-action">
                  <a href="#" class="action-btn" aria-label="Quick View">
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
                  <img src="assets/img/product-1-1.jpg" alt="" class="product-img default">
                  <img src="assets/img/product-1-2.jpg" alt="" class="product-img hover">
                </a>
                <div class="product-action">
                  <a href="#" class="action-btn" aria-label="Quick View">
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
                  <img src="assets/img/product-2-1.jpg" alt="" class="product-img default">
                  <img src="assets/img/product-2-2.jpg" alt="" class="product-img hover">
                </a>
                <div class="product-action">
                  <a href="#" class="action-btn" aria-label="Quick View">
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
                  <img src="assets/img/product-3-1.jpg" alt="" class="product-img default">
                  <img src="assets/img/product-3-2.jpg" alt="" class="product-img hover">
                </a>
                <div class="product-action">
                  <a href="#" class="action-btn" aria-label="Quick View">
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
                  <img src="assets/img/product-4-1.jpg" alt="" class="product-img default">
                  <img src="assets/img/product-4-2.jpg" alt="" class="product-img hover">
                </a>
                <div class="product-action">
                  <a href="#" class="action-btn" aria-label="Quick View">
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
                  <img src="assets/img/product-5-1.jpg" alt="" class="product-img default">
                  <img src="assets/img/product-5-2.jpg" alt="" class="product-img hover">
                </a>
                <div class="product-action">
                  <a href="#" class="action-btn" aria-label="Quick View">
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
                  <img src="assets/img/product-6-1.jpg" alt="" class="product-img default">
                  <img src="assets/img/product-6-2.jpg" alt="" class="product-img hover">
                </a>
                <div class="product-action">
                  <a href="#" class="action-btn" aria-label="Quick View">
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
                  <img src="assets/img/product-7-1.jpg" alt="" class="product-img default">
                  <img src="assets/img/product-7-2.jpg" alt="" class="product-img hover">
                </a>
                <div class="product-action">
                  <a href="#" class="action-btn" aria-label="Quick View">
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

      <!--=============== SHOWCASE ===============-->
      <section class="showcase section">
        <div class="showcase-container container grid">
           <div class="showcase-wrapper">
            <h3 class="section-title">Western Realease</h3>
            <div class="showcase-item">
              <a href="details.html" class="showcase-img-box">
                <img src="assets/img/showcase-img-1.jpg" alt="" class="showcase-img">
              </a>
              <div class="show-case-content">
                <a href="details.html">
                  <h4 class="showcase-title">Floral Print Casual Shirts</h4>
                </a>
                <div class="product-catagory">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing</p>
                 </div>
              </div>
            </div>
            <div class="showcase-item">
              <a href="details.html" class="showcase-img-box">
                <img src="assets/img/showcase-img-2.jpg" alt="" class="showcase-img">
              </a>
              <div class="show-case-content">
                <a href="details.html">
                  <h4 class="showcase-title">Ruffled solid long Sleeves</h4>
                </a>
                <div class="product-catagory">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing</p>
                 </div>
              </div>
            </div>
            <div class="showcase-item">
              <a href="details.html" class="showcase-img-box">
                <img src="assets/img/showcase-img-3.jpg" alt="" class="showcase-img">
              </a>
              <div class="show-case-content">
                <a href="details.html">
                  <h4 class="showcase-title">Multi-color V-neck T-shirt</h4>
                </a>
                <div class="product-catagory">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing</p>
                 </div>
              </div>
            </div>

           </div>
           <div class="showcase-wrapper">
            <h3 class="section-title">Trendy</h3>
            <div class="showcase-item">
              <a href="details.html" class="showcase-img-box">
                <img src="assets/img/showcase-img-4.jpg" alt="" class="showcase-img">
              </a>
              <div class="show-case-content">
                <a href="details.html">
                  <h4 class="showcase-title">Beggy Jeans </h4>
                </a>
                <div class="product-catagory">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing </p>
                 </div>
              </div>
            </div>
            <div class="showcase-item">
              <a href="details.html" class="showcase-img-box">
                <img src="assets/img/showcase-img-5.jpg" alt="" class="showcase-img">
              </a>
              <div class="show-case-content">
                <a href="details.html">
                  <h4 class="showcase-title">Bootcut style</h4>
                </a>
                <div class="product-catagory">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing  </p>
                 </div>
              </div>
            </div>
            <div class="showcase-item">
              <a href="details.html" class="showcase-img-box">
                <img src="assets/img/showcase-img-6.jpg" alt="" class="showcase-img">
              </a>
              <div class="show-case-content">
                <a href="details.html">
                  <h4 class="showcase-title">High Wasted Bell Bottoms</h4>
                </a>
                <div class="product-catagory">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing </p>
                 </div>
              </div>
            </div>

           </div>
           <div class="showcase-wrapper">
            <h3 class="section-title">Outlet</h3>
            <div class="showcase-item">
              <a href="details.html" class="showcase-img-box">
                <img src="assets/img/showcase-img-7.jpg" alt="" class="showcase-img">
              </a>
              <div class="show-case-content">
                <a href="details.html">
                  <h4 class="showcase-title">Formal Dresses</h4>
                </a>
                <div class="product-catagory">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing </p>
                 </div>
              </div>
            </div>
            <div class="showcase-item">
              <a href="details.html" class="showcase-img-box">
                <img src="assets/img/showcase-img-8.jpg" alt="" class="showcase-img">
              </a>
              <div class="show-case-content">
                <a href="details.html">
                  <h4 class="showcase-title">Casual Jeans Jacket </h4>
                </a>
                <div class="product-catagory">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing  </p>
                 </div>
              </div>
            </div>
            <div class="showcase-item">
              <a href="details.html" class="showcase-img-box">
                <img src="assets/img/showcase-img-9.jpg" alt="" class="showcase-img">
              </a>
              <div class="show-case-content">
                <a href="details.html">
                  <h4 class="showcase-title">Gym & Sports Wear</h4>
                </a>
                <div class="product-catagory">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing </p>
                 </div>
              </div>
            </div>

           </div>
           <div class="showcase-wrapper">
            <h3 class="section-title">Top Seller</h3>
            <div class="showcase-item">
              <a href="details.html" class="showcase-img-box">
                <img src="assets/img/showcase-img-1.jpg" alt="" class="showcase-img">
              </a>
              <div class="show-case-content">
                <a href="details.html">
                  <h4 class="showcase-title">Floral Print Casual Shirts</h4>
                </a>
                <div class="product-catagory">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing </p>
                 </div>
              </div>
            </div>
            <div class="showcase-item">
              <a href="details.html" class="showcase-img-box">
                <img src="assets/img/showcase-img-2.jpg" alt="" class="showcase-img">
              </a>
              <div class="show-case-content">
                <a href="details.html">
                  <h4 class="showcase-title">Ruffled solid long Sleeves</h4>
                </a>
                <div class="product-catagory">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing </p>
                 </div>
              </div>
            </div>
            <div class="showcase-item">
              <a href="details.html" class="showcase-img-box">
                <img src="assets/img/showcase-img-3.jpg" alt="" class="showcase-img">
              </a>
              <div class="show-case-content">
                <a href="details.html">
                  <h4 class="showcase-title">Multi-color V-neck T-shirt</h4>
                </a>
                <div class="product-catagory">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing </p>
                 </div>
              </div>
            </div>
           </div>
        </div>
      </section>
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="footer-col">
              <img class="footer-logo" src="images/WHITE-COLOR-LOGO.png" alt="">
              <p><?php echo $footer[$language]['0']?></p>    
          </div>
          <div class="footer-col">
            <h4><?php echo $footer[$language]['1']?></h4>
            <ul>
            <li><a href="#"><?php echo $top_nav[$language]['0']?></a></li>
          <li><a href="#"><?php echo $top_nav[$language]['1']?></a></li>
          <li><a href="#"><?php echo $top_nav[$language]['2']?></a></li>
          <li><a href="#"><?php echo $top_nav[$language]['3']?></a></li>
          <li><a href="#"><?php echo $footer[$language]['2']?></a></li>
         <li><a href="#"><?php echo $top_nav[$language]['9']?></a></li>
          <li><a href="#"><?php echo $top_nav[$language]['4']?></a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4><?php echo $top_nav[$language]['2']?></h4>
            <ul>
            <li><a href="#"><?php echo $access_ries[$language]['1']?></a></li>
          <li><a href="#"><?php echo $access_ries[$language]['6']?></a></li>
          <li><a href="#"><?php echo $access_ries[$language]['10']?></a></li>
          <li><a href="#"><?php echo $access_ries[$language]['4']?></a></li>
          <li><a href="#"><?php echo $footer[$language]['3']?></a></li>
          <li><a href="#"><?php echo $access_ries[$language]['8']?></a></li>
          <li><a href="#"><?php echo $access_ries[$language]['12']?></a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4><?php echo $footer[$language]['4']?></h4>
            <div class="social-links">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
        </div>
      </div>
    </footer>
   
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        duration: 3000,
        once: true,
      });
    </script>
       <script src="language/lang.js"></script>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!--=============== SWIPER JS ===============-->
        <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
        <script src="CB.js"></script>
</body>
</html>