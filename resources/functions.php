<?php


//helper functions

function set_message($msg){

    if (!empty($msg)) {
        $_SESSION['message'] = $msg;
    } else {
        $msg = "";

    }
}


function display_message(){

    if (isset($_SESSION['message'])) {

        echo $_SESSION['message'];
        unset($_SESSION['message']);
        
    }
}


function redirect($location){

    header("Location: $location");
}

function query($sql){

    global $connection;

    return mysqli_query($connection, $sql);
}

function confirm($result){

    global $connection;

    if(!$result){

        die("QUERY_FAILED " . mysqli_error($connection));
    }
}


function escape_string($string){

    global $connection;

    return mysqli_real_escape_string($connection, $string);
}

function fetch_array($result){

    return mysqli_fetch_array($result);
}

/*****************FRONT END FUNCTIONS*****************/

//get products

function get_products(){

    $query = query("SELECT * FROM products");
    confirm($query);

    while($row = fetch_array($query)){
        $product = <<<DELIMETER

        <div class="col-lg-3 col-md-4 col-sm-6 mix women">
            <div class="product__item">
                <div class="product__item__pic set-bg" data-setbg="img/product/product-1.jpg">
                    <div class="label new">New</div>
                    <ul class="product__hover">
                        <li><a href="img/product/product-1.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                        <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                        <li><a target="_blank" href="../resources/cart_function.php?add={$row['product_id']}"><span class="icon_bag_alt"></span></a></li>
                    </ul>
                </div>
                <div class="product__item__text">
                    <h5><a href="item.php?id={$row['product_id']}">{$row['product_title']}</a></h5>
                    <h6>{$row['short_desc']} </h6>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <div class="product__price">&#2547;{$row['product_price']}</div>
                </div>
            </div>
        </div>

        DELIMETER;

        echo $product;
    
    }

}


function get_categories(){

    $query = query("SELECT * FROM categories");
    confirm($query);


    while($row = fetch_array($query)){

        $categories_links =  <<<DELIMETER

        <li><a href='category.php?id={$row['cat_id']}'>{$row['cat_title']}</a></li>
        DELIMETER;
        
        echo $categories_links;

    }

}



function get_products_in_cat_page(){

    $query = query("SELECT * FROM products WHERE product_category_id = " .escape_string($_GET['id']) . " ");
    confirm($query);

    while($row = fetch_array($query)){
        $product = <<<DELIMETER

        <div class="col-lg-3 col-md-4 col-sm-6 mix women">
            <div class="product__item">
                <div class="product__item__pic set-bg" data-setbg="img/product/product-1.jpg">
                    <div class="label new">New</div>
                    <ul class="product__hover">
                        <li><a href="img/product/product-1.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                        <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                        <li><a target="_blank" href="../resources/cart_function.php?add={$row['product_id']}"><span class="icon_bag_alt"></span></a></li>
                    </ul>
                </div>
                <div class="product__item__text">
                    <h5><a href="item.php?id={$row['product_id']}">{$row['product_title']}</a></h5>
                    <h6>{$row['short_desc']} </h6>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <div class="product__price">&#2547;{$row['product_price']}</div>
                </div>
            </div>
        </div>

        DELIMETER;

        echo $product;
    
    }

}



function get_products_in_shop_page(){

    $query = query("SELECT * FROM products");
    confirm($query);

    while($row = fetch_array($query)){
        $product = <<<DELIMETER

        <div class="col-lg-3 col-md-4 col-sm-6 mix women">
            <div class="product__item">
                <div class="product__item__pic set-bg" data-setbg="img/product/product-1.jpg">
                    <div class="label new">New</div>
                    <ul class="product__hover">
                        <li><a href="img/product/product-1.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                        <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                        <li><a target="_blank" href="../resources/cart_function.php?add={$row['product_id']}"><span class="icon_bag_alt"></span></a></li>
                    </ul>
                </div>
                <div class="product__item__text">
                    <h5><a href="item.php?id={$row['product_id']}">{$row['product_title']}</a></h5>
                    <h6>{$row['short_desc']} </h6>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <div class="product__price">&#2547;{$row['product_price']}</div>
                </div>
            </div>
        </div>

        DELIMETER;

        echo $product;
    
    }

}



