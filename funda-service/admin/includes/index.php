<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

  $path = dirname(__FILE__);
  include($path.'/header.php');
  include($path.'/top-nav.php');
  include($path.'/sidebar.php');
  
  $con=mysqli_connect('172.18.0.2','root','786110','clothdatabase');
if($con){
    echo "connected success";
}
else{
die(mysqli_error($con));}
// Initialize variables
$userCount = 0;
$supplierCount = 0;

// Fetch user registration count
$userQuery = "SELECT COUNT(*) AS total_users FROM panel_users";
$userResult = mysqli_query($con, $userQuery);
if ($userResult) {
  $userData = mysqli_fetch_assoc($userResult);
  $userCount = $userData['total_users'];
} else {
  // Handle database query error
  echo "Error fetching user count: " . mysqli_error($con);
}

// Fetch supplier registration count
$supplierQuery = "SELECT COUNT(*) AS total_suppliers FROM manufacturers";
$supplierResult = mysqli_query($con, $supplierQuery);
if ($supplierResult) {
  $supplierData = mysqli_fetch_assoc($supplierResult);
  $supplierCount = $supplierData['total_suppliers'];
} else {
  // Handle database query error
  echo "Error fetching supplier count: " . mysqli_error($con);
}
 
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
              <li class="breadcrumb-item active">Dashboard </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
     <!-- Main content -->
     <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>New Orders</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
              <h3><?php echo $supplierCount; ?></h3>

                <p>suppier Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
              <h3><?php echo $userCount; ?></h3>

                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Unique Visitors</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
    
<?php

  include($path.'/footer.php');?>
  <?php include($path.'/script.php');?>


