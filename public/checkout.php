<?php require_once("../resources/config.php"); ?>

<?php include(TEMPLATE_FRONT.DS. "header.php"); ?>
<?php 

	if (!isset($_SESSION['user_id'])) {
		redirect("login.php");
	}

 ?>

<?php
	$query1 = query("SELECT * FROM profiles WHERE user_id = " . $_SESSION['user_id']);
	$profile = mysqli_fetch_assoc($query1);

	$query2 = query("SELECT * FROM users WHERE user_id = {$_SESSION['user_id']}");
	$user = mysqli_fetch_assoc($query2);

	// echo "<pre>";
	// print_r($profile);
	// echo "<br/";
	// print_r($user);
	// exit
?>


<!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6 class="coupon__link"><span class="icon_tag_alt"></span> <a href="#">Have a coupon?</a> Click
                    here to enter your code.</h6>
                </div>
            </div>
            <form method="post" action="payment.php?price=<?php echo isset($_SESSION['item_total']) ? $_SESSION['item_total'] : $_SESSION['item_total'] = "0"; ?>" class="checkout__form">
                <div class="row">
                    <div class="col-lg-8">
                        <h5>Shipping Address</h5>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="checkout__form__input">
                                    <p>First Name <span>*</span></p>
                                    <input type="text" name="firstName" value="<?php
                                    if(empty($profile['firstName'])) {
                                        echo "";                                
                                        } else {
                                          echo $profile['firstName'];  
                                    } ?>" placeholder="Enter your First Name!">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="checkout__form__input">
                                    <p>Last Name <span>*</span></p>
                                    <input type="text" name="lastName" value="<?php
                                    if(empty($profile['lastName'])) {
                                        echo "";                                
                                        } else {
                                          echo $profile['lastName'];  
                                    } ?>" placeholder="Edit your Last Name!">
                                </div>
                            </div>
                            <div class="col-lg-12">
                            	<div class="checkout__form__input">
                                    <p>Street <span>*</span></p>
                                    <input type="text" name="cus_street" value="<?php
                                    if(empty($profile['street'])) {
                                        echo "";                                
                                        } else {
                                          echo $profile['street'];  
                                    } ?>" placeholder="Edit your street address!">
                                </div>
                            </div>  
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="checkout__form__input">
                                    <p>Town/City <span>*</span></p>
                                    <input type="text" name="cus_city" value="<?php
                                    if(empty($profile['city'])) {
                                        echo "";                                
                                        } else {
                                          echo $profile['city'];  
                                    } ?>" placeholder="Edit your city!">
                                </div>
                            </div>  
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="checkout__form__input">
                                    <p>State <span>*</span></p>
                                    <input type="text" name="cus_state" value="<?php
                                    if(empty($profile['state'])) {
                                        echo "";                                
                                        } else {
                                          echo $profile['state'];  
                                    } ?>" placeholder="Edit your state!">
                                </div>
                            </div>  
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="checkout__form__input">
                                    <p>Country <span>*</span></p>
                                    <input type="text" name="cus_country" value="<?php
                                    if(empty($profile['country'])) {
                                        echo "";                                
                                        } else {
                                          echo $profile['country'];  
                                    } ?>" placeholder="Enter your country!">
                                </div>
                            </div>  
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="checkout__form__input">
                                    <p>Postcode/Zip <span>*</span></p>
                                    <input type="text" name="postcode" value="<?php
                                    if(empty($profile['postal_code'])) {
                                        echo "";                                
                                        } else {
                                          echo $profile['postal_code'];  
                                    } ?>" placeholder="Enter your Postcode!">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="checkout__form__input">
                                    <p>Phone <span>*</span></p>
                                    <input type="text" name="cus_phone" value="<?php
                                if(empty($profile['mobile'])) {
                                    echo "";                                
                                    } else {
                                      echo $profile['mobile'];  
                                    } ?>" placeholder="Enter your First Name!">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="checkout__form__input">
                                    <p>Email <span>*</span></p>
                                    <input type="text" name="email" value="<?php echo $user['email'] ?>">
                                </div>
                            </div>
                       		<!-- <div class="col-lg-12">
                                <div class="checkout__form__checkbox">
                                    <label for="acc">
                                        Create an acount?
                                        <input type="checkbox" id="acc">
                                        <span class="checkmark"></span>
                                    </label>
                                    <p>Create am acount by entering the information below. If you are a returing
                                        customer login at the <br />top of the page</p>
                                    </div>
                                    <div class="checkout__form__input">
                                        <p>Account Password <span>*</span></p>
                                        <input type="text">
                                    </div>
                                    <div class="checkout__form__checkbox">
                                        <label for="note">
                                            Note about your order, e.g, special noe for delivery
                                            <input type="checkbox" id="note">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="checkout__form__input">
                                        <p>Oder notes <span>*</span></p>
                                        <input type="text"
                                        placeholder="Note about your order, e.g, special noe for delivery">
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="checkout__order">
                                <h5>Your order</h5>
                                <div class="checkout__order__product">
		                            <ul>
		                                <li>
		                                    <span class="top__text">Product</span>
		                                    <span class="top__text__right">Total</span>
		                                    <?php checkout(); ?>
		                                </li>                                
                            		</ul>
                        		</div>
                                

	                            <div class="checkout__order__total">
		                            <ul>
		                                <li>Subtotal <span>&#2547; <?php echo isset($_SESSION['item_total']) ? $_SESSION['item_total'] : $_SESSION['item_total'] = "0"; ?> </span></li>
		                            </ul>
		                        </div>

                                
                                <button type="submit" class="site-btn">Place oder</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!-- Checkout Section End -->

<?php include(TEMPLATE_FRONT.DS. "footer.php") ?>
