<?php

  $path = dirname(__FILE__);
  include($path.'/dbconfig/dbconn.php');
  include($path.'/header.php');
  include($path.'/top-nav.php');
  include($path.'/sidebar.php');
 
?>

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">

 <!-- Modal -->
<div class="modal fade" id="addusermodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method= "post">
      <div class="modal-body">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name= "name" class="form-control" required = "required">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name= "email" class="form-control" required = "required">
        </div>
        <div class="form-group">
            <label for="phone-no">Phone number</label>
            <input type="text" name= "phone" class="form-control" required = "required">
        </div>
        <div class="form-group">
            <label for="status">Password</label>
            <input type="password" name= "password" class="form-control" required = "required">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name= "adduser"  class="btn btn-primary">Save </button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- delete user -->
<div class="modal" id="deletmodel" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Delete User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method= "post">
      <div class="modal-body">
      <input type="hidden" name="delete_id" class="delete_user_id">
        <p>Are you sure ! you want to delete this User </p>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <button type="submit" name= "deletuserbtn"  class="btn btn-primary">Yes, Delete ! </button>
      </div>
      </form>
    </div>
  </div>
</div>

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
              <li class="breadcrumb-item active">Registered users</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    
    

      <!-- /.card -->

      <div class="card">
              <div class="card-header">
                <h3 class="card-title">Registered users Data
                    
                </h3>
                <a href="" data-toggle="modal" data-target="#addusermodel" class = "btn btn-primary btn-sm float-right" >Add User</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone number</th>
                    <th>user_type</th>
                    <th>Action </th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
    $query = "SELECT * FROM panel_users";
    $query_run = mysqli_query($con, $query);
    if(mysqli_num_rows($query_run) > 0){
        while($row = mysqli_fetch_assoc($query_run))
        {
?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?> </td>
                <td><?php echo $row['email'];?></td>
                <td> <?php echo $row['phone']; ?></td>
                <td> <?php echo $row['user_type']; ?></td>
                <td>
                    <a href="registered-edit.php?user_id=<?php echo $row['id']; ?>" class="btn btn-info btn-sm">Edit</a>
                    <button type="button" value="<?php echo $row['id']; ?>" class="btn btn-danger btn-sm deletebtn">Delete</button>

                </td>
            </tr>
<?php
        }
    }
    else{
?>
        <tr>
            <td>no record found</td>
        </tr>
<?php
    }
?> 

                 
</tbody>
</table>
</div>
</div>

<!-- /.content -->
</div>
<?php
  include($path.'/footer.php');
?>
<?php
  include($path.'/script.php');
?>
<script>
  $(function () {
    if (!$.fn.DataTable.isDataTable('#example1')) {
      $('#example1').DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    }
    if (!$.fn.DataTable.isDataTable('#example2')) {
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    }
  });
</script>


<script>
  $(document).ready(function () {
  $('.deletebtn').click(function (e) {
    e.preventDefault();

    var user_id = $(this).val();
    console.log(user_id);
    $('.delete_user_id').val(user_id);
    $('#deletmodel').modal('show');
  });
});

</script>


   


<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['adduser'])) {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Check if name already exists
        $name_query = "SELECT name FROM panel_users WHERE name='$name'";
        $name_query_run = mysqli_query($con, $name_query);
        if (mysqli_num_rows($name_query_run) > 0) {
            echo "<script>alert('Name already exists.');</script>";
             echo "<script>window.location.href = 'registered.php';</script>";
            exit();
        }

        // Check if email already exists
        $email_query = "SELECT email FROM panel_users WHERE email='$email'";
        $email_query_run = mysqli_query($con, $email_query);
        if (mysqli_num_rows($email_query_run) > 0) {
            echo "<script>alert('Email already exists.');</script>";
            echo "<script>window.location.href = 'registered.php';</script>";
            exit();
        }

        // Validate phone number
        if (!preg_match("/^[0-9]{11}$/", $phone)) {
            echo "<script>alert('Invalid phone number.');</script>";
            echo "<script>window.location.href = 'registered.php';</script>";
            exit();
        }

        $user_query = "INSERT into panel_users (name,phone,email,password) VALUES ('$name','$phone','$email','$password')";
        $user_query_run = mysqli_query($con, $user_query);
        if ($user_query_run) {
            // Redirect the user to the thank-you-page using a GET request
            echo "<script>alert('data inserted succesfully.');</script>";
            echo "<script>window.location.href = 'registered.php';</script>";
            exit();
        } else {
            echo "<script>alert('Registration Failed: " . mysqli_error($con) . "');</script>";
            exit();
        }
    }
}

if(isset($_POST['updateuser'])){
  $user_id = mysqli_real_escape_string($con, $_POST['user_id']);
  $name = mysqli_real_escape_string($con, $_POST['name']);
  $phone = mysqli_real_escape_string($con, $_POST['phone']);
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $password = mysqli_real_escape_string($con, $_POST['password']);

  $query = "UPDATE panel_users SET name='$name', phone='$phone', email='$email', password='$password' WHERE user_id='$user_id'";
  $query_run=mysqli_query($con,$query);
  if ($query_run) {
    // Redirect the user to the thank-you-page using a GET request
    echo "<script>alert('User updated successfully.');</script>";
    echo "<script>window.location.href = 'registered.php';</script>";
    exit();
  } else {
    echo "<script>alert('Failed to update user: " . mysqli_error($con) . "');</script>";
    echo "<script>window.location.href = 'registered.php';</script>";
    exit();
  }
}

?>

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if(isset($_POST['deletuserbtn'])){
  $user_id = $_POST['delete_id'];
  // Check if the user exists
$check_query = "SELECT id FROM panel_users WHERE id = '$user_id'";
$check_result = mysqli_query($con, $check_query);

if (mysqli_num_rows($check_result) > 0) {
    // User exists, proceed with deletion
    echo "<script>alert('User deleted succesfully');</script>";
    echo "<script>window.location.href = 'registered.php';</script>";
} else {
    // User does not exist or invalid user ID
    echo "<script>alert('User does not exist or invalid user ID.');</script>";
    echo "<script>window.location.href = 'registered.php';</script>";
    exit();
}

}

?>
