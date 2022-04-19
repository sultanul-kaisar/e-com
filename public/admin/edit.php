<?php require_once("../../resources/config.php") ?>
<?php include(TEMPLATE_BACK . DS . "/header.php") ?>

<?php include(TEMPLATE_BACK . DS . "/sidebar.php") ?>


<?php 

    if (isset($_GET['id'])) {
        
        $query = query("SELECT * FROM products WHERE product_id = " . escape_string($_GET['id']) . " ");
        confirm($query);

         while($row = fetch_array($query)) {

            $product_title          = escape_string($row['product_title']);
            $product_category_id    = escape_string($row['product_category_id']);
            $product_price          = escape_string($row['product_price']);
            $product_description    = escape_string($row['product_description']);
            $short_desc             = escape_string($row['short_desc']);
            $product_quantity       = escape_string($row['product_quantity']);
            $product_image          = escape_string($row['product_image']);


            $product_image = display_image($row['product_image']);


         }

    }

    update_product();



 ?>

<div class="content-body">
    <!-- row -->
	<div class="container-fluid">	

		<div class="page-titles">
		    <ol class="breadcrumb">
		        <li class="breadcrumb-item"><a href="javascript:void(0)"><i class="fa fa-dashboard"></i> Dashboard</a></li>
		        <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit Product</a></li>      

		    </ol>
		    
		</div>   
		<div class="basic-form"> 
    <form action="" method="post" enctype="multipart/form-data">
        <div class="row col-xl-12"> 
            <div class="col-xl-8 col-lg-8" style="margin-top:20px;">
                <div class="card">
                    <div class="card-body">                
                        <h4 class="card-title">Product Title</h4>
                        <div class="form-group">
                            <input type="text" name="product_title" value="<?php echo $product_title; ?>" style="border-color: yellowgreen;" class="form-control input-default " placeholder="Enter the product title">
                        </div>
                    </div>

                    
                    <div class="card-body">
                        <h4 class="card-title">Product Descreiption</h4>
                        <div class="form-group">
                            <textarea style="border-color: yellowgreen;" name="product_description"  cols="30" rows="8" class="form-control input-default"><?php echo $product_description; ?></textarea>
                        </div>
                    </div>

                    <div class="card-body">
                        <h4 class="card-title">Product Short Descreiption</h4>
                        <div class="form-group">
                            <textarea style="border-color: yellowgreen;" name="short_desc" cols="30" rows="4" class="form-control input-default"><?php echo $short_desc; ?> </textarea>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="col-xl-4 col-lg-4" style="margin-top:20px;">
                <div class="card">
                    <div class="card-body">                       

                        <input type="submit" name="update" class="btn btn-outline-success " value="Update">
                        <button type="button" class="btn btn-outline-success float-right"><a href="index.php?products">Back </a></button>
                        <h4 class="card-title">Product Category</h4>
                        <div class="form-row align-items-center">
                            <div class="col-auto my-1">
                                <select class="mr-sm-2 default-select" id="inlineFormCustomSelect">
                                    <option selected value="<?php echo $product_category_id; ?>"> <?php echo show_category_title($product_category_id); ?></option>
                                    <?php show_category_name() ?>
                                </select>
                            </div>
                        </div>


                        
                        <h4 class="card-title">Product Price</h4>
                        <div class="form-group">
                            <input style="border-color: yellowgreen;" type="text" name="product_price" value=" <?php echo $product_price; ?>" class="form-control input-default " placeholder="Enter the product price">
                        </div>

                        <h4 class="card-title" style="margin-top:10px;">Product Quantity</h4>
                        <div class="form-row align-items-center">
                            <div class="form-group ">
                                <input style="border-color: yellowgreen;" type="number" name="product_quantity" value="<?php echo $product_quantity; ?>" class="form-control input-default " placeholder="Enter the product quantity">
                            </div>
                        </div>

                        <h4 class="card-title" style="margin-top:10px;">Product Image</h4>
                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input">
                                <label class="custom-file-label">Choose file</label>         
                            </div>
                        </div>
                        <img width="120" src="../../resources/<?php echo $product_image; ?> ">
                    </div>
                </div>
            </div>
        </div>
    </form>         
</div>
	</div>
</div>
<?php include(TEMPLATE_BACK . DS . "/footer.php") ?>
