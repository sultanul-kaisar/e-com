<?php require_once("resources/config.php"); ?>

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
            <form method="post" action="payment.php" class="checkout__form">
                <div class="row">
                    <div class="col-lg-8">
                        <h5>Shipping Address</h5>
                        <div class="row">
                            <div class="col-lg-12 ">
                                <div class="checkout__form__input">
                                    <p>Full name <span>*</span></p>
                                    <input type="text" id="customer_name" name="customer_name" placeholder="Enter your Full Name!" required>
                                </div>
                            </div>

                            <div class="col-lg-4 ">
                                <div class="checkout__form__input">
                                    <p>Phone <span>*</span></p>
                                    <input type="text" id="mobile" name="customer_mobile" placeholder="Enter your mobile number" required>
                                </div>
                            </div>

                            <div class="col-lg-8">
                                <div class="checkout__form__input">
                                    <p>Email <span>*</span></p>
                                    <input type="email" id="email" name="customer_email" placeholder="Enter your email address" required>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="checkout__form__input">
                                    <p>Address <span>*</span></p>
                                    <input type="text" name="customer_address" id="address" placeholder="Enter your address" required>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="checkout__form__input">
                                    <p>Address 2 <span>Optional</span></p>
                                    <input type="text" name="customer_address2" id="address2" placeholder="Apartment or suit">
                                </div>
                            </div> 

                            <div class="col-lg-6">
                                <div class="checkout__form__input">
                                    <p>City <span>*</span></p>
                                    <input type="text" name="customer_city" id="city" placeholder="Enter your city!" required>
                                </div>
                            </div> 

                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="checkout__form__input">
                                    <p>State <span>*</span></p>
                                    <select class="custom-select d-block w-100" name="customer_state" id="state" required>
                                        <option value="">Choose...</option>
                                        <option value="Dhaka">Dhaka</option>
                                        <option value="Rajshahi">Rajshahi</option>
                                        <option value="Chittagong">Chittagong</option>
                                    </select>
                                </div>
                            </div> 
                              
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="checkout__form__input">
                                    <p>Country <span>*</span></p>
                                    <select class="custom-select d-block w-100" name="customer_country" id="country" required>
                                        <option value="">Choose...</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="checkout__form__input">
                                    <p>Zip/Post Code <span>*</span></p>
                                    <input type="text" name="cus_postcode" id="zip" name="" placeholder="Enter your Zip/Post code!" required>
                                </div>
                            </div> 

                            <!-- <div class="custom-control custom-checkbox col-lg-8 col-md-8 col-sm-8" style="margin-left: 20px;">
                                <input type="checkbox" class="custom-control-input" id="same-address">
                                <label class="custom-control-label" for="same-address">Shipping address is the same as my billing
                                    address</label>
                            </div> -->
                           <!--  <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="save-info">
                                <label class="custom-control-label" for="save-info">Save this information for next time</label>
                            </div>  -->                      		
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
                                <input type="hidden" value="<?php echo isset($_SESSION['item_total']) ? $_SESSION['item_total'] : $_SESSION['item_total'] = "0"; ?>" name="amount" id="total_amount" required/>
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
