<?php include('includes/header.php');?>
<div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                            <div class="widget-content widget-content-area br-8">
                                <h2 class="p-4 m-2">All Products</h2>
                                <table id="zero-config" class="table table-striped dt-table-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Code</th>
                                            <th>Description</th>

                                            <th>Purchase price</th>
                                            <th>Sale price</th>
                                            <th>Quantity</th>
                                            <th>Action</th>

                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $uid=$_SESSION['login_user_id'];
                                        $cond="AND manufacturer_id=$uid";
                                        $data=get('products',$cond);
                                         if(!empty($data)){

                                       
                                        foreach($data as $p){
                                        ?>
                                        <tr>
                                            
                                            <td><?php echo $p['id']?></td>
                                            <td><?php echo $p['name']?></td>
                                            <td><?php echo $p['code']?></td>
                                            <td><?php echo $p['description']?></td>

                                            <td><?php echo $p['purchase_price']?></td>
                                            <td><?php echo $p['sale_price']?></td>
                                            <td><?php echo $p['quantity']?></td>
                                            <td>
                                                  <form action="includes/functions.php" method="post">
                                                    <input type="hidden" value="<?php echo $p['id'];?>" name="id" id="">
                                                    <input type="submit" name="product_delete" value="Delete"  class="btn btn-danger"  id="">
                                                    <a href="products_edit.php?id=<?php echo $p['id']?>" class="action-btn btn-edit bs-tooltip me-2" data-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Edit">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                                        </a>
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
