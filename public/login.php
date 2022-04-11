<?php require_once("../resources/config.php") ?>

<?php include(TEMPLATE_FRONT.DS. "header.php") ?>


    
    <div class="col-lg-6 col-md-4" style="margin:auto; text-align: center">
        <div class="contact__content">                        
            <div class="contact__form" style="margin-top: 50px;">
                <h5>Login</h5>
                <h2><?php display_message(); ?></h2>
                <form class="text" action="" method="post" enctype="multipart/form-data">
                    
                    <?php login_user(); ?>

                    <div class="col-lg-12">
                        <label for="usename">Username</label>
                        <input type="text" name="username" class="form-control"  placeholder="Enter Username">
                    </div>

                    <div class="col-lg-12">
                        <label for="password">Password:</label>
                        <input type="password" name="password" class="form-control" id="pwd" placeholder="Enter password">
                    </div>

                    <div class="form-group col-lg-12" >
                        <input type="submit" name="submit"   class="btn btn-success" value="LOG IN">
                    </div>
                </form>
                <p>Don't have an Account? <a href="register.php"> Register Now!</a></p>
            </div>
        </div>
    </div>


    <?php include(TEMPLATE_FRONT.DS. "footer.php") ?>