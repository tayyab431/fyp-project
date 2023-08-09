<?php include ('includes/header2.php');?>

<div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                            <div class="widget-content widget-content-area br-8">
                                <h2 class="p-4 m-2">All Transactions</h2>
                                <table id="zero-config" class="table table-striped dt-table-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>TID</th>
                                            <th>Amount</th>
                                            <th>Date</th>
                                            <th>Description</th>
                                         
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $uid=$_SESSION['login_user_id'];
                                         $cond="AND user_id=$uid";
                                        $data=get('transactions',$cond);
                                         if(!empty($data)){

                                       
                                        foreach($data as $p){
                                        ?>
                                        <tr>
                                            
                                            <td><?php echo $p['id']?></td>
                                            <td><?php echo $p['tid']?></td>
                                       

                                            <td><?php echo $p['amount']?></td>
                                            <td><?php echo $p['date']?></td>
                                            <td><?php echo $p['description']?></td>
                                           
                                            
                                        </tr>
                                        <?php
                                        }  }
                                        ?>
                                    </tbody>
                                    
                                </table>
                            </div>
                        </div>
    























<?php include ('includes/footer2.php');?>
