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
        <button type="submit" value="<?php echo $row['id']; ?>" name= "deletorderbtn"  class="btn btn-primary">Yes, Delete ! </button>
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
                    <th>Manuf_iD</th>
                    <th>Cust_id</th>
                    <th>Invoice_id</th>
                    <th>Amount</th>
                    <th>status</th>
                    <th>Action </th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
    $query = "SELECT * FROM orders";
    $query_run = mysqli_query($con, $query);
    if(mysqli_num_rows($query_run) > 0){
        while($row = mysqli_fetch_assoc($query_run))
        {
?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['manufacturer_id']; ?> </td>
                <td><?php echo $row['customer_id'];?></td>
                <td> <?php echo $row['invoice_id']; ?></td>
                <td> <?php echo $row['amount']; ?></td>
                <td> <?php echo $row['status']; ?></td>
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
    $(".deletebtn").click(function (e) {
        e.preventDefault(); // Prevent form submission

        var orderId = $(this).val();

        // Open the confirmation modal
        $('#deletmodel').modal('show');

        // Set the order ID in the hidden input field
        $('.delete_user_id').val(orderId);
    });
});


</script>
<?php
  include($path.'/footer.php');
?>
<?php
  include($path.'/script.php');
?>


<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_POST['deleteorderbtn'])) {
    $id = $_POST['delete_id'];

    // Check if the order exists
    $check_query = "SELECT id FROM orders WHERE id = '$id'";
    $check_result = mysqli_query($con, $check_query);

    if (mysqli_num_rows($check_result) > 0) {
        // Order exists, proceed with deletion
        $delete_query = "DELETE FROM orders WHERE id = '$id'";
        $delete_result = mysqli_query($con, $delete_query);

        if ($delete_result) {
            echo "Order deleted successfully.";
        } else {
            echo "Error deleting order.";
        }
    } else {
        echo "Order does not exist or invalid order ID.";
    }
}
?>