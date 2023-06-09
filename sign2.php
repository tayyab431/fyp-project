<?php
$path = dirname(__FILE__);
include($path . '/language/lang.php');
include($path . '/language/language-code.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>clothing barters</title>
    <link rel="icon" href="images/WHITE-COLOR-LOGO.png" type="image/x-icon">
    <link rel="stylesheet" href="sign.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link href="http://fonts.googleapis.com/css?family=KaushanScript|Poppins&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/5c515fb3d0.js" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>   
   
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
     <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<nav>
    <div class="nav-bar">
    <i class='bx bx-menu sidebarOpen'></i>
    <span class="logo navLogo"><a href="Home-page.php"><img id ="logo" src="images/WHITE-COLOR-LOGO.png" alt="light logo"></a></span>
    <span class=" dark-logo navLogo"><a href="Home-page.php"><img id ="dark-logo" src="images/BLACK-COLOR-LOGO.png" alt="light logo"></a></span>
    <div class="menu">
    <div class="logo-toggle">
    <span class="logo navLogo"><a href="Home-page.php"><img id ="logo" src="images/WHITE-COLOR-LOGO.png" alt="light logo"></a></span>
    <span class="logo navLogo"><a href="Home-page.php"><img id ="dark-logo" src="images/BLACK-COLOR-LOGO.png" alt="light logo"></a></span>
 
    <i class='bx bx-x siderbarClose'></i>
    </div>
    <ul class="nav-links">
    <li><a href="Home-page.php"><?php echo $top_nav[$language]['0']?></a></li>
    <li><a href="Aboutt.php"><?php echo $top_nav[$language]['1']?></a></li>
    <li><a href="accessories.php"><?php echo $top_nav[$language]['2']?></a></li>
    <li><a href="index.php"><?php echo $top_nav[$language]['3']?></a></li>
    <li><a href="suppor-page.php"><?php echo $top_nav[$language]['4']?></a></li>
    
    <li>
        <select onchange="set_language()" name="lang" id="language">
      

       <option value="en" <?php echo $en_select ?>><?php echo $top_nav[$language]['7']?></option>
    <option value="urdu" <?php echo $urdu_select ?>><?php echo $top_nav[$language]['8']?></option></select></li>
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
  </div>
  </div>
  </nav>  
   
  <!--hero section start -->
 <!--3rd  section start --> 
 <section class="section-three">
    <div class="container">
        <div class="phone-main">
            <div class="header-phone ">
                <div class="phone-video">
                    <img src="images/IMG.jpg" alt="">
                </div>
                <div class="section-elements">
                    <div class="inner-text">
                        <h1>
                        <?php echo $join_two[$language]['0']?>
                        </h1>
                        <div class="span-text">
                        <?php echo $join_two[$language]['1']?>
                        </div>
                        <div class="services-grid">
                            <div class="info-box">
                                <div class="inner-div">
                                    <img src="assets/images/grid-img-b.svg" alt="grid-img-b">
                                <h5><?php echo $join_two[$language]['2']?></h5>
                                <p> <?php echo $join_two[$language]['3']?></p>
                                </div>
                             </div>
                            <div class="info-box">
                                <div class="inner-div">
                                <img src="assets/images/grid-img-a.svg" alt="grid-img-a">
                                <h5> <?php echo $join_two[$language]['4']?></h5>
                            <p>    <?php echo $join_two[$language]['5']?></p>
                            </div>
                        </div>
                            <div class="info-box">
                                <div class="inner-div">
                                <img src="assets/images/grid-img-c.svg" alt="grid-img-c"><h5> <?php echo $join_two[$language]['6']?></h5>
                            <p> <?php echo $join_two[$language]['7']?></p>
                            </div>
                        </div>
                            <div class="info-box">
                                <div class="inner-div">
                                <img src="assets/images/grid-img-d.svg" alt="grid-img-d"><h5> <?php echo $join_two[$language]['8']?></h5>
                            <p> <?php echo $join_two[$language]['9']?></p>
                           </div>
                        </div>
                            
                           
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="d-fl hero-text">
        <a href="signform.php"><?php echo $join_page[$language]['3']?></a>
  <a href="signup.php"><?php echo $join_page[$language]['4']?></a></div>
    </div>
   </section> 
        <!--footer start-->
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
          <li><a href="custom-order.php"><?php echo $footer[$language]['3']?></a></li>
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
  <script src="CB.js"></script>
  <script src="language/lang.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>