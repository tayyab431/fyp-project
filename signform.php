<?php
include('connection/register.php');
?>
<?php
$path = dirname(__FILE__);
include($path . '/language/lang.php');
include($path . '/language/language-code.php');
include($path . '/session/session.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>clothing barters</title>
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
    <form action="" method ="post" class="form">
      <h1 class="text-center"><?php echo $join_form[$language]['0']?></h1>
      <!-- Progress bar -->
      <div class="progressbar">
        <div class="progress" id="progress"></div>
        
        <div
          class="progress-step progress-step-active"
          data-title="<?php echo $join_form[$language]['15']?>">
        </div>
        <div class="progress-step" data-title="<?php echo $join_form[$language]['16']?>"></div>
        <div class="progress-step" data-title="<?php echo $join_form[$language]['17']?>"></div>
        <div class="progress-step" data-title="<?php echo $join_form[$language]['13']?>"></div>
      </div>

      <!-- Steps -->
      <div class="form-step form-step-active">
        <div class="input-group">
          <label for="username"><?php echo $join_form[$language]['1']?></label>
          <input type="text" placeholder="<?php echo $join_form[$language]['1']?>" name="f-name" id="username" required="required" />
        </div>
        <div class="input-group">
          <label for="username"><?php echo $join_form[$language]['2']?></label>
          <input type="text" placeholder="<?php echo $join_form[$language]['2']?>" name="l-name" id="username" required="required" />
        </div>
        <div class="input-group">
          <label for="username"><?php echo $join_form[$language]['3']?></label>
          <input type="text" placeholder="<?php echo $join_form[$language]['3']?>" name="user_name" id="username" required="required" />
        </div>
        <div class="input-group">
          <label for="position"><?php echo $join_form[$language]['4']?></label>
          <input type="text" placeholder="<?php echo $join_form[$language]['4']?>" name="email" id="position" required="required" />
        </div>
        <div class="input-group">
          <label for="position"><?php echo $join_form[$language]['5']?></label>
          <input type="text"  data-inputmask="'mask': '99999-9999999-9'"  placeholder="XXXXX-XXXXXXX-X"  name="cnic" required="required" id="position" />
        </div>
        <div class="input-group">
          <label for="position"><?php echo $join_form[$language]['6']?></label>
          <input type="text"  placeholder="<?php echo $join_form[$language]['7']?>"  name="language" id="position" required="required" />
        </div>
        <div class="btns-group">
          <a href="sign2.php" class="btn"><?php echo $join_page[$language]['4']?></a>
          <a href="#" class="btn btn-next"><?php echo $join_page[$language]['3']?></a>
        </div>
      </div>
      <div class="form-step">
        <div class="input-group">
          <label for="phone"><?php echo $join_form[$language]['8']?></label>
          <input type="text" name="name"  placeholder="<?php echo $join_form[$language]['8']?>" id="phone" />
        </div>
        <div class="input-group">
          <label for="email"><?php echo $join_form[$language]['9']?></label>
          <input type="text" name="address"  placeholder="<?php echo $join_form[$language]['9']?>"  id="email" required="required" />
        </div>
        <div class="input-group">
          <label for="email"><?php echo $join_form[$language]['10']?></label>
          <input type="text" name="number" placeholder="<?php echo $join_form[$language]['10']?>"  id="email" required="required" />
        </div>
        <div class="btns-group">
          <a href="#" class="btn btn-prev"><?php echo $join_page[$language]['4']?></a>
          <a href="#" class="btn btn-next"><?php echo $join_page[$language]['3']?></a>
        </div>
      </div>
      <div class="form-step">
        <div class="input-group">
          <label for="dob"><?php echo $join_form[$language]['11']?> </label>
          <input type="id" name="ID" placeholder="<?php echo $join_form[$language]['12']?>" id="dob" required="required" />
        </div>
        <div class="input-group">
          <label for="ID"><?php echo $join_form[$language]['13']?></label>
          <input type="password" placeholder="<?php echo $join_form[$language]['13']?>" name="fb_password" id="ID" required="required" />
        </div>
        <div class="btns-group">
          <a href="#" class="btn btn-prev"><?php echo $join_page[$language]['4']?></a>
          <a href="#" class="btn btn-next"><?php echo $join_page[$language]['3']?></a>
        </div>
      </div>
      <div class="form-step">
        <div class="input-group">
          <label for="password"><?php echo $join_form[$language]['13']?></label>
          <input type="password" placeholder="<?php echo $join_form[$language]['13']?>" name="user_password" id="password" required="required" />
        </div>
        <div class="input-group">
          <label for="confirmPassword"><?php echo $join_form[$language]['14']?></label>
          <input   type="password" placeholder="<?php echo $join_form[$language]['14']?>" name="confirm-password" id="confirmPass" required="required" />
        </div>
        <div class="btns-group">
          <a href="#" class="btn btn-prev"><?php echo $join_page[$language]['4']?></a>
          <input type="submit" value="<?php echo $join_form[$language]['18']?>" name="submit" class="btn" />
        </div>
      </div>
    </form>
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
        <div class="social-links" id="social">
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
  <script src="sign.js"></script>
  </body>
</html>

<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

if (isset($_POST['submit'])) {

  // Escape user inputs to prevent SQL injection
  $first_name = mysqli_real_escape_string($con, $_POST['f-name']);
  $last_name = mysqli_real_escape_string($con, $_POST['l-name']);
  $username = mysqli_real_escape_string($con, $_POST['user_name']);
  $email_or_phone = mysqli_real_escape_string($con, $_POST['email']);
  $cnic = mysqli_real_escape_string($con, $_POST['cnic']);
  $languages = mysqli_real_escape_string($con, $_POST['language']);
  $unit_name = mysqli_real_escape_string($con, $_POST['name']);
  $unit_address = mysqli_real_escape_string($con, $_POST['address']);
  $registration_no = mysqli_real_escape_string($con, $_POST['number']);
  $link_account = mysqli_real_escape_string($con, $_POST['ID']);
  $acc_password = mysqli_real_escape_string($con, $_POST['fb_password']);
  $password = mysqli_real_escape_string($con, $_POST['user_password']);
  $confi_password = mysqli_real_escape_string($con, $_POST['confirm-password']);

  // Check if username already exists in database
  $username_query = "SELECT * FROM manufacturers WHERE username='$username'";
  $username_result = mysqli_query($con, $username_query);
  if (mysqli_num_rows($username_result) > 0) {
    // Username already exists
    echo  "<script>alert('Username already exists')</script>" ;
    echo "<script>window.location.href = 'signform.php';</script>";
    
    exit();
  }

  // Check if email or phone already exists in database
  $email_query = "SELECT * FROM manufacturers WHERE email_or_phone='$email_or_phone'";
  $email_result = mysqli_query($con, $email_query);
  if (mysqli_num_rows($email_result) > 0) {
    // Email or phone already exists
    echo  "<script>alert('Email or phone already registered')</script>";
    echo "<script>window.location.href = 'signform.php';</script>";
    exit();
  }

  // Check if CNIC is valid
  if (!preg_match('/^\d{5}-\d{7}-\d{1}$/', $cnic)) {
    echo "<script>alert('CNIC is not valid')</script>";
    echo "<script>window.location.href = 'signform.php';</script>";
    exit();
  }

  // Check if unit name, unit address, registration number or linked account already exists in database
  $check_query = "SELECT * FROM manufacturers WHERE unit_name='$unit_name' OR unit_address='$unit_address' OR registration_no='$registration_no' OR link_account='$link_account'";
  $check_result = mysqli_query($con, $check_query);
  if (mysqli_num_rows($check_result) > 0) {
    // Unit name, unit address, registration number or linked account already exists
    echo "<script>alert('unit name, address or registration already exist')</script>";
    echo "<script>window.location.href = 'signform.php';</script>";
    exit();
  }

  // Check if password and confirm password match
  if ($password !== $confi_password) {
    // Password and confirm password do not match
    echo "<script>alert('password does not match')</script>";
    echo "<script>window.location.href = 'signform.php';</script>";
    exit();
  }

  // Insert user inputs into database table
  $sql = "INSERT INTO manufacturers (first_name, last_name, username, email_or_phone, cnic, languages, unit_name, unit_address, registration_no, link_account, acc_password, password, conf_password) VALUES ('$first_name', '$last_name', '$username', '$email_or_phone', '$cnic', '$languages', '$unit_name', '$unit_address', '$registration_no', '$link_account', '$acc_password', '$password', '$confi_password')";

  //

  // Execute the query and check for errors
  $sql_execute = mysqli_query($con, $sql);
  if ($sql_execute) {
echo "<script>alert('Data inserted successfully')</script>";
echo "<script>window.location.href = 'signform.php';</script>";
  } else {
    die(mysqli_error($con));
  }
}
?>


