<div class="col-xl-6 col-lg-7">
    <nav class="header__menu">
        <ul>
            <li ><a href="index.php">Home</a></li>
            <li >
                <?php
                    get_categories();
                    ?>                        
            </li>
            <!-- <li><a href="./blog.html">Blog</a></li> -->
            <li ><a href="contact.php">Contact</a></li>
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
                    <li><a href="logout.php">Sign Out</a></li>
                </ul>
            </li>

        <?php } else { ?>
            <a href="login.php">Login /</a>
            <a href="register.php">Register</a>

        <?php } ?>

           <!--  <li><span class="icon_search search-switch"></span></li>
            <li><a href="#"><span class="icon_heart_alt"></span>
                    <div class="tip">2</div>
                </a></li> -->
            <li class="ml-3"><a href="cart.php"><span class="icon_bag_alt"></span>
                    <div class="tip"></div>
                </a></li>
        </ul>
    </div>
</div>