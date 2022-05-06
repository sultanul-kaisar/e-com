
<?php add_sub_category();  ?>



<div class="page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Add Sub Category</a></li>      

    </ol>
</div>
<div class="row">
    <div class="col-xl-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Sub Category Title</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form action="" method="post">
                        <div class="row col-lg-12">
                            <div class="form-group col-lg-5">
                                <input type="text" class="form-control input-default " name="sub_cat_title" style="border-color:yellowgreen;" placeholder="Enter Sub Category Title" required>
                            </div>

                            <div class="col-auto my-1">
                                <select name="parent_cat_id" class="mr-sm-2 default-select" id="inlineFormCustomSelect" required>
                                    <option selected>Select Category</option>
                                    <?php show_category_name() ?>
                                </select>
                            </div>

                            <div class="form-group col-lg-3">
                                <input type="submit" name="submit" class="btn btn-outline-success " value="Submit">
                                <button type="button" class="btn btn-outline-success float-right"><a href="index.php?categories">Back </a></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>