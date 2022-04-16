<?php require_once("../resources/config.php") ?>

<?php include(TEMPLATE_FRONT.DS. "header.php") ?>


   
    <div class="col-lg-4 col-md-4" style="margin:auto; text-align: center">
        <div class="contact__content">                        
            <div class="contact__form" style="margin-top: 50px;">
                <h4 class="color-primary font-weight-semibold text-4 text-uppercase mb-3">Register An Account</h4>
				<h2><?php display_message(); ?></h2>
				<form action=""  method="post">

					<?php register_user(); ?>

					
					<div class="form-row">
						<div class="form-group col-lg-6">
							<label class="font-weight-bold text-dark text-2">Username</label>
							<input type="text" name="username" value="" placeholder="Enter your username" class="form-control form-control-lg" required >
						</div>

						<div class="form-group col-lg-6">
							<label class="font-weight-bold text-dark text-2">E-mail Address</label>
							<input type="email" name="email" value="" placeholder="Enter your E-mail address" class="form-control form-control-lg" required >
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-lg-6">
							<label class="font-weight-bold text-dark text-2">Password</label>
							<input type="password" name="password"  value="" class="form-control form-control-lg"  >
						</div>
						<div class="form-group col-lg-6">
							<label class="font-weight-bold text-dark text-2">Re-enter Password</label>
							<input type="password" name="confirmpassword"  value="" class="form-control form-control-lg"  >
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-lg-12">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="terms" required >
								<label class="custom-control-label text-2" for="terms">I have read and agree to the <a href="#">terms of service</a></label>
							</div>
						</div>
						<div class="form-group col-lg-4" style="margin:auto;">
							<input type="submit" name="submit" value="Register" class="btn btn-primary float-right" data-loading-text="Loading...">
						</div>
					</div>
				</form>
				<p>Have an Account? <a href="login.php"> Login Now!</a></p>
            </div>
        </div>
	</div>



<?php include(TEMPLATE_FRONT.DS. "footer.php") ?>



