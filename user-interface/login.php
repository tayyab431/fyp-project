<?php
include('nav.php');
?>
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
<form id="login" action="..\form_sub.php" method="post" enctype="multipart/form-data" class="input-group">
    <input type="text" style="text-transform: none;" class="input-feild" placeholder="<?php echo $login_page[$language]['2']?>" required="required" name="user_name"/>
    <input type="password" class="input-feild" placeholder="<?php echo $login_page[$language]['3']?>" required="required" name="user_password"/>
    <input type="checkbox" class="checkbox"> <span class="span"><?php echo $login_page[$language]['4']?></span>
    <button type="submit" class="submit-btn" name="user_log" ><?php echo $login_page[$language]['0']?></button>
</form>
<form id="register" action="..\form_sub.php" method="post" class="input-group">
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
<?php
include('footer.php');
?>

