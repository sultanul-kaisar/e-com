<?php require_once("../resources/config.php") ?>

<?php include(TEMPLATE_FRONT.DS. "header.php") ?>


    <div class="col">

    </div>
    <div class="col-lg-4 col-md-4" style="margin:auto; text-align: center">
        <div class="contact__content">                        
            <div class="contact__form">
                <h5>Register</h5>
                <form action="#" method="post">
					<input class="text" type="text" name="Username" placeholder="Username" required="">
					<input class="text email" type="email" name="email" placeholder="Email" required="">
					<input class="text" type="password" name="password" placeholder="Password" required="">
					<input class="text w3lpass" type="password" name="password" placeholder="Confirm Password" required="">
					<div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>I Agree To The Terms & Conditions</span>
						</label>
						<div class="clear"> </div>
					</div>
					<input class="btn btn-success" type="submit" value="SIGNUP">
				</form>
				<p>Have an Account? <a href="login.php"> Login Now!</a></p>
            </div>
        </div>
	</div>
<?php include(TEMPLATE_FRONT.DS. "footer.php") ?>