function login_user(){

        if(isset($_POST['submit'])){
        
            $username = escape_string($_POST['username']);
            $password = escape_string($_POST['password']);
            
            $query = query("SELECT * FROM users WHERE username = '{$username}' AND password = '{$password }'  AND type = 3");
            confirm($query);
            
            if(mysqli_num_rows($query) == 0) {
            
                set_message("Your Password or Username are wrong");
                redirect("login.php");
            
        
            } else {
                $data = mysqli_fetch_assoc($query);

                


                $_SESSION['username'] = $data['username'];
                $_SESSION['user_id'] = $data['user_id'];

                // echo '<pre>';
                // print_r($_SESSION);
                // exit;

                redirect("index.php");
    
            }  
        
        }   
    }



function register_user(){

    $db = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

        if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $options = array("cost"=>4);
            $hashPassword = password_hash($password, PASSWORD_BCRYPT,$options);         

            

            $query = "INSERT INTO users (username,email, password) VALUES ('$username', '$email', '$hashPassword')";
            mysqli_query($db,$query)or die ('Error in updating Database');

            $result = mysqli_query($db, $query);
            if($result)
            {
                echo "Registration successfully";
            }
                  
            
       }
}

    



function send_message(){

    if (isset($_POST['submit'])) {
        
        $to = "s.kaisar.seu@gmail.com";
        $from_name = $_POST['name'];
        $subject = $_POST['subject'];
        $email = $_POST['email'];
        $message = $_POST['message'];


        $headers = "FROM: {$from_name} {$email}";
        
        $result = mail($to, $subject, $message, $headers);

        if (!$result) {

            set_message("Sorry your message couldn't sent. Try again");
            redirect("contact.php");
        } else {

            set_message("Your message successfuly sent.");
            redirect("contact.php");
        }

    }
}








/*****************BACK END FUNCTIONS*****************/




function login_admin(){

    // echo "<pre>";
    // print_r($_POST);
    // exit;

        if(isset($_POST['submit'])){

        
            $username = escape_string($_POST['username']);
            $password = escape_string($_POST['password']);
            
            $query = query("SELECT * FROM users WHERE username = '{$username}' AND password = '{$password }'  AND type != 3");
            confirm($query);

            // echo '<pre>';
            //     print_r(mysqli_num_rows($query));
            //     exit;
            
            if(mysqli_num_rows($query) == 0) {
            
                set_message("Your Password or Username are wrong");
                redirect("login.php");
            
        
            } else {
                $data = mysqli_fetch_assoc($query);

                


                $_SESSION['username'] = $data['username'];
                $_SESSION['firstName'] = $data['firstName'];
                $_SESSION['user_id'] = $data['user_id'];

                

                redirect("index.php?dashboard");
    
            }  
        
        }   
    }





function display_orders() {

    $query = query("SELECT * FROM orders");
    confirm($query);


    while($row = fetch_array($query)){

        $orders = <<<DELIMETER

        <tr>
            <td><strong>{$row['order_id']}</strong></td>
            <td>{$row['amount']}</td>
            <td>{$row['transaction_id']}</td>
            <td>{$row['currency']}</td>
            <td>{$row['status']}</td>
            <td>
                <div class="dropdown">
                    <button type="button" class="btn btn-success light sharp" data-toggle="dropdown">
                        <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Edit</a>
                        <a class="dropdown-item" href="../../resources/templates/back/delete_order.php?id={$row['order_id']}">Delete</a>
                    </div>
                </div>
            </td>
        </tr>
        DELIMETER;


        echo $orders;

    }
}










?>