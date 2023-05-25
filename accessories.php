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
    <link rel="stylesheet" type="text/css" href="Home-page.css">
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
    <i class='bx bx-menu sidebarOpen' ></i>
    <span class="logo navLogo"><a href="Home-page.php"><img id ="logo" src="images/WHITE-COLOR-LOGO.png" alt="light logo"></a></span>
    <span class="logo"><a href="Home-page.php"><img id ="dark-logo" src="images/BLACK-COLOR-LOGO.png" alt="light logo"></a></span>
    <div class="menu">
    <div class="logo-toggle">
    <span class="logo navLogo"><a href="Home-page.php"><img id ="logo" src="images/WHITE-COLOR-LOGO.png" alt="light logo"></a></span>
    <span class="logo"><a href="Home-page.php"><img id ="dark-logo" src="images/BLACK-COLOR-LOGO.png" alt="light logo"></a></span>
    <i class='bx bx-x siderbarClose'></i>
    </div>
    <ul class="nav-links">
    <li><a href="Home-page.php"><?php echo $top_nav[$language]['0']?></a></li>
    <li><a href="Aboutt.php"><?php echo $top_nav[$language]['1']?></a></li>
    <li><a href="accessories.php"><?php echo $top_nav[$language]['2']?></a></li>
    <li><a href="index.php"><?php echo $top_nav[$language]['3']?></a></li>
    <li><a href="suppor-page.php"><?php echo $top_nav[$language]['4']?></a></li>
    <li><a href="funda-service/admin\includes\log.php"><?php echo $top_nav[$language]['5']?></a></li>
    <li>
        <select onchange="set_language()" name="lang" id="language">
      

       <option value="en" <?php echo $en_select ?>><?php echo $top_nav[$language]['7']?></option>
    <option value="urdu" <?php echo $urdu_select ?>><?php echo $top_nav[$language]['8']?></option></select></li>
    <li><a href="login.php"><?php echo $top_nav[$language]['9']?></a></li>
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
        <input type="text" placeholder="Search...">
        <i class='bx bx-search'></i>
    </div>
  </div>
  </div>
  </div>
  </nav>
  <section class="home2">
    <div class="content">
    <h3><?php echo $home_start[$language]['0']?></h3>
    <p><?php echo $home_start[$language]['15']?>
    </p>
    <a href="#" class="btn"><?php echo $access_ries[$language]['3']?></a>
    </div>
