<?php include('includes/header.php');?>
 <?php


$id=$_SESSION['login_user_id']; 
 $cond="AND id=$id"; 
 $data=get('panel_users',$cond);
 


foreach ($data as $p) {
    // Your code here to access the individual elements of $p


?>
 <style>
   .circular-image-container {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    overflow: hidden;
    display: inline-block; /* Add this to make it inline with the input */
    margin-right: 10px; /* Add this to provide some spacing between the image and input */
}

.circular-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
}





 </style>

	<div class="middle-content container-xxl p-0">
    <form action="includes/functions.php" method="POST" enctype="multipart/form-data">
	<section style="background-color: #eee;">
  <div class="container py-5">
    <div class="row bg-light rounded-3 p-3 mb-4">
      <div class="col-6">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">User</a></li>
            <li class="breadcrumb-item" > Profile</li>
            <li class="breadcrumb-item active" aria-current="page">Update Profile</li>
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
    <?php
    // Display the profile image if it exists
    if (isset($p['profile_image_path']) && !empty($p['profile_image_path'])) {
        $image_path = 'includes/profiles/' . $p['profile_image_path'];
        echo '<label for="profile_image_input" style="cursor: pointer;">'; // Added label element with "for" attribute
        echo '<div class="circular-image-container">';
        echo '<img src="' . $image_path . '" alt="Profile Image" class="circular-image" id="profile_image_preview">';
        echo '</div>';
        echo '</label>';
    } else {
        // If the profile image does not exist, display a placeholder image
        echo '<label for="profile_image_input" style="cursor: pointer;">'; // Added label element with "for" attribute
        echo '<div class="circular-image-container bg-light d-flex justify-content-center align-items-center">';
        echo '<span class="text-muted">No Image</span>';
        echo '</div>';
        echo '</label>';
    }
    ?>
    <input type="file" class="form-control-file d-none" name="profile_image" id="profile_image_input"> <!-- Hidden file input -->
</div>
<div class="form-group mb-4">
                    <!-- <label for="name">Name</label> -->
                    <input type="hidden" class="form-control text-dark bg-light"  value="<?=$p['id']?>" name="id" id="" placeholder="">
                </div>

                <div class="form-group mb-4">
                    <label for="name">Name</label>
                    <input type="text" class="form-control text-dark bg-light"  value="<?=$p['name']?>" name="name" id="" placeholder="">
                </div>
                <div class="form-group mb-4">
                    <label for="name">Phone</label>
                    <input type="text" class="form-control text-dark bg-light"  value="<?=$p['phone']?>" name="phone" id="" placeholder="">
                </div>
                <div class="form-group mb-4">
                    <label for="name">Email</label>
                    <input type="email" class="form-control text-dark bg-light"  value="<?=$_SESSION['email']?>" name="email" id="" placeholder="">
                </div>
                
                <div class="form-group mb-4">
                    <label for="description">Description</label>
                    <textarea class="form-control" name="description"><?=$p['description']?></textarea>
                </div>
                <div class="form-group mb-4">
                    <label for="fb">Facebook Link</label>
                    <input type="text" class="form-control text-dark bg-light"  value="<?=$p['fb']?>" name="fb" id="fb" placeholder="">
                </div>
                <div class="form-group mb-4">
                    <label for="twitter">Twitter Link</label>
                    <input type="text" class="form-control text-dark bg-light"  value="<?=$p['twitter']?>" name="twitter" id="twitter" placeholder="">
                </div>
                <div class="form-group mb-4">
                    <label for="insta">Instagram Link</label>
                    <input type="text" class="form-control text-dark bg-light"  value="<?=$p['insta']?>" name="insta" id="insta" placeholder="">
                </div>
                <div class="form-group mb-4">
                    <label for="linkdin">Linkdin Link</label>
                    <input type="text" class="form-control text-dark bg-light"  value="<?=$p['linkdin']?>" name="linkdin" id="linkdin" placeholder="">
                </div>
                <div class="form-group mb-4">
                    <label for="supply">Supply</label>
                    <input type="text" class="form-control text-dark bg-light"  value="<?=$p['supply']?>" name="supply" id="supply" placeholder="">
                </div>
                <div class="form-group mb-4">
                    <label for="from_country">From</label>
                    <input type="text" class="form-control text-dark bg-light"  value="<?=$p['from_country']?>" name="from_country" id="from_country" placeholder="">
                </div>
                <div class="form-group mb-4">
                    <label for="from_country">Languages</label>
                    <input type="text" class="form-control text-dark bg-light"  value="<?=$p['languages']?>" name="languages" id="languages" placeholder="">
                </div>
                <div class="form-group mb-4">
                    <label for="from_country">Address</label>
                    <input type="text" class="form-control text-dark bg-light"  value="<?=$p['address']?>" name="address" id="address" placeholder="">
                </div>
            </div>
           
			       <button type="submit" name="profile_update" class="btn btn-outline-success btn-lg col-md-12 mt-3">Save changes</button>

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
