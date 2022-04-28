<?php require_once("resources/config.php") ?>

<?php include(TEMPLATE_FRONT.DS. "header.php") ?>
<?php 

    if (!isset($_SESSION['user_id'])) {
        redirect("login.php");
    }

 ?>

<?php

    if (isset($_GET['user_id'])) {

        $query = query("SELECT * FROM users WHERE user_id = {$_SESSION['user_id']}");
        confirm($query);

         while($row = fetch_array($query)) {
            
            $password    = escape_string($row['password']);
         
        }


        
        }

        update_user_password();

  ?>



<div role="main" class="main">

    <section class="page-header page-header-classic">
        <div class="container">
            <div class="row">
                <div class="col">
                    <ul class="breadcrumb">
                        <li><a href="index.php">Home</a>/</li>
                        <li class="active">Change Password</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container py-2">

        <div class="row">            

            <div class="overflow-hidden mb-1" style="margin: auto;">
                <h2 class="font-weight-normal text-7 mb-0" style="text-decoration: underline;"><strong class="font-weight-extra-bold">Change</strong> Password</h2>
            </div>

            <div class="form-group col-lg-9" style="margin: auto;">
                <form role="form" method="post" class="needs-validation">
                    <!-- <div class="form-group row" style="margin-top:20px;">
                        <label class="col-lg-3 font-weight-bold text-dark col-form-label form-control-label text-2 required">Current Password</label>
                        <div class="col-lg-9">
                            <input class="form-control" id="cur_password" type="password" name="cur_password" placeholder="Enter your current password" required>
                        </div>
                    </div> -->

                    <div class="form-group row" style="margin-top:20px;">
                        <label class="col-lg-3 font-weight-bold text-dark col-form-label form-control-label text-2 required">New Password</label>
                        <div class="col-lg-9">
                            <input class="form-control" id="password1" type="password" name="password1" placeholder="Enter your new password" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-3 font-weight-bold text-dark col-form-label form-control-label text-2 required">Confirm Password</label>
                        <div class="col-lg-9">
                            <input class="form-control" id="password2" name="password2" type="password" placeholder="Confirm password" required>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <input type="submit" name="update" class="btn btn-outline-success" value="Update" style="margin-left: 50%">
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>























<?php include(TEMPLATE_FRONT.DS. "footer.php") ?>