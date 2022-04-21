<!--**********************************
    Sidebar start
***********************************-->
<div class="deznav">
    <div class="deznav-scroll">
        <a href="javascript:void(0)" class="add-menu-sidebar" data-toggle="modal" data-target="#addOrderModalside" >+ New Event</a>
        <ul class="metismenu" id="menu">
            <li><a href="index.php?dashboard"><i class="flaticon-381-networking"></i>Dashboard</a></li>                    
            
            <li><a href="index.php?orders"><i class="fa fa-cube"></i>Orders</a></li>
           
            <li><a href="index.php?products"><i class="fa fa-cube"></i>Products</a></li>

            <li><a href="index.php?categories"><i class="fa fa-cube"></i>Categories</a></li>

            <li><a href="index.php?users"><i class="fa fa-users"></i>Users</a></li>

        </ul>            
    </div>
</div>
<!--**********************************
    Sidebar end
***********************************-->

<!-- Add Order -->
<div class="modal fade" id="addOrderModalside">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Event</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label class="text-black font-w500">Event Name</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="text-black font-w500">Event Date</label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="text-black font-w500">Description</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-primary">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>