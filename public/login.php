<?php require_once("../resources/config.php") ?>

<?php include(TEMPLATE_FRONT.DS. "header.php") ?>


    <div class="col">

    </div>
    <div class="col-lg-4 col-md-4" style="margin:auto; text-align: center">
        <div class="contact__content">                        
            <div class="contact__form">
                <h5>Login</h5>
                <h2><?php display_message(); ?></h2>
                <form action="#" method="post">

                    <?php login_user(); ?>

                    <input class="text" type="text" name="Username" placeholder="Username" required="">
                    <input class="text" type="password" name="password" placeholder="Password" required=""> 
                    <input class="btn btn-success" type="submit" value="LOG IN">
                </form>
                <p>Don't have an Account? <a href="register.php"> Register Now!</a></p>
            </div>
        </div>
	</div>
<?php include(TEMPLATE_FRONT.DS. "footer.php") ?>