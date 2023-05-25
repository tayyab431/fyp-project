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
        <input type="text" placeholder="<?php echo $top_nav[$language]['12']?>">
        <i class='bx bx-search'></i>
    </div>
  </div>
  </div>
  </div>
  </nav>
  <!-- main content -->
  <div class="container mt-4"> <div class="row d-flex justify-content-center"> 
    <div class="col-md-9"> 
        <div class="card-a p-4 mt-3"> 
            <h3 class="heading mt-5 text-center"><?php echo $review[$language]['7']?></h3> 
            <div class="d-flex justify-content-center px-5"> 
                <div class="search">
                     <input type="text" class="search-input" placeholder="<?php echo $review[$language]['8']?>" name=""> <a href="#" class="search-icon"> <i class="fa fa-search"></i> </a> </div>
                     </div> 
                     <div class="row mt-4 g-1 px-4 mb-5"> 
                        <div class="col-md-2"> 
                            <div class="card-inner p-3 d-flex flex-column align-items-center"> <img src="https://i.imgur.com/Mb8kaPV.png" width="50"> 
                            <div class="text-center mg-text"> 
                                <span class="mg-text"><?php echo $review[$language]['9']?></span>
                             </div> 
                            </div> 
                        </div> 
                        <div class="col-md-2"> 
                            <div class="card-inner p-3 d-flex flex-column align-items-center"> 
                                <img src="https://i.imgur.com/ueLEPGq.png" width="50">
                                 <div class="text-center mg-text"> <span class="mg-text"><?php echo $review[$language]['10']?></span> 
                                </div> </div> </div> <div class="col-md-2"> 
                                    <div class="card-inner p-3 d-flex flex-column align-items-center"> 
                                        <img src="https://i.imgur.com/tmqv0Eq.png" width="50">
                                         <div class="text-center mg-text"> <span class="mg-text"><?php echo $review[$language]['11']?></span>
                                         </div> </div> </div> <div class="col-md-2"> 
                                            <div class="card-inner p-3 d-flex flex-column align-items-center"> <img src="https://i.imgur.com/D0Sm15i.png" width="50"> <div class="text-center mg-text"> <span class="mg-text"><?php echo $review[$language]['12']?></span> </div> </div> </div> <div class="col-md-2"> 
                                                <div class="card-inner p-3 d-flex flex-column align-items-center"> 
                                                    <img src="https://i.imgur.com/Z7BJ8Po.png" width="50"> 
                                                    <div class="text-center mg-text"> <span class="mg-text"><?php echo $review[$language]['13']?></span> 
                                                </div> </div> </div> <div class="col-md-2">
                                                     <div class="card-inner p-3 d-flex flex-column align-items-center"> 
                                                        <img src="https://i.imgur.com/YLsQrn3.png" width="50"> 
                                                        <div class="text-center mg-text"> <span class="mg-text"><?php echo $review[$language]['14']?></span>
         </div> 
        </div> 
      </div> 
     </div> 
    </div> 
   </div> 
  </div>
 </div>





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