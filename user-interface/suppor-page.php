<?php
include('nav.php');
?>
  <!-- main content -->
  <div class="container mt-4"> <div class="row d-flex justify-content-center"> 
    <div class="col-md-9"> 
        <div class="card-a p-4 mt-3"> 
            <h3 class="heading mt-5 text-center"><?php echo $review[$language]['7']?></h3> 
            <div class="d-flex justify-content-center px-5"> 
                <div class="search">
                     <input type="text" class="search-input" placeholder="<?php echo $review[$language]['8']?>" name=""> <a href="#" class="search-icon"> <i class="fa fa-search"></i> </a> </div>
                     </div> 
                     <div class="row mt-4 g-1 px-4 mb-5"> 
                        <div class="col-md-2"> 
                            <div class="card-inner p-3 d-flex flex-column align-items-center"> <img src="https://i.imgur.com/Mb8kaPV.png" width="50"> 
                            <div class="text-center mg-text"> 
                          <span class="mg-text"><?php echo $review[$language]['9']?></span>
                      </div> 
               </div> 
           </div> 
           <div class="col-md-2"> 
               <div class="card-inner p-3 d-flex flex-column align-items-center"> 
                   <img src="https://i.imgur.com/ueLEPGq.png" width="50">
                    <div class="text-center mg-text"> <span class="mg-text"><?php echo $review[$language]['10']?></span> 
                   </div> </div> </div> <div class="col-md-2"> 
                       <div class="card-inner p-3 d-flex flex-column align-items-center"> 
                           <img src="https://i.imgur.com/tmqv0Eq.png" width="50">
                            <div class="text-center mg-text"> <span class="mg-text"><?php echo $review[$language]['11']?></span>
               </div> </div> </div> <div class="col-md-2"> 
                  <div class="card-inner p-3 d-flex flex-column align-items-center"> <img src="https://i.imgur.com/D0Sm15i.png" width="50"> <div class="text-center mg-text"> <span class="mg-text"><?php echo $review[$language]['12']?></span> </div> </div> </div> <div class="col-md-2"> 
                      <div class="card-inner p-3 d-flex flex-column align-items-center"> 
                   <img src="https://i.imgur.com/Z7BJ8Po.png" width="50"> 
                   <div class="text-center mg-text"> <span class="mg-text"><?php echo $review[$language]['13']?></span> 
                            </div> </div> </div> <div class="col-md-2">
                                 <div class="card-inner p-3 d-flex flex-column align-items-center"> 
                                    <img src="https://i.imgur.com/YLsQrn3.png" width="50"> 
                  <div class="text-center mg-text"> <span class="mg-text"><?php echo $review[$language]['14']?></span>
         </div> 
        </div> 
      </div> 
     </div> 
    </div> 
   </div> 
  </div>
 </div>
 <?php
include('footer.php');
?>




