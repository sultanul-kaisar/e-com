<?php

$upload_directory = "uploads";


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
                <div class="product__item__pic set-bg" data-setbg="{$row['product_image']}">
                    <div class="label new">New</div>
                    <ul class="product__hover">
                        <li><a href="{$row['product_image']}" class="image-popup"><span class="arrow_expand"></span></a></li>
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
                <div class="product__item__pic set-bg" data-setbg="{$row['product_image']}">
                    <div class="label new">New</div>
                    <ul class="product__hover">
                        <li><a href="{$row['product_image']}" class="image-popup"><span class="arrow_expand"></span></a></li>
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
                <div class="product__item__pic set-bg" data-setbg="{$row['product_image']}">
                    <div class="label new">New</div>
                    <ul class="product__hover">
                        <li><a href="{$row['product_image']}" class="image-popup"><span class="arrow_expand"></span></a></li>
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








/***************** BACK END FUNCTIONS *****************/




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


/************************ Admin Orders Page *******************/


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






/************************ Admin Products *******************/

function display_image($picture) {

global $upload_directory;

return $upload_directory  . DS . $picture;



}


function products_in_admin() {

$query = query("SELECT * FROM products");
    confirm($query);


    while($row = fetch_array($query)){

        $category = show_category_title($row['product_category_id']);

        $product_image = display_image($row['product_image']);

        $product = <<<DELIMETER

        <tr>
            <td><strong>{$row['product_id']}</strong></td>
            <td>{$row['product_title']}</td>
            <td><a href="edit.php?id={$row['product_id']}"><img class="img-fluid" src="../../resources/{$product_image}" width="80px"</a></td>
            <td>{$category}</td>
            <td>{$row['product_price']}</td>
            <td>{$row['product_quantity']}</td>
            <td>
                <div class="dropdown">
                    <button type="button" class="btn btn-success light sharp" data-toggle="dropdown">
                        <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Edit</a>
                        <a class="dropdown-item" href="../../resources/templates/back/delete_product.php?delete_product&id={$row['product_id']}">Delete</a>
                    </div>
                </div>
            </td>
        </tr>
        DELIMETER;


        echo $product;

    }


}


/**************** ADD PRODUCTS IN ADMIN *******************/


function add_product() {


    if(isset($_POST['publish'])) {


        $product_title          = escape_string($_POST['product_title']);
        $product_category_id    = escape_string($_POST['product_category_id']);
        $product_price          = escape_string($_POST['product_price']);
        $product_description    = escape_string($_POST['product_description']);
        $short_desc             = escape_string($_POST['short_desc']);
        $product_quantity       = escape_string($_POST['product_quantity']);
        $product_image          = escape_string($_FILES['file']['name']);
        $image_temp_location    = escape_string($_FILES['file']['tmp_name']);

        move_uploaded_file($image_temp_location  , UPLOAD_DIRECTORY . DS . $product_image);


        $query = query("INSERT INTO products(product_title, product_category_id, product_price, product_description, short_desc, product_quantity, product_image) VALUES('{$product_title}', '{$product_category_id}', '{$product_price}', '{$product_description}', '{$short_desc}', '{$product_quantity}', '{$product_image}')");
        
        confirm($query);
        set_message("New Product is Added successfully");
        redirect("index.php?products");


        }


}




function show_category_name(){


$query = query("SELECT * FROM categories");
confirm($query);

while($row = fetch_array($query)) {


$categories_options = <<<DELIMETER

 <option value="{$row['cat_id']}">{$row['cat_title']}</option>


DELIMETER;

echo $categories_options;

     }



}



function show_category_title($product_category_id) {

    $category_query = query("SELECT * FROM categories WHERE cat_id = '{$product_category_id}' ");
    confirm($category_query);

    while($category_row = fetch_array($category_query)) {
        return $category_row['cat_title'];
    }


}









?>