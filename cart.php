<?php require_once("resources/config.php") ?>

<?php include(TEMPLATE_FRONT.DS. "header.php") ?>






    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <h4 class="text-center bg-danger"><?php display_message(); ?></h4>
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="index.php"><i class="fa fa-home"></i> Home</a>
                        <span>Checkout</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <section class="shop-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shop__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Image</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php cart(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="cart__btn">
                        <a href="index.php">Continue Shopping</a>
                    </div>

                    <div class="col-lg-6">
                        <div class="discount__content">
                            <h6>Discount codes</h6>
                            <form action="#">
                                <input type="text" placeholder="Enter your coupon code">
                                <button type="submit" class="site-btn">Apply</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="cart__total__procced">
                        <h6>Cart total</h6>
                        <ul>
                            <li>Items <span><?php echo isset($_SESSION['item_quantity']) ? $_SESSION['item_quantity'] : $_SESSION['item_quantity'] = "0"; ?></span></li>
                            <li>Total <span>&#2547; <?php echo isset($_SESSION['item_total']) ? $_SESSION['item_total'] : $_SESSION['item_total'] = "0"; ?> 
                            </span></li>
                        </ul>
                        <a href="checkout.php" class="primary-btn">Proceed to checkout</a>
                    </div>       
                </div>
            </div>
        </div>
    </section>

       

        <?php include(TEMPLATE_FRONT.DS. "footer.php") ?>
