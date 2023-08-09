<?php include('includes/header.php');?>
<?php                                    $id=$_GET['id'];
                                         $cond="AND id=$id";
                                        $data=get('products',$cond);
                                        
                                         
                                        foreach($data as $p){
                                        ?>

        <div class="col-12">
            <div class="form" style="">
                <form action="includes/functions.php" method="POST">
                    <h2>Edit Product</h2>
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                            <label for="">Name</label>
                            <input type="text" class="form-control" value="<?=$p['name']?>" name="name" id="">
                            <input type="hidden" class="form-control" value="<?=$p['id']?>" name="id" id="">
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                            <label for="">Code</label>
                            <input type="text" class="form-control" value="<?=$p['code']?>" name="code" id="">
                           
                        </div>
                    

                        </div>
                        <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                            <label for="">Description</label>
                            <input type="text" class="form-control" name="description" value="<?=$p['description']?>" id="">
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                            <label for="">Purchase Price</label>
                            <input type="text" class="form-control" name="purchase_price" value="<?=$p['purchase_price']?>" id="">
                           
                        </div>
                    

                        </div><div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                            <label for="">Sale Price</label>
                            <input type="text" class="form-control" name="sale_price" value="<?=$p['sale_price']?>" id="">
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                            <label for="">Quantity</label>
                            <input type="text" class="form-control" name="quantity" value="<?=$p['quantity']?>" id="">
                           
                        </div>
                        <div class="row mt-4">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                                <input class="text-end btn btn-outline-success" type="submit" value="Save" name="product_update" id="">
                            </div>
                        </div>
                    

                        </div>
                </form>
            </div>
        </div>
   
     <?php
                                        }
     ?>















<?php include ('includes/footer.php');?>