</section>
    <section class="accessories">
        <h1 class="heading2"><?php echo $access_ries[$language]['3']?></h1>
        <div class="box-container" data-aos="fade-up">
          <div class="box">
              <img src="images/a1.jpg">
              <h3><?php echo $access_ries[$language]['1']?></h3>
              <p><?php echo $access_ries[$language]['2']?></p>
              <a href="#" class="btn"><?php echo $access_ries[$language]['3']?></a>
          </div>
          <div class="box">
              <img src="images/a5.webp">
              <h3><?php echo $access_ries[$language]['4']?></h3>
              <p><?php echo $access_ries[$language]['5']?></p>
              <a href="#" class="btn"><?php echo $access_ries[$language]['3']?></a>
          </div>
          <div class="box">
              <img src="images/a3.jpg">
              <h3><?php echo $access_ries[$language]['6']?></h3>
              <p><?php echo $access_ries[$language]['7']?></p>
              <a href="#" class="btn"><?php echo $access_ries[$language]['3']?></a>
          </div>
          <div class="box">
              <img src="images/a4.jpg">
              <h3><?php echo $access_ries[$language]['8']?></h3>
              <p><?php echo $access_ries[$language]['9']?></p>
              <a href="#" class="btn"><?php echo $access_ries[$language]['3']?></a>
          </div>
          <div class="box">
              <img src="images/track-men.jpg">
              <h3><?php echo $access_ries[$language]['10']?></h3>
              <p><?php echo $access_ries[$language]['11']?></p>
              <a href="#" class="btn"><?php echo $access_ries[$language]['3']?></a>
          </div>
          <div class="box">
              <img src="images/a6.webp">
              <h3><?php echo $access_ries[$language]['12']?></h3>
              <p><?php echo $access_ries[$language]['13']?></p>
              <a href="#" class="btn"><?php echo $access_ries[$language]['3']?></a>
          </div>
          <div class="box">
              <img src="images/a7.jpg">
              <h3><?php echo $access_ries[$language]['14']?></h3>
              <p><?php echo $access_ries[$language]['15']?></p>
              <a href="#" class="btn"><?php echo $access_ries[$language]['3']?></a>
          </div>
          <div class="box">
              <img src="images/gym.jpg">
              <h3><?php echo $access_ries[$language]['16']?></h3>
              <p><?php echo $access_ries[$language]['17']?></p>
              <a href="#" class="btn"><?php echo $access_ries[$language]['3']?></a>
          </div>
      </div>
            <h1 class="heading2"><?php echo $access_ries[$language]['31']?></h1>
            <div class="box-container"data-aos="zoom-in">
              <div class="box">
                  <img src="images/l1.webp">
                  <h3><?php echo $access_ries[$language]['1']?></h3>
                  <p><?php echo $access_ries[$language]['2']?></p>
                  <a href="#" class="btn"><?php echo $access_ries[$language]['3']?></a>
              </div>
              <div class="box">
                  <img src="images/l3.jpg">
                  <h3><?php echo $access_ries[$language]['4']?></h3>
                  <p><?php echo $access_ries[$language]['5']?></p>
                  <a href="#" class="btn"><?php echo $access_ries[$language]['3']?></a>
              </div>
              <div class="box">
                  <img src="images/a3.jpg">
                  <h3><?php echo $access_ries[$language]['6']?></h3>
                  <p><?php echo $access_ries[$language]['7']?></p>
                  <a href="#" class="btn"><?php echo $access_ries[$language]['7']?></a>
              </div>
              <div class="box">
                  <img src="images/l4.jpg">
                  <h3><?php echo $access_ries[$language]['8']?></h3>
                  <p><?php echo $access_ries[$language]['9']?></p>
                  <a href="#" class="btn"><?php echo $access_ries[$language]['3']?></a>
              </div>
              <div class="box">
                  <img src="images/l2.webp">
                  <h3><?php echo $access_ries[$language]['10']?></h3>
                  <p><?php echo $access_ries[$language]['11']?></p>
                  <a href="#" class="btn"><?php echo $access_ries[$language]['3']?></a>
              </div>   
              <div class="box">
                  <img src="images/l5.jpg">
                  <h3><?php echo $access_ries[$language]['16']?></h3>
                  <p><?php echo $access_ries[$language]['17']?></p>
                  <a href="#" class="btn"><?php echo $access_ries[$language]['3']?></a>
              </div>
          </div>
            <h1 class="heading2"><?php echo $access_ries[$language]['32']?></h1>
            <div class="box-container"  data-aos="fade-up">
              <div class="box">
                  <img src="images/k3.jpg">
                  <h3><?php echo $access_ries[$language]['1']?></h3>
                  <p><?php echo $access_ries[$language]['2']?></p>
                  <a href="#" class="btn"><?php echo $access_ries[$language]['3']?></a>
              </div>
              <div class="box">
                  <img src="images/k1.jpg">
                  <h3><?php echo $access_ries[$language]['4']?></h3>
                  <p><?php echo $access_ries[$language]['5']?></p>
                  <a href="#" class="btn"><?php echo $access_ries[$language]['3']?></a>
              </div>
              <div class="box">
                  <img src="images/k2.webp">
                  <h3><?php echo $access_ries[$language]['6']?></h3>
                  <p><?php echo $access_ries[$language]['7']?></p>
                  <a href="#" class="btn"><?php echo $access_ries[$language]['3']?></a>
              </div>
              <div class="box">
                  <img src="images/k4.jpg">
                  <h3><?php echo $access_ries[$language]['8']?></h3>
                  <p><?php echo $access_ries[$language]['9']?></p>
                  <a href="#" class="btn">Find Out</a>
              </div>
              <div class="box">
                  <img src="images/k6.webp">
                  <h3><?php echo $access_ries[$language]['12']?></h3>
                  <p><?php echo $access_ries[$language]['13']?></p>
                  <a href="#" class="btn"><?php echo $access_ries[$language]['3']?></a>
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
    <script src="CB.js"></script>
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
</body>
</html>