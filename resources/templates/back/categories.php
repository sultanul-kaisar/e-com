

<div class="page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Categories</a></li>      

    </ol>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">All Categories</h3>
                <h4 class="bg-success"><?php display_message(); ?></h4>                
                <button type="button" class="btn btn-outline-success float-right ml-5"><a href="index.php?add_category">+ Add Category</a></button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-responsive-md">
                        <thead>
                            <tr>
                                <th >Category ID</th>
                                <th>Category Title</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php categories_in_admin(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>