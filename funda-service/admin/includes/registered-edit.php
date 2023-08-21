<?php

  $path = dirname(__FILE__);
  include($path.'/dbconfig/dbconn.php');
  include($path.'/header.php');
  include($path.'/top-nav.php');
  include($path.'/sidebar.php');
 
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Users</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    
    

      <!-- /.card -->
      <div class="card">
              <div class="card-header">
                <h3 class="card-title"> Edit Registered users 
                    
                </h3>
                <a href="registered.php" class = "btn btn-danger btn-sm float-right" >Back</a>
              </div>
      <div class="card-body">
               <div class="row">
                <div class="col-md-6">
                <form action="" method= "post">
      <div class="modal-body">
                <?php 
if(isset($_GET['user_id'])){
  $user_id = $_GET['user_id'];
  $query = "SELECT * FROM panel_users WHERE id= '$user_id' LIMIT 1";
  $query_run = mysqli_query($con, $query);
  if(mysqli_num_rows($query_run) > 0){
    while($row = mysqli_fetch_assoc($query_run))
    {
?>
      <input type="hidden" name="user_id" value="<?php echo $row['id']; ?>">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name= "name" value = "<?php echo isset($row['name']) ? $row['name'] : '' ?>" class="form-control" >
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="text" name= "email" value = "<?php echo isset($row['email']) ? $row['email'] : '' ?>" class="form-control" >
      </div>
      <div class="form-group">
        <label for="phone-no">Phone number</label>
        <input type="text" name= "phone" value = "<?php echo isset($row['phone']) ? $row['phone'] : '' ?>" class="form-control" >
      </div>
      <div class="form-group">
        <label for="user-type">user_type</label>
        <input type="text" name= "user_type" value = "<?php echo isset($row['user_type']) ? $row['user_type'] : '' ?>" class="form-control" >
      </div>
      <div class="form-group">
        <label for="status">Password</label>
        <input type="password" name= "password" value = "<?php echo isset($row['password']) ? $row['password'] : '' ?>" class="form-control">
      </div>
<?php
    }
  }
  else{
    echo "<h4>No record found for user ID " . $user_id . "</h4>";
  }
}
else {
  echo "<h4>User ID parameter is missing</h4>";
}
?>
  </div>
       <div class="modal-footer">
             <button type="submit" name= "updateuser"  class="btn btn-primary">Update </button>
           </div>
        </form>
      </div>
    </div>
   </div>
</div>
<!-- /.content -->
</div>
</div>


<?php
  include($path.'/footer.php');
?>
<?php
  include($path.'/script.php');
?>

<?php 
if (isset($_POST['updateuser'])) {
  $user_id = $_POST['user_id'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $user_type = $_POST['user_type'];
  $password = $_POST['password'];

  // Determine which fields are provided and construct the query accordingly
  $update_fields = array();
  if (!empty($name)) {
      $update_fields[] = "name='$name'";
  }
  if (!empty($email)) {
      $update_fields[] = "email='$email'";
  }
  if (!empty($phone)) {
      $update_fields[] = "phone='$phone'";
  }
  if (!empty($user_type)) {
      $update_fields[] = "user_type='$user_type'";
  }
  if (!empty($password)) {
      $update_fields[] = "password='$password'";
  }

  // Validate required fields
  if (empty($update_fields)) {
      echo "<script>alert('No fields were provided for update.');</script>";
      exit();
  }

  $update_fields_string = implode(', ', $update_fields);

  $query = "UPDATE panel_users SET $update_fields_string WHERE id='$user_id'";
  $query_run = mysqli_query($con, $query);

  if ($query_run) {
      echo "<script>alert('User updated successfully.');</script>";
      // Redirect or display success message as needed
  } else {
      echo "<script>alert('Update failed.');</script>";
  }
}

?>
