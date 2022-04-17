<?php require_once("../../resources/config.php") ?>



<div class="page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit Product</a></li>      

    </ol>
    <button type="button" class="btn btn-success float-right ml-2"><a href="index.php?products">Update</a></button>
    <button type="button" class="btn btn-success float-right"><a href="index.php?products">Back </a></button>
    
</div>
<div class="row col-xl-12">
    <div class="col-xl-8 col-lg-8" style="margin-top:20px;">
        <div class="card">
            <div class="card-body">                
                <h4 class="card-title">Product Title</h4>
                <div class="basic-form">
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control input-default " placeholder="Enter the product title">
                        </div>
                    </form>
                </div>
            </div>

            
            <div class="card-body">
                <h4 class="card-title">Product Descreiption</h4>
                <div class="summernote"></div>
            </div>

            
            <div class="card-body">
                <div class="basic-form">
                    <form>
                        <h4 class="card-title">Product Price</h4>
                        <div class="form-group col-xl-6 col-lg-6">
                            <input type="text" class="form-control input-default " placeholder="Enter the product price">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-4" style="margin-top:20px;">
        <div class="card">
            <div class="card-body">
                <div class="basic-form">
                    <form>
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

                        <h4 class="card-title" style="margin-top:10px;">Product Brand</h4>
                        <div class="form-row align-items-center">
                            <div class="col-auto my-1">
                                <select class="mr-sm-2 default-select" id="inlineFormCustomSelect">
                                    <option selected>Select Brand</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>

                        <h4 class="card-title" style="margin-top:10px;">Product Image</h4>
                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input">
                                <label class="custom-file-label">Choose file</label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</div>