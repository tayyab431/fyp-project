<?php include('includes/header.php');
error_reporting(E_ALL);
ini_set('display_errors', 1);


?>

 <?php
 $id=$_SESSION['login_user_id']; 
 $cond="AND id=$id"; 
 $data=get('panel_users',$cond);
 
  
 foreach($data as $p){
?>


	<div class="middle-content container-xxl p-0">
    <form action="" method="POST" enctype="multipart/form-data">
	<section style="background-color: #eee;">
  <div class="container py-5">
    <div class="row bg-light rounded-3 p-3 mb-4">
      <div class="col-6">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">User</a></li>
            <li class="breadcrumb-item "> Profile</li>
            <li class="breadcrumb-item active" aria-current="page">Create Profile</li>
          </ol>
        </nav>
      </div>
      <div class="col-6">
        <div class="d-flex justify-content-end">
          
        </div>
        
    </div>
    </div>


    <div class="row bg-light shadow p-4">
     
     

      <div class="col-lg-8">
          
        <div class=" mb-4">
          <div class="card-body">
            <div class="row">
            <div class="form-group mb-4">
      <label for="profile_image">Profile Image</label>
      <input type="file" class="form-control-file" name="profile_image" id="profile_image">
    </div>
               <div class="form-group mb-4">
                    <!-- <label for="name">Name</label> -->
                    <input type="hidden" class="form-control text-dark bg-light"  value="<?=$p['id']?>" name="id" id="" placeholder="">
                </div>
                <div class="form-group mb-4">
                    <label for="name">Name</label>
                    <input type="text" class="form-control text-dark bg-light"   name="name" id="" placeholder="">
                </div>
                <div class="form-group mb-4">
                    <label for="name">Phone</label>
                    <input type="text" class="form-control text-dark bg-light"   name="phone" id="" placeholder="">
                </div>
                <div class="form-group mb-4">
                    <label for="name">Email</label>
                    <input type="email" class="form-control text-dark bg-light"   name="email" id="" placeholder="">
                </div>
                <input type="hidden" name="user_type" value="Manufacturer">

                <div class="form-group mb-4">
                    <label for="description">Description</label>
                    <textarea class="form-control" name="description"></textarea>
                </div>
                <div class="form-group mb-4">
                    <label for="fb">Facebook Link</label>
                    <input type="text" class="form-control text-dark bg-light"   name="fb" id="fb" placeholder="">
                </div>
                <div class="form-group mb-4">
                    <label for="twitter">Twitter Link</label>
                    <input type="text" class="form-control text-dark bg-light"   name="twitter" id="twitter" placeholder="">
                </div>
                <div class="form-group mb-4">
                    <label for="insta">Instagram Link</label>
                    <input type="text" class="form-control text-dark bg-light"   name="insta" id="insta" placeholder="">
                </div>
                <div class="form-group mb-4">
                    <label for="linkdin">Linkdin Link</label>
                    <input type="text" class="form-control text-dark bg-light"   name="linkdin" id="linkdin" placeholder="">
                </div>
                <div class="form-group mb-4">
                    <label for="supply">Supply</label>
                    <input type="text" class="form-control text-dark bg-light"   name="supply" id="supply" placeholder="">
                </div>
                <div class="form-group mb-4">
                    <label for="from_country">From</label>
                    <input type="text" class="form-control text-dark bg-light"  name="from_country" id="from_country" placeholder="">
                </div>
                <div class="form-group mb-4">
                    <label for="from_country">Languages</label>
                    <input type="text" class="form-control text-dark bg-light"   name="languages" id="languages" placeholder="">
                </div>
                <div class="form-group mb-4">
                    <label for="from_country">Address</label>
                    <input type="text" class="form-control text-dark bg-light"   name="address" id="address" placeholder="">
                </div>
            </div>
           
			       <button type="submit" name="profile_create" class="btn btn-outline-success btn-lg col-md-12 mt-3">Save Profile</button>

				</div>

          </div>
         
        </div>
       
      </div>
    </div>
  </div>
  </form>
</section>
	</div>
    <?php }?>
                                        
                                        
    

  
<?php include ('includes/footer.php');?>


