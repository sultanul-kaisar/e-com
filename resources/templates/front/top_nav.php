<div class="col-xl-6 col-lg-7">
    <nav class="header__menu">
        <ul>
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="#">Category</a>
                <ul class="dropdown">
                    <?php

                    get_categories();
                    ?>
                </ul>
            </li>
            <li><a href="#">Women's</a></li>
            <li><a href="#">Men's</a></li>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="#">Pages</a>
                <ul class="dropdown">
                    <li><a href="./product-details.html">Product Details</a></li>
                    <li><a href="shop-cart.php">Shop Cart</a></li>
                    <li><a href="./blog-details.html">Blog Details</a></li>
                </ul>
            </li>
            <li><a href="./blog.html">Blog</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
</div>
<div class="col-lg-3">
    <div class="header__menu">        
        <ul class="header__right__widget">
            <?php
                if(isset($_SESSION['username'])){
            ?>
            <li><a href="#"><?php 

            echo $_SESSION['username'];?></a>
                <ul class="dropdown">
                    <li><a href="profile.php">Profile</a></li>
                    <li><a href="logout.php">LOGOUT</a></li>
                </ul>
            </li>

        <?php } else { ?>
            <a href="login.php">Login /</a>
            <a href="register.php">Register</a>

        <?php } ?>

            <li><span class="icon_search search-switch"></span></li>
            <li><a href="#"><span class="icon_heart_alt"></span>
                    <div class="tip">2</div>
                </a></li>
            <li><a href="cart.php"><span class="icon_bag_alt"></span>
                    <div class="tip">2</div>
                </a></li>
        </ul>
    </div>
</div>