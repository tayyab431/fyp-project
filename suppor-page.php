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
    <li><a href="accessories.php">Products</a></li>
    <li><a href="index.php"><?php echo $top_nav[$language]['3']?></a></li>
    <li><a href="#!"><?php echo $top_nav[$language]['4']?></a></li>
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
 <!-- main content -->
<div class="container mt-4">
  <div class="row d-flex justify-content-center">
    <div class="col-md-9">
      <div class="card-a p-4 mt-3">
        <h3 class="heading mt-5 text-center"><?php echo $review[$language]['7']?></h3>
        <div class="d-flex justify-content-center px-5">
          <div class="search">
            <input type="text" id="searchInput" class="search-input" placeholder="<?php echo $review[$language]['8']?>" name="">
            <a href="#" class="search-icon">
              <i class="fa fa-search"></i>
            </a>
          </div>
        </div>
        <div class="row mt-4 g-1 px-4 mb-5" id="supportOptions"> <!-- Removed duplicate ID -->
          <div class="col-md-2">
            <div class="card-inner p-3 d-flex flex-column align-items-center">
            <img src="sup-icon/icons8-account-60.png" width="50">
              <div class="text-center mg-text">
                <span class="mg-text"><?php echo $review[$language]['9']?></span>
              </div>
            </div>
          </div>
          <div class="col-md-2">
            <div class="card-inner p-3 d-flex flex-column align-items-center">
            <img src="sup-icon/icons8-payment-60.png" width="50">
              <div class="text-center mg-text">
                <span class="mg-text"><?php echo $review[$language]['10']?></span>
              </div>
            </div>
          </div>
          <div class="col-md-2">
            <div class="card-inner p-3 d-flex flex-column align-items-center">
            <img src="sup-icon/icons8-vehicle-60.png" width="50">
              <div class="text-center mg-text">
                <span class="mg-text"><?php echo $review[$language]['11']?></span>
              </div>
            </div>
          </div>
          <div class="col-md-2">
            <div class="card-inner p-3 d-flex flex-column align-items-center">
            <img src="sup-icon/icons8-product-64.png" width="50">
              <div class="text-center mg-text">
                <span class="mg-text"><?php echo $review[$language]['12']?></span>
              </div>
            </div>
          </div>
          <div class="col-md-2">
            <div class="card-inner p-3 d-flex flex-column align-items-center">
            <img src="sup-icon/icons8-clock-60.png" width="50">
              <div class="text-center mg-text">
                <span class="mg-text"><?php echo $review[$language]['13']?></span>
              </div>
            </div>
          </div>
          <a href="contact-page/con.html">
            <div class="col-md-2">
              <div class="card-inner p-3 d-flex flex-column align-items-center">
              <img src="sup-icon/icons8-clipboard-60.png" width="50">
                <div class="text-center mg-text">
                  <span class="mg-text"><?php echo $review[$language]['14']; ?></span>
                </div>
              </div>
            </div>
          </a>
          <!-- Add more support divs as needed... -->
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div id="myModal" class="modal">
  <div class="modal-content">
    <span id="closeButton" class="close" onclick="closeModal()">&times;</span>
    <div class="container">
      <p id="modalContent"></p>
    </div>
  </div>
</div>

<!-- Include necessary CSS styles -->
<style>
  #supportOptions > div {
    display: block;
    margin: 5px 0;
    cursor: pointer;
  }

  .modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.6);
  }

  .modal-content {
    background-color: #fefefe;
    margin: 15% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
    max-width: 630px;
  }
  p#modalContent {
    font-size: 20px;
    font-weight: 600;
    font-family: monospace;
    line-height: 22px;
}

  .close {
    color: red;
    margin: -10px;
    float: right;
    font-size: 37px;
    font-weight: bold;
    cursor: pointer;
  }
</style>





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
  
    <!-- Include this script tag after the HTML -->
<script>
   document.addEventListener("DOMContentLoaded", function () {
  const searchInput = document.getElementById("searchInput");
  const supportOptions = document.getElementById("supportOptions").children;
  const modal = document.getElementById("myModal");

  searchInput.addEventListener("input", function () {
    const query = searchInput.value.trim().toLowerCase();

    // Loop through each support option and show/hide based on the search query
    for (const option of supportOptions) {
      const optionText = option.textContent.toLowerCase();
      if (optionText.includes(query)) {
        option.style.display = "block";
      } else {
        option.style.display = "none";
      }
    }
  });

  // Function to open the modal
  function openModal(content) {
    const modalContent = document.getElementById("modalContent");
    modalContent.textContent = content;
    modal.style.display = "block";

      // Add event listener to close button
  const closeButton = document.getElementById("closeButton");
  
  closeButton.addEventListener("click", closeModal);
    // Add event listener to close modal on outside click
    window.addEventListener("click", outsideClickHandler);

    // Add event listener to close modal on Esc key press
    window.addEventListener("keydown", escapeKeyHandler);
  }

 // Function to close the modal
function closeModal() {
  modal.style.display = "none";
  const closeButton = document.getElementById("closeButton");
  closeButton.removeEventListener("click", closeModal);
  window.removeEventListener("click", outsideClickHandler);
  window.removeEventListener("keydown", escapeKeyHandler);
}

  // Function to handle outside click
  function outsideClickHandler(event) {
    if (event.target === modal) {
      closeModal();
    }
  }

  // Function to handle Esc key press
  function escapeKeyHandler(event) {
    if (event.key === "Escape") {
      closeModal();
    }
  }

  // Add click event listeners to the support divs
  const accountDiv = document.querySelector(".col-md-2:nth-child(1)");
  const paymentDiv = document.querySelector(".col-md-2:nth-child(2)");
  const deliveryDiv = document.querySelector(".col-md-2:nth-child(3)");
  const productDiv = document.querySelector(".col-md-2:nth-child(4)");
  const returnDiv = document.querySelector(".col-md-2:nth-child(5)");

  accountDiv.addEventListener("click", function () {
    openModal("Please login to report any account related issue.");
  });

  paymentDiv.addEventListener("click", function () {
    openModal("Please login to report payment issue.");
  });

  deliveryDiv.addEventListener("click", function () {
    openModal("Please login to track your order.");
  });

  productDiv.addEventListener("click", function () {
    openModal("Please login to register product related issue");
  });

  returnDiv.addEventListener("click", function () {
    openModal("Please login to return your order");
  });
});

</script>
    
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