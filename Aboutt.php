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
    <link rel="stylesheet" type="text/css" href="Home-page.css">
    <link href="http://fonts.googleapis.com/css?family=KaushanScript|Poppins&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/5c515fb3d0.js" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
     <script type="text/javascript" src="jquery-3.6.2.js"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">      
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
    <li><a href="#!"><?php echo $top_nav[$language]['1']?></a></li>
    <li><a href="accessories.php"><?php echo $top_nav[$language]['2']?></a></li>
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
<section class="home1" id="home">
    <div class="content">
    <h3><?php echo $home_start[$language]['0']?></h3>
    <p><?php echo $home_start[$language]['15']?>
    </p>
    <a href="#" class="btn"><?php echo $access_ries[$language]['3']?></a>
    </div>
</section>
<section class="about" id="About">
    <h1 class="heading"><?php echo $access_ries[$language]['18']?></h1>
    <div class="row">
        <div class="image">
            <img src="images/pexels-batuhan-kocabaş-14146828.jpg">

        </div>
        <div class="content">
            <h3><?php echo $access_ries[$language]['19']?></h3>
            <p><?php echo $access_ries[$language]['20']?></p>
           <a href="#" class="btn"><?php echo $access_ries[$language]['21']?></a>
                </div>
    </div>
    </section>  
  
    <section class="row-a">
            <div class="column">
            
                <img class="img" src="images/pexels-rachel-claire-5864245.jpg" alt="">
                <h1>Unveiling the Manufacturing Art </h1>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate deleniti nulla volupt
                    atem praesentium. Similique repellendus illo sunt blanditiis corrupti, iure nesciunt, solut
                    a fugit ame porrobus itaque quibusdam cumque ratione omnis distinctio,
                     labore pariatur perferendis neque provident eligendi non quisquam atque eaque accusantium numquam 
                     laboriosam tempora laudantium repellat praesentium sapiente! Corpobusdam cumque ratione omnis distinctio,
                     labore pariatur perferendis neque provident eligendi non quisquam atque eaque accusantium numquam 
                     laboriosam tempora laudantium repellat praesentium sapiente! Corporis dolores, autem reiciendis ea modi,
                    <br>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate deleniti nulla volupt
                    atem praesentium. Similique repellendus illo sunt blandbusdam cumque ratione omnis distinctio,
                     labore pariatur perferendis neque provident eligendi non quisquam atque eaque accusantium numquam 
                     laboriosam tempora laudantium repellat praesentium sapiente! Corpobusdam cumque ratione omnis distinctio,
                     labore pariatur perferendis neque provident eligendi non quisquam atque eaque accusantium numquam 
                     laboriosam tempora laudantium repellat praesentium sapiente! Corpoitiis corrupti, iure nesciunt, solut
                    a fugit ame porro recusandae. Commodi, illum voluptatem ullam qui sed quos voluptatibus i
                    psum nam necessitatibus distinctio nesciunt quaerat. Lorem ipsum distinctio nesciunt quaerat. Lorem ipsum  
                   e. Delectus vero inventore ratione animi soluta, non natus illo voluptatem!
                </p>
            </div>
            <div class="row-b">
                <div class="column-b">
                <img src ="images/banners.jpg" alt="">
                <h1>Unveiling the Manufacturing Art </h1>
                <p>Lorem ipsum dolor sit  quasi inventore, a minus quae quisquam ipsa mollitia, iure cumque totam quis harum nostrum delectus sed qui, accusantium quibusdam. Nobis placeat eius reiciendis, rerum praesentium rem aliquam laboriosam voluptatum. Maiores, atque totam?</p>
            </div>
            <div class="column-b">
                <img src ="images/119.webp" alt="">
                <h1>Qualit at<br>Every Stitch</h1>
                <p>Lorem ipsum dolor sit  quasi inventore, a minus quae quisquam ipsa mollitia, iure cumque totam quis harum nostrum delectus sed qui, accusantium quibusdam. Nobis placeat eius reiciendis, rerum praesentium rem aliquam laboriosam voluptatum. Maiores, atque totam?</p>
            </div>
           
            </div>
        </section> 
     <div class="container-service">
     <h1 class="heading"><span>Our</span>Services</h1>
      <div class="row">
        <div class="service">
          <i class="fas fa-laptop-code"></i>
          <h2>Chat-bot for instant response
          </h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae soluta temporibus, hic consequuntur nesciunt tenetur, harum, veniam velit maxime nihil sit ducimus</p>
        </div>
        <div class="service">
          <i class="fas fa-mobile-alt"></i>
          <h2>Count on 24/7 support
          </h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae soluta temporibus, hic consequuntur nesciunt tenetur, harum, veniam velit maxime nihil sit ducimus</p>
        </div>
        <div class="service">
          <i class="fas fa-chart-pie"></i>
          <h2>Get quality work done quickly
          </h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae soluta temporibus, hic consequuntur nesciunt tenetur, harum, veniam velit maxime nihil sit ducimus</p>
        </div>
        <div class="service">
        <i class="fa fa-check-square-o"></i>
          <h2>Protected Payments, Every Time
          </h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae soluta temporibus, hic consequuntur nesciunt tenetur, harum, veniam velit maxime nihil sit ducimus</p>
        </div>
        <div class="service">
          <i class="fas fa-id-badge"></i>
          <h2>The Best For Every Budget
          </h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae soluta temporibus, hic consequuntur nesciunt tenetur, harum, veniam velit maxime nihil sit ducimus</p>
        </div>
        <div class="service">
          <i class="fas fa-network-wired"></i>
          <h2>Quality work done quickly
          </h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae soluta temporibus, hic consequuntur nesciunt tenetur, harum, veniam velit maxime nihil sit ducimus</p>
        </div>
        
      </div>
     </div>
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
    <script src="language/lang.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>