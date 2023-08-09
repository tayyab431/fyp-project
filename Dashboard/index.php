<?php include('includes/header.php');?>
<?php
                                        $uid=$_SESSION['login_user_id'];
                                        $cond="AND manufacturer_id=$uid";
                                       $data=get('orders',$cond);
                                        $total_products=0;
                                        $total_orders=0;

                                        foreach($data as $p){
                                            $total_orders++;
                                        }

                                        $uid=$_SESSION['login_user_id'];
                                        $cond="AND manufacturer_id=$uid";
                                        $data2=get('products',$cond);

                                        foreach($data2 as $p){
                                            $total_products++;
                                        }
                                        ?>



                     
                 
                         <!-- Card one start -->
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                            <div class="widget widget-card-five">
                                <div class="widget-content">
                                    <div class="account-box">

                                        <div class="info-box">
                                            <div class="icon">
                                                <span>
                                                    <img src="src/assets/img/money-bag.png" alt="money-bag">
                                                </span>
                                            </div>

                                            <div class="balance-info">
                                                <h6>Total Orders</h6>
                                                <p><?=$total_orders;?></p>
                                            </div>
                                        </div>

                                        <div class="card-bottom-section">
                                            <!-- <div><span class="badge badge-light-success">+ 13.6% <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg></span></div> -->
                                            <a href="javascript:void(0);" class="btn btn-warning">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card one end  -->
                         <!-- Card two start -->
                         <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                            <div class="widget widget-card-five">
                                <div class="widget-content">
                                    <div class="account-box">

                                        <div class="info-box">
                                            <div class="icon">
                                                <span>
                                                    <img src="src/assets/img/money-bag.png" alt="money-bag">
                                                </span>
                                            </div>

                                            <div class="balance-info">
                                                <h6>Total Products</h6>
                                                <p><?=$total_products;?></p>
                                            </div>
                                        </div>

                                        <div class="card-bottom-section">
                                            <!-- <div><span class="badge badge-light-success">+ 13.6% <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg></span></div> -->
                                            <a href="products_list.php" class="btn btn-warning">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card two end  -->

                   




                       

                        
                       <!-- //////////////  End of card  -->

























<?php include ('includes/footer.php');?>
