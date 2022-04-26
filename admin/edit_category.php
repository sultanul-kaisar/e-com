<?php require_once("../resources/config.php") ?>

<?php include(TEMPLATE_BACK . DS . "/header.php") ?>

<?php include(TEMPLATE_BACK . DS . "/sidebar.php") ?>

<?php 

    if (isset($_GET['id'])) {
        
        $query = query("SELECT * FROM categories WHERE cat_id = " . escape_string($_GET['id']) . " ");
        confirm($query);

         while($row = fetch_array($query)) {

            $cat_title = escape_string($row['cat_title']);
         }

    }

    update_category();



 ?>


<div class="content-body">
	<div class="page-titles">
	    <ol class="breadcrumb">
	        <li class="breadcrumb-item"><a href="javascript:void(0)"><i class="fa fa-dashboard"></i> Dashboard</a></li>
	        <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit Category</a></li>      

	    </ol>
	</div>
	<div class="row">
	    <div class="col-xl-12 col-lg-12">
	        <div class="card">
	            <div class="card-header">
	                <h4 class="card-title">Category Title</h4>
	            </div>
	            <div class="card-body">
	                <div class="basic-form">
	                    <form action="" method="post">
	                        <div class="row col-lg-12">
	                            <div class="form-group col-lg-6">
	                                <input type="text" class="form-control input-default " value=" <?php echo $cat_title ?>" name="cat_title" style="border-color:yellowgreen;" placeholder="Enter Category Title">
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
</div>

<?php include(TEMPLATE_BACK . DS . "/footer.php") ?>