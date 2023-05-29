<?php
include('include/connect.php');


?>
<?php
$path = dirname(__FILE__);
include($path . '/language/lang.php');
include($path . '/language/language-code.php');
include($path . '/session/session.php');

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
    
    <li>
        <select onchange="set_language()" name="lang" id="language">
      

       <option value="en" <?php echo $en_select ?>><?php echo $top_nav[$language]['7']?></option>
    <option value="urdu" <?php echo $urdu_select ?>><?php echo $top_nav[$language]['8']?></option></select></li>
   
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
<div class="hero">
<div class="form-box">
    <div class="button-box">
        <div id="btn"></div>
    <button type="button" class="toggle-btn" onclick="login()"><?php echo $login_page[$language]['0']?></button>
    <button type="button" class="toggle-btn" onclick="register()"><?php echo $login_page[$language]['1']?></button>
    </div>
    <div class="social-links" id="social">
      <a href="#"><i class="fab fa-facebook-f"></i></a>
      <a href="#"><i class="fab fa-twitter"></i></a>
      <a href="#"><i class="fab fa-instagram"></i></a>
      <a href="#"><i class="fab fa-linkedin-in"></i></a>
    </div>
  <h1 class="heading"></h1>
  <h1 class="heading"></h1>
<form id="login" action="" method="post" enctype="multipart/form-data" class="input-group">
    <input type="text" style="text-transform: none;" class="input-feild" placeholder="<?php echo $login_page[$language]['2']?>" required="required" name="user_name"/>
    <input type="password" class="input-feild" placeholder="<?php echo $login_page[$language]['3']?>" required="required" name="user_password"/>
    <input type="checkbox" class="checkbox"> <span class="span"><?php echo $login_page[$language]['4']?></span>
    <button type="submit" class="submit-btn" name="user_log" ><?php echo $login_page[$language]['0']?></button>
</form>
<form id="register" action="" method="post" class="input-group">
    <input type="text" style="text-transform: none;"
    class="input-feild" placeholder=" <?php echo $login_page[$language]['2']?>" required="required" name="user_name">
    <input type="email" style="text-transform: none;" class="input-feild" placeholder="<?php echo $login_page[$language]['5']?>" required="required" name="user_email"/>
    <input type="password" class="input-feild" placeholder="<?php echo $login_page[$language]['3']?>" autocomplete="off" required="required" name="user_password"/>
    <input type="password" class="input-feild" placeholder="<?php echo $login_page[$language]['6']?>" required="required" name="confirm_password"/>
    <input type="checkbox" class="checkbox" required="required" name="checkbox"/> <span class="span"><?php echo $login_page[$language]['7']?></span>
    <button type="submit"  class="submit-btn" name="user_register"><?php echo $login_page[$language]['1']?></button>
</form>
</div>
</div>
<script>
    var x= document.getElementById("login");
    var y= document.getElementById("register");
    var z= document.getElementById("btn");
    function register()
    {
        x.style.left = "-400px";
        y.style.left = "50px";
        z.style.left = "110px"
    }
    function login()
    {
        x.style.left = "50px";
        y.style.left = "-400px";
        z.style.left = "0px"
    }
</script>
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
</body>
</html>


<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if(isset($_POST['user_register'])){
  $user_username = $_POST['user_name'];
  $user_email = $_POST['user_email'];
  $user_password = $_POST['user_password'];
  $user_conf_password = $_POST['confirm_password'];
  //select query
  $select_query = "SELECT * FROM user_table WHERE username='$user_username' OR user_email ='$user_email'";
  $result = mysqli_query($con,$select_query);
  $rows_count = mysqli_num_rows($result);
  if($rows_count > 0){
    echo "<script>alert('username or email already exists')</script>";
    echo "<script>window.location.href = 'login.php';</script>";
  }
  else if ($user_password != $user_conf_password) {
    echo "<script>alert('passwords do not match')</script>";
    echo "<script>window.location.href = 'login.php';</script>";
  }
  else{
    $hashed_password = password_hash($user_password, PASSWORD_BCRYPT);
    $insert_query = "INSERT INTO user_table (username, user_email, hashed_password) 
                   VALUES ('$user_username', '$user_email', '$hashed_password')";
  
    $sql_execute = mysqli_query($con, $insert_query);

  
    if($sql_execute){
      echo "<script>alert('Data inserted successfully')</script>";
      echo "<script>window.location.href = 'login.php';</script>";
    } else {
      die(mysqli_error($con));
    }
  }
}
?>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if(isset($_POST['user_log'])){
  $user_username = $_POST['user_name'];
  $user_password = $_POST['user_password'];
  //select query
  $select_query = "SELECT * FROM user_table WHERE username='$user_username'";
  $result = mysqli_query($con,$select_query);
  $rows_count = mysqli_num_rows($result);
  if($rows_count == 0){
    echo "<script>alert('username not found')</script>";
    echo "<script>window.location.href = 'login.php';</script>";
  }
  else{
    $row = mysqli_fetch_assoc($result);
    $hashed_password = $row['hashed_password'];
    if (password_verify($user_password, $hashed_password)) {
      // password is correct, so set session variables and redirect to dashboard page
      $_SESSION['username'] = $user_username;
     // header('Location: C:\xampp\htdocs\project\project\Home-page.html'); // replace "index.php" with the URL of your home page
     // exit();
     echo "<script>alert('Logged in Successfully')</script>";
     echo "<script>window.location.href = 'Home-page.php';</script>";

      } else {
      // password is incorrect
      echo "<script>alert('password is incorrect')</script>";
      echo "<script>window.location.href = 'login.php';</script>";
    }
  }
}
?>


