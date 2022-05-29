

<?php 

    if (isset($_GET['id'])) {
        
        $query = query("SELECT * FROM sub_categories WHERE sub_cat_id = " . escape_string($_GET['id']) . " ");
        confirm($query);

         while($row = fetch_array($query)) {

            $sub_cat_title = escape_string($row['sub_cat_title']);
            $parent_cat_id = escape_string($row['parent_cat_id']);
            
         }

    }

    update_sub_category();



 ?>



<div class="page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit Sub Category</a></li>      

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
                                <input type="text" class="form-control input-default " name="sub_cat_title" style="border-color:yellowgreen;" value="<?php echo $sub_cat_title ?>">
                            </div>

                            <div class="col-auto my-1">
                                <select name="parent_cat_id" class="mr-sm-2 " id="inlineFormCustomSelect" >
                                    <option >Select Category</option>
                                    <?php show_category_name($parent_cat_id) ?>
                                </select>
                            </div>

                            <div class="form-group col-lg-3">
                                <input type="submit" name="update" class="btn btn-outline-success " value="Update">
                                <button type="button" class="btn btn-outline-success float-right"><a href="index.php?categories">Back </a></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>