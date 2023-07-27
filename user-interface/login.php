<?php
include('nav.php');
?>
 <style>
      .password-wrapper {
  position: relative;
}

.password-wrapper .input-feild {
  padding-right: 40px; /* Add some space for the eye icon */
}

.eye-icon {
  position: absolute;
  top: 50%;
  right: 5px;
  transform: translateY(-50%);
  cursor: pointer;
}

     </style>
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

   <!-- Login Form -->
   <form id="login" action="web-form.php" method="post" enctype="multipart/form-data" class="input-group">
      <input type="text" style="text-transform: none;" class="input-feild" autocomplete="off" placeholder="<?php echo $login_page[$language]['2']?>" required="required" name="user_name"/>
      <div class="password-wrapper">
        <input type="password" class="input-feild" placeholder="<?php echo $login_page[$language]['3']?>" required="required" name="user_password" id="password"/>
        <span class="eye-icon" id="eye-icon" onmousedown="togglePassword('password')"><i class="far fa-eye"></i></span>
      </div>
      <input type="checkbox" class="checkbox"> <span class="span"><?php echo $login_page[$language]['4']?></span>
      <button type="submit" class="submit-btn" name="user_log" ><?php echo $login_page[$language]['0']?></button>
    </form>

   <!-- Registration Form -->
<form id="register" action="web-form.php" method="post" class="input-group">
  <input type="text" style="text-transform: none;" class="input-feild" placeholder=" <?php echo $login_page[$language]['2']?>" required="required" name="user_name">
   <input type="email" style="text-transform: none;" class="input-feild" placeholder="<?php echo $login_page[$language]['5']?>" required="required" pattern="[a-zA-Z0-9]+@[a-zA-Z0-9.-]+\.[a-z]{2,}$" name="user_email" />
    <div class="password-wrapper">
    <input type="password" class="input-feild" placeholder="<?php echo $login_page[$language]['3']?>" autocomplete="off" required="required" name="user_password" id="password-register"/>
    <span class="eye-icon" id="eye-icon-register" onmousedown="togglePassword('password-register')"><i class="far fa-eye"></i></span>
  </div>
  <div class="password-wrapper">
    <input type="password" class="input-feild" placeholder="<?php echo $login_page[$language]['6']?>" autocomplete="off" required="required" name="confirm_password" id="confirm-password"/>
    <span class="eye-icon" id="eye-icon-confirm" onmousedown="togglePassword('confirm-password')"><i class="far fa-eye"></i></span>
  </div>
  <input type="checkbox" class="checkbox" required="required" name="checkbox"/> <span class="span"><?php echo $login_page[$language]['7']?></span>
  <button type="submit"  class="submit-btn" name="user_register"><?php echo $login_page[$language]['1']?></button>
</form>

  </div>
</div>
<script>
  var x = document.getElementById("login");
  var y = document.getElementById("register");
  var z = document.getElementById("btn");

  function register() {
    x.style.left = "-400px";
    y.style.left = "50px";
    z.style.left = "110px";
  }

  function login() {
    x.style.left = "50px";
    y.style.left = "-400px";
    z.style.left = "0px";
  }

 
</script>
<script>
    function togglePassword(inputId) {
  var passwordInput = document.getElementById(inputId);
  var eyeIcon = document.getElementById('eye-icon-' + inputId);

  if (passwordInput.type === 'password') {
    passwordInput.type = 'text';
    eyeIcon.querySelector('i').classList.remove('far', 'fa-eye');
    eyeIcon.querySelector('i').classList.add('fas', 'fa-eye-slash');
  } else {
    passwordInput.type = 'password';
    eyeIcon.querySelector('i').classList.remove('fas', 'fa-eye-slash');
    eyeIcon.querySelector('i').classList.add('far', 'fa-eye');
  }
}

// Reset the password input type to password after mouseup event
document.getElementById('eye-icon-email').addEventListener('mouseup', function() {
  document.getElementById('email').type = 'email';
});
document.getElementById('eye-icon-register').addEventListener('mouseup', function() {
  document.getElementById('password-register').type = 'password';
});
document.getElementById('eye-icon-confirm').addEventListener('mouseup', function() {
  document.getElementById('confirm-password').type = 'password';
});

  </script>
<?php
include('footer.php');
?>

