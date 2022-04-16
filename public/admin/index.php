<?php require_once("../../resources/config.php") ?>

<?php include(TEMPLATE_BACK . DS . "/header.php") ?>

<?php include(TEMPLATE_BACK . DS . "/sidebar.php") ?>

<?php 

	if (!isset($_SESSION['username'])) {
		redirect("../../public");
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


                    include(TEMPLATE_BACK . "/dashboard.php");

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
					
					include(TEMPLATE_BACK . "\edit_product.php");
				}


				if (isset($_GET['categories'])) {
					
					include(TEMPLATE_BACK . "\categories.php");
				}


				
				
				?>

				
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

		<?php include(TEMPLATE_BACK . DS . "/footer.php") ?>


        