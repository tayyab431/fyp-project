<?php include('includes/header.php');?>

        <div class="col-12">
            <div class="form" style="">
            <h2>Add Products</h2>
                <form action="includes/functions.php" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                            <label for="">Name</label>
                            <input type="text" class="form-control" required name="name" id="">
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                            <label for="">Code</label>
                            <input type="text" class="form-control" required name="code" id="">
                           
                        </div>
                    

                        </div>
                        <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                            <label for="">Description</label>
                            <input type="text" class="form-control" required name="description" id="">
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                            <label for="">image</label>
                            <input type="file" class="form-control" required name="image" id=""> 
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                            <label for="">Purchase Price</label>
                            <input type="text" class="form-control" required name="purchase_price" id="">
                           
                        </div>
                    

                        </div><div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                            <label for="">Sale Price</label>
                            <input type="text" class="form-control" required name="sale_price" id="">
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                            <label for="">Quantity</label>
                            <input type="text" class="form-control" required name="quantity" id="">
                           
                        </div>
                        <div class="row mt-4">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                                <input class="text-end btn btn-outline-dark" type="submit" name="product_add" id="">
                            </div>
                        </div>
                    

                        </div>
                </form>
            </div>
        </div>
   
















<?php include ('includes/footer.php');?>
