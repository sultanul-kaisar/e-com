<?php require_once("../../resources/config.php") ?>



<div class="page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Products</a></li>      

    </ol>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">All Users</h3>
                <h4 class="bg-success"><?php display_message(); ?></h4>                
                <button type="button" class="btn btn-outline-success float-right ml-5"><a href="index.php?add_product">+ Add Product</a></button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table header-border">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php users_in_admin(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>