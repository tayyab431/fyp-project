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
    <li><a href="accessories.php"><?php echo $top_nav[$language]['2']?></a></li>
    <li><a href="index.php"><?php echo $top_nav[$language]['3']?></a></li>
    <li><a href="suppor-page.php"><?php echo $top_nav[$language]['4']?></a></li>
    <li><a href="funda-service/admin\includes\log.php"><?php echo $top_nav[$language]['5']?></a></li>
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
      <img src="housewife-browsing.jpg" alt="Profile Picture" class="profile-picture">
    </span>
    <span class="dropdown-icon">▼</span>
  </button>
  <ul class="dropdown-menu">
    <li class="dropdown-item">My profile</li>
    <li class="dropdown-item">Catagories</li>
    <li class="dropdown-item">log out</li>
  </ul>
</div>
  </div>
  </div>
  </nav>
<!--home start-->
<section class="home" id="home">
    <div class="content">
    <h3><?php echo $home_start[$language]['0']?></h3>
    <p><?php echo $home_start[$language]['1']?>
    </p>
    <a href="#" class="btn"><?php echo $home_start[$language]['2']?></a>
    </div>
    <!-- chatbot code start -->

    <div class="container-a">
      <div class="chatbox">
          <div class="chatbox__support">
              <div class="chatbox__header">
                  <div class="chatbox__image--header">
                      <img src="icons8-female-user-48.png" alt="image">
                  </div>
                  <div class="chatbox__content--header">
                      <h4 class="chatbox__heading--header"><?php echo $home_start[$language]['3']?></h4>
                      <p class="chatbox__description--header"><?php echo $home_start[$language]['4']?></p>
                  </div>
              </div>
              <div class="chatbox__messages">
                  <div></div>
              </div>
              <div class="chatbox__footer">
                  <input type="text" placeholder="<?php echo $top_nav[$language]['11']?>">
                  <button class="chatbox__send--footer send__button"><?php echo $home_start[$language]['5']?></button>
              </div>
          </div>
          <div class="chatbox__button">
              <button><img src="chatbox-icon.svg" alt="pic"></button>
          </div>
      </div>
  </div>

    <!-- chatbot code end here -->
</section>
<section class="about">
  <h1 class="heading"><?php echo $home_start[$language]['6']?></h1>
  <div class="row">
      <div class="content">
              <h1> <?php echo $home_start[$language]['7']?></h1>
            <div class="feature-dsc">
              <div class="f-icon">
             <i class="fa fa-check-square-o"></i>
              </div>
              <div class="f-text">
                <p><?php echo $home_start[$language]['8']?></p>
            </div>
            </div>
            <h1> <?php echo $home_start[$language]['9']?></h1>
            <div class="feature-dsc">
              <div class="f-icon">
             <i class="fa fa-check-square-o"></i>
              </div>
              <div class="f-text">
                <p> <?php echo $home_start[$language]['10']?></p>
            </div>
            </div>
            <h1><?php echo $home_start[$language]['11']?></h1>
            <div class="feature-dsc">
              <div class="f-icon">
             <i class="fa fa-check-square-o"></i>
              </div>
              <div class="f-text">
                <p><?php echo $home_start[$language]['12']?></p>
            </div>
            </div>
            <h1> <?php echo $home_start[$language]['13']?></h1>
            <div class="feature-dsc">
              <div class="f-icon">
             <i class="fa fa-check-square-o"></i>
              </div>
              <div class="f-text">
                <p><?php echo $home_start[$language]['14']?> </p>
            </div>
            </div>
      </div>
      <div class="image">
          <img src="images/73243.jpg">
      </div>   
  </div>
  </section>
<!--accessories start-->
<section class="accessories" id="#accessories">
    <h1 class="heading"><?php echo $access_ries[$language]['0']?></h1>
    <div class="box-container" data-aos="zoom-in">
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
        </div>
        <h1 class="heading"></h1>
        <div class="box-container" data-aos="fade-up"> 
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
            <img src="images/photo-1609797623185-9a0d472c827f.jpg">
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
</section>
 <!--about start-->
 <section class="about" id="About" data-aos="zoom-in">
  <h1 class="heading"><?php echo $access_ries[$language]['18']?></h1>
  <div class="row">
      <div class="image">
          <img src="images/2.jpg">
      </div>
      <div class="content">
          <h3><?php echo $access_ries[$language]['19']?></h3>
          <p><?php echo $access_ries[$language]['20']?></p>
         <a href="#" class="btn"><?php echo $access_ries[$language]['21']?></a>
              </div>
  </div>
  </section>
  <!--slider start-->
  <section>
<div class="container">
  <div class="slide-container active">
      <div class="slide">
          <div class="content">
              <h3> </h3>
              <p> </p>   
          </div>
          <video src="images/s4.mp4" muted autoplay loop></video>
      </div>
  </div>
  <div class="slide-container">
      <div class="slide">
          <div class="content">
              <h3> </h3>
              <p> </p>
          </div>
          <video src="images/s2.mp4" muted autoplay loop></video>
      </div>
  </div>
  <div class="slide-container">
      <div class="slide">
          <div class="content">
              <h3> </h3>
              <p> </p>
          </div>
          <video src="images/s3.mp4" muted autoplay loop></video>
      </div>
  </div>
  <div class="slide-container">
      <div class="slide">
          <div class="content">
              <h3> </h3>
              <p></p>
          </div>
          <video src="images/s1.mp4" muted autoplay loop></video>
      </div>
  </div>
  <div class="slide-container">
      <div class="slide">
          <div class="content">
              <h3> </h3>
              <p> </p>
          </div>
          <video src="images/s5.mp4" muted autoplay loop></video>
      </div>
  </div>
  <div class="slide-container">
      <div class="slide">
          <div class="content">
              <h3> </h3>
              <p> </p>
          </div>
          <video src="images/s6.mp4" muted autoplay loop></video>
      </div>
  </div>
  <div id="next" onclick="next()"> > </div>
  <div id="prev" onclick="prev()"> <
   </div>
</div>
</section>
<!--video-slider js-->
<script>
  let slides = document.querySelectorAll('.slide-container');
  let index = 0;
  function next()
  {
      slides[index].classList.remove('active');
      index = (index + 1) % slides.length;
      slides[index].classList.add('active');
  }
  function prev()
  {
      slides[index].classList.remove('active');
      index = (index - 1 + slides.length) % slides.length;
      slides[index].classList.add('active');
  }
</script>
<!--reviews start-->
<section class="review" id="#review"> 
    <h1 class="heading"><?php echo $review[$language]['0']?></h1>
    <div class="box-container">
        <div class="box">
          <img src="housewife-browsing.jpg" class="user">
          <h3><?php echo $review[$language]['1']?></h3>
          <div class="star">
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
          </div>
         <p><?php echo $review[$language]['2']?></p> 
         </div>
        <div class="box">
          <img src="housewife-browsing.jpg" class="user">
               <h3><?php echo $review[$language]['3']?></h3>
               <div class="star">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
            <p> <?php echo $review[$language]['4']?> </p>
           </div>
           <div class="box">
            <img src="housewife-browsing.jpg" class="user">
            <h3><?php echo $review[$language]['5']?></h3>
            <div class="star">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p><?php echo $review[$language]['6']?></p> 
           </div>      
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
    <script src="app.js"></script>
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


 <!-- <script> -->
  <!-- function set_language() {
  var language = $('#language').val();
  var currentUrl = window.location.href;
  var baseUrl = currentUrl.split('?')[0];
  var newUrl = baseUrl + '?language=' + language;
  window.location.href = newUrl;
}
</script> -->