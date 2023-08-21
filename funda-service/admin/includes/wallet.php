<?php

  $path = dirname(__FILE__);
  include($path.'/dbconfig/dbconn.php');
  include($path.'/header.php');
  include($path.'/top-nav.php');
  include($path.'/sidebar.php');
  
?>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">

<!-- delete user -->
<div class="modal" id="deletmodel" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Delete order</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method= "post">
      <div class="modal-body">
      <input type="hidden" name="delete_id" class="delete_user_id">
        <p>Are you sure ! you want to delete this order </p>
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
              <li class="breadcrumb-item active">Order</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    
    

      <!-- /.card -->

      <div class="card">
              <div class="card-header">
                <h3 class="card-title">Orders Data
                    
                </h3>
              
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Profile</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Wallet</th>
                    <th>Action </th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
    $query = "SELECT * FROM panel_users where user_type = 'Manufacturer' AND wallet > 0";
    $query_run = mysqli_query($con, $query);
    if(mysqli_num_rows($query_run) > 0){
        while($row = mysqli_fetch_assoc($query_run))
        {
?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><img src="../../../Dashboard/includes/profiles/<?php echo $row['profile_image_path']; ?>" alt="Product Image" width="50"></td>
                <td><?php echo $row['name'];?></td>
                <td> <?php echo $row['email']; ?></td>
                <td> <?php echo $row['wallet']; ?></td>
                
                <td>
                    
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
  include($path.'/footer.php');
?>
<?php
  include($path.'/script.php');
?>


