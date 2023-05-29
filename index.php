<?php
$path = dirname(__FILE__);
include($path . '/language/lang.php');
include($path . '/language/language-code.php');

?>

<!DOCTYPE html>
<html lang="en">
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
     <li> <select onchange="set_language()" name="lang" id="language">
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
 <section id="profile"> 
  
       <div class="suplliers">  
        <div class="card">
           <div class="card-header">
               <div class="card-cover"></div>
                   <img src="images/11.jpg">
                   <h1>Wahaj Ali</h1>        
           </div>
           <div class="card-main">
               <div class="card-section active " id="Description">
                   <div class="card-content">
                       <h4 class="card-title">Description</h4>
                  <p class="card-desc">Hi! I'm Wahaj Ali,T-Shirts Manufecturer
                     I have a experience on
                    print on demande in etsy ,if you have a questions about anything please to contact me.</p>
                   </div>
                   <div class="social-links">
                       <a href="#"><i class="fab fa-facebook-f"></i></a>
                       <a href="#"><i class="fab fa-twitter"></i></a>
                       <a href="#"><i class="fab fa-instagram"></i></a>
                       <a href="#"><i class="fab fa-linkedin-in"></i></a>  
                   </div>
               </div>
               <div class="card-section" id="About">
                   <div class="card-content">
                       <h4 class="card-title">About</h4>
                   <div class="card-work">
                       <div class="card-item">
                       <div class="card-item-title">
                           Supply:
                       </div>
                       <div class="card-item-desc">T-Shirts</div>
                   </div>
                   <div class="card-item">
                       <div class="card-item-title">
                           From:
                       </div>
                       <div class="card-item-desc">Pakistan</div>
                   </div>
                   <div class="card-item">
                       <div class="card-item-title">
                           Language:
                       </div>
                       <div class="card-item-desc">English, Urdu</div>
                   </div>
                   <div class="card-item">
                       <div class="card-item-title">
                           Member Since:
                       </div>
                       <div class="card-item-desc">April 2022</div>
                   </div>
               </div>
                   </div>
               </div>
               <div class="card-section" id="Contact">
                   <div class="card-content">
                       <h4 class="card-title">Contact</h4>
                   </div>
                   <div class="card-contact-wrapper">
                       <div class="card-contact">
                           <i class="fas fa-map-marker-alt"></i>
                           Askari VIII Askari 8 (Army Housing Scheme Defence), Lahore, Punjab
                           </div>
                           <div class="card-contact">
                           <i class="fas fa-comment"></i>
                           Inbox me on website
                           </div>
                           <div class="card-contact">
                           <i class="fas fa-envelope"></i>
                           WahajAli23@gmail.com
                       </div>
                        <a href="msj.html"><button class="contact-me">Contact Me</button></a>
                       </div>
                   </div>
                 </div> 
               <div class="card-buttons">
                     <button data-section="Description" class="active">Description</button>
                   <button data-section="About">About</button>
                   <button data-section="Contact">Contact</button>
               </div>
           </div> 
       </div>  
    
       <div class="suplliers">  
        <div class="card">
           <div class="card-header">
               <div class="card-cover"></div>
                   <img src="images/11.jpg">
                   <h1>Wahaj Ali</h1>        
           </div>
           <div class="card-main">
               <div class="card-section active " id="Description">
                   <div class="card-content">
                       <h4 class="card-title">Description</h4>
                  <p class="card-desc">Hi! I'm Wahaj Ali,T-Shirts Manufecturer
                     I have a experience on
                    print on demande in etsy ,if you have a questions about anything please to contact me.</p>
                   </div>
                   <div class="social-links">
                       <a href="#"><i class="fab fa-facebook-f"></i></a>
                       <a href="#"><i class="fab fa-twitter"></i></a>
                       <a href="#"><i class="fab fa-instagram"></i></a>
                       <a href="#"><i class="fab fa-linkedin-in"></i></a>  
                   </div>
               </div>
               <div class="card-section" id="About">
                   <div class="card-content">
                       <h4 class="card-title">About</h4>
                   <div class="card-work">
                       <div class="card-item">
                       <div class="card-item-title">
                           Supply:
                       </div>
                       <div class="card-item-desc">T-Shirts</div>
                   </div>
                   <div class="card-item">
                       <div class="card-item-title">
                           From:
                       </div>
                       <div class="card-item-desc">Pakistan</div>
                   </div>
                   <div class="card-item">
                       <div class="card-item-title">
                           Language:
                       </div>
                       <div class="card-item-desc">English, Urdu</div>
                   </div>
                   <div class="card-item">
                       <div class="card-item-title">
                           Member Since:
                       </div>
                       <div class="card-item-desc">April 2022</div>
                   </div>
               </div>
                   </div>
               </div>
               <div class="card-section" id="Contact">
                   <div class="card-content">
                       <h4 class="card-title">Contact</h4>
                   </div>
                   <div class="card-contact-wrapper">
                       <div class="card-contact">
                           <i class="fas fa-map-marker-alt"></i>
                           Askari VIII Askari 8 (Army Housing Scheme Defence), Lahore, Punjab
                           </div>
                           <div class="card-contact">
                           <i class="fas fa-comment"></i>
                           Inbox me on website
                           </div>
                           <div class="card-contact">
                           <i class="fas fa-envelope"></i>
                           WahajAli23@gmail.com
                       </div>
                        <button class="contact-me">Contact Me</button>
                       </div>
                   </div>
                 </div> 
               <div class="card-buttons">
                     <button data-section="Description" class="active">Description</button>
                   <button data-section="About">About</button>
                   <button data-section="Contact">Contact</button>
               </div>
           </div> 
       </div>  
       <div class="suplliers">  
        <div class="card">
           <div class="card-header">
               <div class="card-cover"></div>
                   <img src="images/11.jpg">
                   <h1>Muhammad Ali</h1>        
           </div>
           <div class="card-main">
               <div class="card-section active" id="Description">
                   <div class="card-content">
                       <h4 class="card-title">Description</h4>
                  <p class="card-desc">Hi! I'm Wahaj Ali,T-Shirts Manufecturer
                     I have a experience on
                    print on demande in etsy ,if you have a questions about anything please to contact me.</p>
                   </div>
                   <div class="social-links">
                       <a href="#"><i class="fab fa-facebook-f"></i></a>
                       <a href="#"><i class="fab fa-twitter"></i></a>
                       <a href="#"><i class="fab fa-instagram"></i></a>
                       <a href="#"><i class="fab fa-linkedin-in"></i></a>  
                   </div>
               </div>
               <div class="card-section" id="About">
                   <div class="card-content">
                       <h4 class="card-title">About</h4>
                   <div class="card-work">
                       <div class="card-item">
                       <div class="card-item-title">
                           Supply:
                       </div>
                       <div class="card-item-desc">T-Shirts</div>
                   </div>
                   <div class="card-item">
                       <div class="card-item-title">
                           From:
                       </div>
                       <div class="card-item-desc">Pakistan</div>
                   </div>
                   <div class="card-item">
                       <div class="card-item-title">
                           Language:
                       </div>
                       <div class="card-item-desc">English, Urdu</div>
                   </div>
                   <div class="card-item">
                       <div class="card-item-title">
                           Member Since:
                       </div>
                       <div class="card-item-desc">April 2022</div>
                   </div>
               </div>
                   </div>
               </div>
               <div class="card-section" id="Contact">
                   <div class="card-content">
                       <h4 class="card-title">Contact</h4>
                   </div>
                   <div class="card-contact-wrapper">
                       <div class="card-contact">
                           <i class="fas fa-map-marker-alt"></i>
                           Askari VIII Askari 8 (Army Housing Scheme Defence), Lahore, Punjab
                           </div>
                           <div class="card-contact">
                           <i class="fas fa-comment"></i>
                           Inbox me on website
                           </div>
                           <div class="card-contact">
                           <i class="fas fa-envelope"></i>
                           WahajAli23@gmail.com
                       </div>
                        <button class="contact-me">Contact Me</button>
                       </div>
                   </div>
                 </div> 
               <div class="card-buttons">
                     <button data-section="Description" class="active">Description</button>
                   <button data-section="About">About</button>
                   <button data-section="Contact">Contact</button>
               </div>
           </div> 
       </div>   
       <div class="suplliers">  
        <div class="card">
           <div class="card-header">
               <div class="card-cover"></div>
                   <img src="images/11.jpg">
                   <h1>Wahaj Ali</h1>        
           </div>
           <div class="card-main">
               <div class="card-section active " id="Description">
                   <div class="card-content">
                       <h4 class="card-title">Description</h4>
                  <p class="card-desc">Hi! I'm Wahaj Ali,T-Shirts Manufecturer
                     I have a experience on
                    print on demande in etsy ,if you have a questions about anything please to contact me.</p>
                   </div>
                   <div class="social-links">
                       <a href="#"><i class="fab fa-facebook-f"></i></a>
                       <a href="#"><i class="fab fa-twitter"></i></a>
                       <a href="#"><i class="fab fa-instagram"></i></a>
                       <a href="#"><i class="fab fa-linkedin-in"></i></a>  
                   </div>
               </div>
               <div class="card-section" id="About">
                   <div class="card-content">
                       <h4 class="card-title">About</h4>
                   <div class="card-work">
                       <div class="card-item">
                       <div class="card-item-title">
                           Supply:
                       </div>
                       <div class="card-item-desc">T-Shirts</div>
                   </div>
                   <div class="card-item">
                       <div class="card-item-title">
                           From:
                       </div>
                       <div class="card-item-desc">Pakistan</div>
                   </div>
                   <div class="card-item">
                       <div class="card-item-title">
                           Language:
                       </div>
                       <div class="card-item-desc">English, Urdu</div>
                   </div>
                   <div class="card-item">
                       <div class="card-item-title">
                           Member Since:
                       </div>
                       <div class="card-item-desc">April 2022</div>
                   </div>
               </div>
                   </div>
               </div>
               <div class="card-section" id="Contact">
                   <div class="card-content">
                       <h4 class="card-title">Contact</h4>
                   </div>
                   <div class="card-contact-wrapper">
                       <div class="card-contact">
                           <i class="fas fa-map-marker-alt"></i>
                           Askari VIII Askari 8 (Army Housing Scheme Defence), Lahore, Punjab
                           </div>
                           <div class="card-contact">
                           <i class="fas fa-comment"></i>
                           Inbox me on website
                           </div>
                           <div class="card-contact">
                           <i class="fas fa-envelope"></i>
                           WahajAli23@gmail.com
                       </div>
                        <button class="contact-me">Contact Me</button>
                       </div>
                   </div>
                 </div> 
               <div class="card-buttons">
                     <button data-section="Description" class="active">Description</button>
                   <button data-section="About">About</button>
                   <button data-section="Contact">Contact</button>
               </div>
           </div> 
       </div>  
       <div class="suplliers">  
        <div class="card">
           <div class="card-header">
               <div class="card-cover"></div>
                   <img src="images/11.jpg">
                   <h1>Muhammad Ali</h1>        
           </div>
           <div class="card-main">
               <div class="card-section active" id="Description">
                   <div class="card-content">
                       <h4 class="card-title">Description</h4>
                  <p class="card-desc">Hi! I'm Wahaj Ali,T-Shirts Manufecturer
                     I have a experience on
                    print on demande in etsy ,if you have a questions about anything please to contact me.</p>
                   </div>
                   <div class="social-links">
                       <a href="#"><i class="fab fa-facebook-f"></i></a>
                       <a href="#"><i class="fab fa-twitter"></i></a>
                       <a href="#"><i class="fab fa-instagram"></i></a>
                       <a href="#"><i class="fab fa-linkedin-in"></i></a>  
                   </div>
               </div>
               <div class="card-section" id="About">
                   <div class="card-content">
                       <h4 class="card-title">About</h4>
                   <div class="card-work">
                       <div class="card-item">
                       <div class="card-item-title">
                           Supply:
                       </div>
                       <div class="card-item-desc">T-Shirts</div>
                   </div>
                   <div class="card-item">
                       <div class="card-item-title">
                           From:
                       </div>
                       <div class="card-item-desc">Pakistan</div>
                   </div>
                   <div class="card-item">
                       <div class="card-item-title">
                           Language:
                       </div>
                       <div class="card-item-desc">English, Urdu</div>
                   </div>
                   <div class="card-item">
                       <div class="card-item-title">
                           Member Since:
                       </div>
                       <div class="card-item-desc">April 2022</div>
                   </div>
               </div>
                   </div>
               </div>
               <div class="card-section" id="Contact">
                   <div class="card-content">
                       <h4 class="card-title">Contact</h4>
                   </div>
                   <div class="card-contact-wrapper">
                       <div class="card-contact">
                           <i class="fas fa-map-marker-alt"></i>
                           Askari VIII Askari 8 (Army Housing Scheme Defence), Lahore, Punjab
                           </div>
                           <div class="card-contact">
                           <i class="fas fa-comment"></i>
                           Inbox me on website
                           </div>
                           <div class="card-contact">
                           <i class="fas fa-envelope"></i>
                           WahajAli23@gmail.com
                       </div>
                        <button class="contact-me">Contact Me</button>
                       </div>
                   </div>
                 </div> 
               <div class="card-buttons">
                     <button data-section="Description" class="active">Description</button>
                   <button data-section="About">About</button>
                   <button data-section="Contact">Contact</button>
               </div>
           </div> 
       </div>    
       <div class="suplliers">  
        <div class="card">
           <div class="card-header">
               <div class="card-cover"></div>
                   <img src="images/11.jpg">
                   <h1>Wahaj Ali</h1>        
           </div>
           <div class="card-main">
               <div class="card-section active " id="Description">
                   <div class="card-content">
                       <h4 class="card-title">Description</h4>
                  <p class="card-desc">Hi! I'm Wahaj Ali,T-Shirts Manufecturer
                     I have a experience on
                    print on demande in etsy ,if you have a questions about anything please to contact me.</p>
                   </div>
                   <div class="social-links">
                       <a href="#"><i class="fab fa-facebook-f"></i></a>
                       <a href="#"><i class="fab fa-twitter"></i></a>
                       <a href="#"><i class="fab fa-instagram"></i></a>
                       <a href="#"><i class="fab fa-linkedin-in"></i></a>  
                   </div>
               </div>
               <div class="card-section" id="About">
                   <div class="card-content">
                       <h4 class="card-title">About</h4>
                   <div class="card-work">
                       <div class="card-item">
                       <div class="card-item-title">
                           Supply:
                       </div>
                       <div class="card-item-desc">T-Shirts</div>
                   </div>
                   <div class="card-item">
                       <div class="card-item-title">
                           From:
                       </div>
                       <div class="card-item-desc">Pakistan</div>
                   </div>
                   <div class="card-item">
                       <div class="card-item-title">
                           Language:
                       </div>
                       <div class="card-item-desc">English, Urdu</div>
                   </div>
                   <div class="card-item">
                       <div class="card-item-title">
                           Member Since:
                       </div>
                       <div class="card-item-desc">April 2022</div>
                   </div>
               </div>
                   </div>
               </div>
               <div class="card-section" id="Contact">
                   <div class="card-content">
                       <h4 class="card-title">Contact</h4>
                   </div>
                   <div class="card-contact-wrapper">
                       <div class="card-contact">
                           <i class="fas fa-map-marker-alt"></i>
                           Askari VIII Askari 8 (Army Housing Scheme Defence), Lahore, Punjab
                           </div>
                           <div class="card-contact">
                           <i class="fas fa-comment"></i>
                           Inbox me on website
                           </div>
                           <div class="card-contact">
                           <i class="fas fa-envelope"></i>
                           WahajAli23@gmail.com
                       </div>
                        <button class="contact-me">Contact Me</button>
                       </div>
                   </div>
                 </div> 
               <div class="card-buttons">
                     <button data-section="Description" class="active">Description</button>
                   <button data-section="About">About</button>
                   <button data-section="Contact">Contact</button>
               </div>
           </div> 
       </div>  
       <div class="suplliers">  
        <div class="card">
           <div class="card-header">
               <div class="card-cover"></div>
                   <img src="images/11.jpg">
                   <h1>Muhammad Ali</h1>        
           </div>
           <div class="card-main">
               <div class="card-section active" id="Description">
                   <div class="card-content">
                       <h4 class="card-title">Description</h4>
                  <p class="card-desc">Hi! I'm Wahaj Ali,T-Shirts Manufecturer
                     I have a experience on
                    print on demande in etsy ,if you have a questions about anything please to contact me.</p>
                   </div>
                   <div class="social-links">
                       <a href="#"><i class="fab fa-facebook-f"></i></a>
                       <a href="#"><i class="fab fa-twitter"></i></a>
                       <a href="#"><i class="fab fa-instagram"></i></a>
                       <a href="#"><i class="fab fa-linkedin-in"></i></a>  
                   </div>
               </div>
               <div class="card-section" id="About">
                   <div class="card-content">
                       <h4 class="card-title">About</h4>
                   <div class="card-work">
                       <div class="card-item">
                       <div class="card-item-title">
                           Supply:
                       </div>
                       <div class="card-item-desc">T-Shirts</div>
                   </div>
                   <div class="card-item">
                       <div class="card-item-title">
                           From:
                       </div>
                       <div class="card-item-desc">Pakistan</div>
                   </div>
                   <div class="card-item">
                       <div class="card-item-title">
                           Language:
                       </div>
                       <div class="card-item-desc">English, Urdu</div>
                   </div>
                   <div class="card-item">
                       <div class="card-item-title">
                           Member Since:
                       </div>
                       <div class="card-item-desc">April 2022</div>
                   </div>
               </div>
                   </div>
               </div>
               <div class="card-section" id="Contact">
                   <div class="card-content">
                       <h4 class="card-title">Contact</h4>
                   </div>
                   <div class="card-contact-wrapper">
                       <div class="card-contact">
                           <i class="fas fa-map-marker-alt"></i>
                           Askari VIII Askari 8 (Army Housing Scheme Defence), Lahore, Punjab
                           </div>
                           <div class="card-contact">
                           <i class="fas fa-comment"></i>
                           Inbox me on website
                           </div>
                           <div class="card-contact">
                           <i class="fas fa-envelope"></i>
                           WahajAli23@gmail.com
                       </div>
                        <button class="contact-me">Contact Me</button>
                       </div>
                   </div>
                 </div> 
               <div class="card-buttons">
                     <button data-section="Description" class="active">Description</button>
                   <button data-section="About">About</button>
                   <button data-section="Contact">Contact</button>
               </div>
           </div> 
       </div>  
       <div class="suplliers">  
        <div class="card">
           <div class="card-header">
               <div class="card-cover"></div>
                   <img src="images/11.jpg">
                   <h1>Wahaj Ali</h1>        
           </div>
           <div class="card-main">
               <div class="card-section active " id="Description">
                   <div class="card-content">
                       <h4 class="card-title">Description</h4>
                  <p class="card-desc">Hi! I'm Wahaj Ali,T-Shirts Manufecturer
                     I have a experience on
                    print on demande in etsy ,if you have a questions about anything please to contact me.</p>
                   </div>
                   <div class="social-links">
                       <a href="#"><i class="fab fa-facebook-f"></i></a>
                       <a href="#"><i class="fab fa-twitter"></i></a>
                       <a href="#"><i class="fab fa-instagram"></i></a>
                       <a href="#"><i class="fab fa-linkedin-in"></i></a>  
                   </div>
               </div>
               <div class="card-section" id="About">
                   <div class="card-content">
                       <h4 class="card-title">About</h4>
                   <div class="card-work">
                       <div class="card-item">
                       <div class="card-item-title">
                           Supply:
                       </div>
                       <div class="card-item-desc">T-Shirts</div>
                   </div>
                   <div class="card-item">
                       <div class="card-item-title">
                           From:
                       </div>
                       <div class="card-item-desc">Pakistan</div>
                   </div>
                   <div class="card-item">
                       <div class="card-item-title">
                           Language:
                       </div>
                       <div class="card-item-desc">English, Urdu</div>
                   </div>
                   <div class="card-item">
                       <div class="card-item-title">
                           Member Since:
                       </div>
                       <div class="card-item-desc">April 2022</div>
                   </div>
               </div>
                   </div>
               </div>
               <div class="card-section" id="Contact">
                   <div class="card-content">
                       <h4 class="card-title">Contact</h4>
                   </div>
                   <div class="card-contact-wrapper">
                       <div class="card-contact">
                           <i class="fas fa-map-marker-alt"></i>
                           Askari VIII Askari 8 (Army Housing Scheme Defence), Lahore, Punjab
                           </div>
                           <div class="card-contact">
                           <i class="fas fa-comment"></i>
                           Inbox me on website
                           </div>
                           <div class="card-contact">
                           <i class="fas fa-envelope"></i>
                           WahajAli23@gmail.com
                       </div>
                        <button class="contact-me">Contact Me</button>
                       </div>
                   </div>
                 </div> 
               <div class="card-buttons">
                     <button data-section="Description" class="active">Description</button>
                   <button data-section="About">About</button>
                   <button data-section="Contact">Contact</button>
               </div>
           </div> 
       </div>  
       <div class="suplliers">  
        <div class="card">
           <div class="card-header">
               <div class="card-cover"></div>
                   <img src="images/11.jpg">
                   <h1>Muhammad Ali</h1>        
           </div>
           <div class="card-main">
               <div class="card-section active" id="Description">
                   <div class="card-content">
                       <h4 class="card-title">Description</h4>
                  <p class="card-desc">Hi! I'm Wahaj Ali,T-Shirts Manufecturer
                     I have a experience on
                    print on demande in etsy ,if you have a questions about anything please to contact me.</p>
                   </div>
                   <div class="social-links">
                       <a href="#"><i class="fab fa-facebook-f"></i></a>
                       <a href="#"><i class="fab fa-twitter"></i></a>
                       <a href="#"><i class="fab fa-instagram"></i></a>
                       <a href="#"><i class="fab fa-linkedin-in"></i></a>  
                   </div>
               </div>
               <div class="card-section" id="About">
                   <div class="card-content">
                       <h4 class="card-title">About</h4>
                   <div class="card-work">
                       <div class="card-item">
                       <div class="card-item-title">
                           Supply:
                       </div>
                       <div class="card-item-desc">T-Shirts</div>
                   </div>
                   <div class="card-item">
                       <div class="card-item-title">
                           From:
                       </div>
                       <div class="card-item-desc">Pakistan</div>
                   </div>
                   <div class="card-item">
                       <div class="card-item-title">
                           Language:
                       </div>
                       <div class="card-item-desc">English, Urdu</div>
                   </div>
                   <div class="card-item">
                       <div class="card-item-title">
                           Member Since:
                       </div>
                       <div class="card-item-desc">April 2022</div>
                   </div>
               </div>
                   </div>
               </div>
               <div class="card-section" id="Contact">
                   <div class="card-content">
                       <h4 class="card-title">Contact</h4>
                   </div>
                   <div class="card-contact-wrapper">
                       <div class="card-contact">
                           <i class="fas fa-map-marker-alt"></i>
                           Askari VIII Askari 8 (Army Housing Scheme Defence), Lahore, Punjab
                           </div>
                           <div class="card-contact">
                           <i class="fas fa-comment"></i>
                           Inbox me on website
                           </div>
                           <div class="card-contact">
                           <i class="fas fa-envelope"></i>
                           WahajAli23@gmail.com
                       </div>
                        <button class="contact-me">Contact Me</button>
                       </div>
                   </div>
                 </div> 
               <div class="card-buttons">
                     <button data-section="Description" class="active">Description</button>
                   <button data-section="About">About</button>
                   <button data-section="Contact">Contact</button>
               </div>
           </div> 
       </div>     
       <div class="suplliers">  
        <div class="card">
           <div class="card-header">
               <div class="card-cover"></div>
                   <img src="images/11.jpg">
                   <h1>Wahaj Ali</h1>        
           </div>
           <div class="card-main">
               <div class="card-section active " id="Description">
                   <div class="card-content">
                       <h4 class="card-title">Description</h4>
                  <p class="card-desc">Hi! I'm Wahaj Ali,T-Shirts Manufecturer
                     I have a experience on
                    print on demande in etsy ,if you have a questions about anything please to contact me.</p>
                   </div>
                   <div class="social-links">
                       <a href="#"><i class="fab fa-facebook-f"></i></a>
                       <a href="#"><i class="fab fa-twitter"></i></a>
                       <a href="#"><i class="fab fa-instagram"></i></a>
                       <a href="#"><i class="fab fa-linkedin-in"></i></a>  
                   </div>
               </div>
               <div class="card-section" id="About">
                   <div class="card-content">
                       <h4 class="card-title">About</h4>
                   <div class="card-work">
                       <div class="card-item">
                       <div class="card-item-title">
                           Supply:
                       </div>
                       <div class="card-item-desc">T-Shirts</div>
                   </div>
                   <div class="card-item">
                       <div class="card-item-title">
                           From:
                       </div>
                       <div class="card-item-desc">Pakistan</div>
                   </div>
                   <div class="card-item">
                       <div class="card-item-title">
                           Language:
                       </div>
                       <div class="card-item-desc">English, Urdu</div>
                   </div>
                   <div class="card-item">
                       <div class="card-item-title">
                           Member Since:
                       </div>
                       <div class="card-item-desc">April 2022</div>
                   </div>
               </div>
                   </div>
               </div>
               <div class="card-section" id="Contact">
                   <div class="card-content">
                       <h4 class="card-title">Contact</h4>
                   </div>
                   <div class="card-contact-wrapper">
                       <div class="card-contact">
                           <i class="fas fa-map-marker-alt"></i>
                           Askari VIII Askari 8 (Army Housing Scheme Defence), Lahore, Punjab
                           </div>
                           <div class="card-contact">
                           <i class="fas fa-comment"></i>
                           Inbox me on website
                           </div>
                           <div class="card-contact">
                           <i class="fas fa-envelope"></i>
                           WahajAli23@gmail.com
                       </div>
                        <button class="contact-me">Contact Me</button>
                       </div>
                   </div>
                 </div> 
               <div class="card-buttons">
                     <button data-section="Description" class="active">Description</button>
                   <button data-section="About">About</button>
                   <button data-section="Contact">Contact</button>
               </div>
           </div> 
       </div>  
       <div class="suplliers">  
        <div class="card">
           <div class="card-header">
               <div class="card-cover"></div>
                   <img src="images/11.jpg">
                   <h1>Muhammad Ali</h1>        
           </div>
           <div class="card-main">
               <div class="card-section active" id="Description">
                   <div class="card-content">
                       <h4 class="card-title">Description</h4>
                  <p class="card-desc">Hi! I'm Wahaj Ali,T-Shirts Manufecturer
                     I have a experience on
                    print on demande in etsy ,if you have a questions about anything please to contact me.</p>
                   </div>
                   <div class="social-links">
                       <a href="#"><i class="fab fa-facebook-f"></i></a>
                       <a href="#"><i class="fab fa-twitter"></i></a>
                       <a href="#"><i class="fab fa-instagram"></i></a>
                       <a href="#"><i class="fab fa-linkedin-in"></i></a>  
                   </div>
               </div>
               <div class="card-section" id="About">
                   <div class="card-content">
                       <h4 class="card-title">About</h4>
                   <div class="card-work">
                       <div class="card-item">
                       <div class="card-item-title">
                           Supply:
                       </div>
                       <div class="card-item-desc">T-Shirts</div>
                   </div>
                   <div class="card-item">
                       <div class="card-item-title">
                           From:
                       </div>
                       <div class="card-item-desc">Pakistan</div>
                   </div>
                   <div class="card-item">
                       <div class="card-item-title">
                           Language:
                       </div>
                       <div class="card-item-desc">English, Urdu</div>
                   </div>
                   <div class="card-item">
                       <div class="card-item-title">
                           Member Since:
                       </div>
                       <div class="card-item-desc">April 2022</div>
                   </div>
               </div>
                   </div>
               </div>
               <div class="card-section" id="Contact">
                   <div class="card-content">
                       <h4 class="card-title">Contact</h4>
                   </div>
                   <div class="card-contact-wrapper">
                       <div class="card-contact">
                           <i class="fas fa-map-marker-alt"></i>
                           Askari VIII Askari 8 (Army Housing Scheme Defence), Lahore, Punjab
                           </div>
                           <div class="card-contact">
                           <i class="fas fa-comment"></i>
                           Inbox me on website
                           </div>
                           <div class="card-contact">
                           <i class="fas fa-envelope"></i>
                           WahajAli23@gmail.com
                       </div>
                        <button class="contact-me">Contact Me</button>
                       </div>
                   </div>
                 </div> 
               <div class="card-buttons">
                     <button data-section="Description" class="active">Description</button>
                   <button data-section="About">About</button>
                   <button data-section="Contact">Contact</button>
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
        <script src="CB.js"></script>
        <script src="manu.js"></script>
        <script src="language/lang.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
       
</script>
</body>
</html>
