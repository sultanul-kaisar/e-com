<?php require_once("../resources/config.php") ?>

<?php include(TEMPLATE_BACK . DS . "/header.php") ?>

<?php include(TEMPLATE_BACK . DS . "/sidebar.php") ?>

<?php 

	if (!isset($_SESSION['admin'])) {
		redirect("../../ecom/");
	}

?>

       
		
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">				


				<?php 
				
				if($_SERVER['REQUEST_URI'] == "/admin/" || $_SERVER['REQUEST_URI'] == "/admin/index.php?dashboard")  {


                    include(TEMPLATE_BACK . "\dashboard.php");

                }


				if (isset($_GET['dashboard'])) {
					
					include(TEMPLATE_BACK . "\dashboard.php");
				}

				if (isset($_GET['orders'])) {
					
					include(TEMPLATE_BACK . "\orders.php");
				}

				if (isset($_GET['add_product'])) {
					
					include(TEMPLATE_BACK . "\add_product.php");
				}

				
				if (isset($_GET['products'])) {
					
					include(TEMPLATE_BACK . "\products.php");
				}

				
				if (isset($_GET['edit_product'])) {
					
					include(TEMPLATE_BACK . "/edit_product.php");
				}


				if (isset($_GET['categories'])) {
					
					include(TEMPLATE_BACK . "\categories.php");
				}

				if (isset($_GET['add_category'])) {
					
					include(TEMPLATE_BACK . "\add_category.php");
				}

				if (isset($_GET['edit_category'])) {
					
					include(TEMPLATE_BACK . "/edit_category.php");
				}

				if (isset($_GET['add_sub_category'])) {
					
					include(TEMPLATE_BACK . "\add_sub_category.php");
				}

				if (isset($_GET['edit_sub_category'])) {
					
					include(TEMPLATE_BACK . "/edit_sub_category.php");
				}

				if (isset($_GET['users'])) {
					
					include(TEMPLATE_BACK . "\users.php");
				}


				
				
				?>

				
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

		<?php include(TEMPLATE_BACK . DS . "/footer.php") ?>


        