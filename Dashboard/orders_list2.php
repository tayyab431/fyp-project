<?php include ('includes/header2.php');?>

<div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                            <div class="widget-content widget-content-area br-8">
                                <h2 class="p-4 m-2">All Orders</h2>
                                <table id="zero-config" class="table table-striped dt-table-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Manufacturer Id</th>
                                            <th>Customer Id</th>
                                            <th>Invoice Id</th>

                                            <th>Amount</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <!-- <th>Action</th> -->
                                        
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $uid=$_SESSION['login_user_id'];
                                        $cond="AND customer_id=$uid";
                                        $data=get('orders',$cond);
                                         if(!empty($data)){

                                       
                                        foreach($data as $p){
                                        ?>
                                        <tr>
                                            
                                            <td><?php echo $p['id']?></td>
                                            <td><?php echo getUserName($p['manufacturer_id']) ?></td>
                                            <td><?php echo getUserName($p['customer_id']) ?></td>
                                            <td><?php echo $p['invoice_id']?></td>

                                            <td><?php echo $p['amount']?></td>
                                            <td><?php echo $p['date']?></td>
                                            <td><?php echo $p['status']?></td>
                                           
                                            
                                        </tr>
                                        <?php
                                        }  }
                                        ?>
                                    </tbody>
                                    
                                </table>
                            </div>
                        </div>
    























<?php include ('includes/footer2.php');?>
