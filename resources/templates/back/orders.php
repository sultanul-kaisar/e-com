
       
		
<!--**********************************
    Content body start

    <!- row -->
    <div class="container-fluid">

        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)"> Orders</a></li>
            </ol>
        </div>			
    </div>


     <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">All Orders</h3>
            </div>
            <h4 class="bg-success"><?php display_message(); ?></h4>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-responsive-md">
                        <thead>
                            <tr>
                                <th class="width80">Order ID</th>
                                <th>Amount</th>
                                <th>Transaction ID</th>
                                <th>Currency</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php display_orders(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



        