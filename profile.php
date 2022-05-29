<?php require_once("resources/config.php") ?>

<?php include(TEMPLATE_FRONT.DS. "header.php") ?>
<?php 

    if (!isset($_SESSION['user_id'])) {
        redirect("login.php");
    }

    $query1 = query("SELECT * FROM users WHERE user_id = {$_SESSION['user_id']}");
    $user = mysqli_fetch_assoc($query1); 

    $query2 = query("SELECT * FROM profiles WHERE user_id = {$_SESSION['user_id']}");
    $profile = mysqli_fetch_assoc($query2);
  ?>



<div role="main" class="main">

    <section class="page-header page-header-classic">
        <div class="container">
            <div class="row">
                <div class="col">
                    <ul class="breadcrumb">
                        <li><a href="index.php">Home</a>/</li>
                        <li class="active">Profile</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container py-2">

        <div class="row">
            <div class="col-lg-3 mt-4 mt-lg-0">

                <div class="d-flex justify-content-center mb-4">
                    <div class="profile-image-outer-container">
                        <div class="profile-image-inner-container bg-color-primary">
                            <img src="resources/uploads/profiles/<?php echo $profile['photo'] ?>" alt="" style="width:150px; border-radius: 20%;">
                            <span class="profile-image-button bg-color-dark">
                                <i class="fas fa-camera text-light"></i>
                            </span>
                        </div>
                    </div>
                </div>

                <aside class="sidebar mt-2" id="sidebar">
                    <ul class="nav nav-list flex-column mb-5">
                        <li class="nav-item"><a class="nav-link " href="#">My Orders</a></li>
                        <!-- <li class="nav-item"><a class="nav-link" href="#">User Preferences</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Billing</a></li> -->
                        <li class="nav-item"><a class="nav-link" href="change-password.php">Change Password</a></li>
                    </ul>
                </aside>

            </div>
            <div class="col-lg-9">

                <div class="overflow-hidden mb-1">
                    <h2 class="font-weight-normal text-7 mb-0"><strong class="font-weight-extra-bold">My</strong> Profile</h2>
                </div>
                <h4 class="bg-success"><?php display_message(); ?></h4> 

                <form role="form" class="needs-validation">
                    <div class="form-group row" style="margin-top:20px;">
                        <label class="col-lg-3 font-weight-bold text-dark col-form-label form-control-label text-2 required">First name</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="text" name="firstName" value="<?php 
                                if(empty($profile['firstName'])) {
                                    echo "Edit your First Name!";                                
                                    } else {
                                      echo $profile['firstName'];  
                                    } ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 font-weight-bold text-dark col-form-label form-control-label text-2 required">Last name</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="text" name="lastName" value="<?php 
                                if(empty($profile['lastName'])) {
                                    echo "Edit your Last Name!";                                
                                    } else {
                                      echo $profile['lastName'];  
                                    } ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 font-weight-bold text-dark col-form-label form-control-label text-2 required">Email</label>
                        <div class="col-lg-9">
                            <input class="form-control" name="email" type="email" value="<?php echo $user['email'] ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 font-weight-bold text-dark col-form-label form-control-label text-2">Address</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="text" name="street" value="<?php
                            if(empty($profile['street'])) {
                                echo "Edit your profile!";                                
                                } else {
                                  echo $profile['street'];  
                                } ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 font-weight-bold text-dark col-form-label form-control-label text-2"></label>
                        <div class="col-lg-3">
                            <input class="form-control" name="city" type="text" value="<?php
                            if(empty($profile['city'])) {
                                echo "Edit your profile!";                                
                                } else {
                                  echo $profile['city'];  
                                } ?>" readonly>
                        </div>
                        <div class="col-lg-3">
                            <input class="form-control" type="text" name="state" value="<?php
                             if(empty($profile['state'])) {
                                echo "Edit your profile!";                                
                                } else {
                                  echo $profile['state'];  
                                } ?>" readonly>
                        </div>
                        <div class="col-lg-3">
                            <input class="form-control" type="text" name="postal_code" value="<?php if(empty($profile['postal_code'])) {
                                echo "Edit your profile!";                                
                                } else {
                                  echo $profile['postal_code'];  
                                } ?>" readonly>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-3 font-weight-bold text-dark col-form-label form-control-label text-2">Country</label>
                        <div class="col-lg-9">
                            <input class="form-control" name="country" type="text" value="<?php
                             if(empty($profile['country'])) {
                                echo "Edit your profile!";                                
                                } else {
                                  echo $profile['country'];  
                                } ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 font-weight-bold text-dark col-form-label form-control-label text-2">Phone</label>
                        <div class="col-lg-9">
                            <input class="form-control" name="mobile" type="text" value="<?php
                            if(empty($profile['mobile'])) {
                                echo "Edit your profile!";                                
                                } else {
                                  echo $profile['mobile'];  
                                } ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 font-weight-bold text-dark col-form-label form-control-label text-2 required">Username</label>
                        <div class="col-lg-9">
                            <input class="form-control" name="username" type="text" value="<?php echo $_SESSION['username'] ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="form-group col-lg-9">
                            
                        </div>
                        <div class="form-group col-lg-3">
                            <a href="edit-profile.php"><input type="" value="Edit" class="btn btn-primary btn-modern float-right" data-loading-text="Loading..."></a>
                        </div>
                    </div>
                </form>

            </div>
        </div>

    </div>
</div>























<?php include(TEMPLATE_FRONT.DS. "footer.php") ?>