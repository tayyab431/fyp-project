<?php

  $path = dirname(__FILE__);
  include($path.'/header.php');
 include($path.'/dbconfig/dbconn.php')
?>

<section class="vh-50 gradient-custom">
  <div class="container py-5">
    <div class="row d-flex justify-content-center align-items-center">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-3 p-md-5 text-center">

            <div class="mb-md-4 mt-md-3 pb-2">

              <h2 class="fw-bold mb-2 text-uppercase">ADMIN</h2>
              <p class="text-white-50 mb-5">Admin Management</p>
         <form action="" method="post">
              <div class="form-outline form-white mb-4">
                <input type="email" name ="email" id="typeEmailX" class="form-control form-control-lg" autofill="off" required="required" />
                <label class="form-label" for="typeEmailX">Email</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="password" name ="password"  id="typePasswordX" class="form-control form-control-lg" required="required" />
                <label class="form-label" for="typePasswordX">Password</label>
              </div>

              <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>

              <button class="btn btn-outline-light btn-lg px-5" name="submit" type="submit">Login</button>

</form>

            </div>


          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<?php include($path.'/script.php');?>
<?php
  include($path.'/footer.php');
?>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(isset($_POST['submit'])){
  $email = $_POST['email'];
  $user_password = $_POST['password'];

  // Select query
  $select_query = "SELECT * FROM admin WHERE email='$email'";
  $result = mysqli_query($con, $select_query);
  $rows_count = mysqli_num_rows($result);

  if($rows_count == 0){
    echo "<script>alert('Email is not valid')</script>";
    echo "<script>window.location.href = 'log.php';</script>";
  }
  else{
    $row = mysqli_fetch_assoc($result);
    $stored_password = $row['password'];

    if ($user_password == $stored_password){
      // Password is correct, so set session variables and redirect to dashboard page
      $_SESSION['email'] = $row['email'];
      echo "<script>alert('Login successful')</script>";
      echo "<script>window.location.href = 'index.php';</script>";
    } else {
      // Password is incorrect
      echo "<script>alert('Password is incorrect')</script>";
      echo "<script>window.location.href = 'log.php';</script>";
    }
  }
}
?>
