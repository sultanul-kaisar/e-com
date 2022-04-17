<?php require_once("../../resources/config.php") ?>
<?php include(TEMPLATE_BACK . DS . "/header.php") ?>

<?php include(TEMPLATE_BACK . DS . "/sidebar.php") ?>

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
                            <input type="text" name="product_title" style="border-color: yellowgreen;" class="form-control input-default " placeholder="Enter the product title">
                        </div>
                    </div>

                    
                    <div class="card-body">
                        <h4 class="card-title">Product Descreiption</h4>
                        <div class="form-group">
                            <textarea style="border-color: yellowgreen;" name="product_description" cols="30" rows="8" class="form-control input-default"></textarea>
                        </div>
                    </div>

                    <div class="card-body">
                        <h4 class="card-title">Product Short Descreiption</h4>
                        <div class="form-group">
                            <textarea style="border-color: yellowgreen;" name="short_desc" cols="30" rows="4" class="form-control input-default"></textarea>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="col-xl-4 col-lg-4" style="margin-top:20px;">
                <div class="card">
                    <div class="card-body">                       

                        <button type="button" class="btn btn-outline-success float-right ml-2"><a href="index.php?products">Publish</a></button>
                        <button type="button" class="btn btn-outline-success float-right"><a href="index.php?products">Back </a></button>
                        <h4 class="card-title">Product Category</h4>
                        <div class="form-row align-items-center">
                            <div class="col-auto my-1">
                                <select class="mr-sm-2 default-select" id="inlineFormCustomSelect">
                                    <option selected>Select Category</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>


                        
                        <h4 class="card-title">Product Price</h4>
                        <div class="form-group">
                            <input style="border-color: yellowgreen;" type="text" name="product_price" class="form-control input-default " placeholder="Enter the product price">
                        </div>

                        <h4 class="card-title" style="margin-top:10px;">Product Quantity</h4>
                        <div class="form-row align-items-center">
                            <div class="form-group ">
                                <input style="border-color: yellowgreen;" type="number" name="product_quantity" class="form-control input-default " placeholder="Enter the product quantity">
                            </div>
                        </div>

                        <h4 class="card-title" style="margin-top:10px;">Product Image</h4>
                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input">
                                <label class="custom-file-label">Choose file</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>         
</div>
	</div>
</div>
<?php include(TEMPLATE_BACK . DS . "/footer.php") ?>
