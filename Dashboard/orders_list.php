<?php include ('includes/header.php');
?>

<div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                            <div class="widget-content widget-content-area br-8">
                                <h2 class="p-4 m-2">All Orders</h2>
                                <table id="zero-config" class="table table-striped dt-table-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Manufacturer Id</th>
                                            <th>Customer Id</th>
                                            <th>Amount</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $uid=$_SESSION['login_user_id'];
                                         $cond="AND manufacturer_id=$uid";
                                        $data=get('orders',$cond);
                                         if(!empty($data)){

                                       
                                        foreach($data as $p){
                                        ?>
                                        <tr>
                                            
                                            <td><?php echo $p['id']?></td>
                                            <td><?php echo getUserName($p['manufacturer_id']) ?></td>
                                            <td><?php echo getUserName($p['customer_id']) ?></td>

                                            <td><?php echo $p['amount']?></td>
                                            <td><?php echo $p['date']?></td>
                                            <td><?php echo $p['status']?></td>
                                            <td>
                                                  <form action="includes/functions.php" method="post">
                                                    <input type="hidden" value="<?php echo $p['id'];?>" name="id" id="">
                                                    <input type="submit" name="order_delete" value="Delete"  class="btn btn-danger"  id="">
                                                    <!---<a href="products_edit.php?id=<?php echo $p['id']?>" class="action-btn btn-edit bs-tooltip me-2" data-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Edit">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                                        </a> --->
                                                  </form>
                                            
                                           </td>
                                           
                                            
                                        </tr>
                                        <?php
                                        }  }
                                        ?>
                                    </tbody>
                                    
                                </table>
                            </div>
                        </div>
    























<?php include ('includes/footer.php');?>
