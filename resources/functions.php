<?php require_once('config.php'); ?>
<?php

$upload_directory = "uploads";

$upload_path = "uploads";




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
    return mysqli_query($connection,$sql);
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

/**************** Get Frontend Products ***************/

function get_products(){

    $query = query("SELECT * FROM products");
    confirm($query);

    while($row = fetch_array($query)){
        $product = <<<DELIMETER

        <div class="col-lg-3 col-md-4 col-sm-6 mix women">
            <div class="product__item">
                <div class="product__item__pic set-bg" data-setbg="../resources/uploads/{$row['product_image']}">
                    <div class="label new">New</div>
                    <ul class="product__hover">
                        <li><a href="../resources/uploads/{$row['product_image']}" class="image-popup"><span class="arrow_expand"></span></a></li>
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
                <div class="product__item__pic set-bg" data-setbg="../resources/uploads/{$row['product_image']}">
                    <div class="label new">New</div>
                    <ul class="product__hover">
                        <li><a href="../resources/uploads/{$row['product_image']}" class="image-popup"><span class="arrow_expand"></span></a></li>
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

        $product_image = display_image($row['product_image']);

        $product = <<<DELIMETER

        <div class="col-lg-3 col-md-4 col-sm-6 mix women">
            <div class="product__item">
                <div class="product__item__pic set-bg" data-setbg="../resources/uploads/{$row['product_image']}">
                    <div class="label new">New</div>
                    <ul class="product__hover">
                        <li><a href="../resources/uploads/{$row['product_image']}" class="image-popup"><span class="arrow_expand"></span></a></li>
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


function item_view() {

    $query = query("SELECT * FROM products WHERE product_id = " .escape_string($_GET['id']) . " ");
    confirm($query);    

    while($row=fetch_array($query)) {

        $product = <<<DELIMETER

            <div class="col-lg-6">
                <div class="product__details__pic">
                    <div class="product__details__slider__content">
                        <div class="product__details__pic__slider owl-carousel">
                            <img data-hash="product-1" class="product__big__img" src="../resources/uploads/{$row['product_image']}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="product__details__text">
                    <h3>{$row['product_title']} <span>Brand: SKMEIMore Men Watches from SKMEI</span></h3>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <span>( 138 reviews )</span>
                    </div>
                    <div class="product__details__price">&#2547; {$row['product_price']} </div>
                    <p>{$row['short_desc']}</p>
                    <div class="product__details__button">
                        <a href="../resources/cart_function.php?add={$row['product_id']}" class="cart-btn"><span class="icon_bag_alt"></span> Add to cart</a>
                    </div>
                    <div class="product__details__widget">
                        <ul>
                            <li>
                                <span>Availability:</span>
                                <div class="stock__checkbox">
                                    <label for="stockin">
                                        In Stock
                                        <input type="checkbox" id="stockin">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </li>
                            <li>
                                <span>Available color:</span>
                                <div class="color__checkbox">
                                    <label for="red">
                                        <input type="radio" name="color__radio" id="red" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label for="black">
                                        <input type="radio" name="color__radio" id="black">
                                        <span class="checkmark black-bg"></span>
                                    </label>
                                    <label for="grey">
                                        <input type="radio" name="color__radio" id="grey">
                                        <span class="checkmark grey-bg"></span>
                                    </label>
                                </div>
                            </li>
                            <li>
                                <span>Available size:</span>
                                <div class="size__btn">
                                    <label for="xs-btn" class="active">
                                        <input type="radio" id="xs-btn">
                                        xs
                                    </label>
                                    <label for="s-btn">
                                        <input type="radio" id="s-btn">
                                        s
                                    </label>
                                    <label for="m-btn">
                                        <input type="radio" id="m-btn">
                                        m
                                    </label>
                                    <label for="l-btn">
                                        <input type="radio" id="l-btn">
                                        l
                                    </label>
                                </div>
                            </li>
                            <li>
                                <span>Promotions:</span>
                                <p>Free shipping</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="product__details__tab">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Description</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Specification</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">Reviews ( 2 )</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tabs-1" role="tabpanel">
                            <h6>Description</h6>
                            <p>{$row['product_description']}</p>
                        </div>
                        <div class="tab-pane" id="tabs-2" role="tabpanel">
                            <h6>Specification</h6>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut loret fugit, sed
                                quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt loret.
                                Neque porro lorem quisquam est, qui dolorem ipsum quia dolor si. Nemo enim ipsam
                                voluptatem quia voluptas sit aspernatur aut odit aut loret fugit, sed quia ipsu
                                consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Nulla
                            consequat massa quis enim.</p>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                                dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
                                nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium
                            quis, sem.</p>
                        </div>
                        <div class="tab-pane" id="tabs-3" role="tabpanel">
                            <h6>Reviews ( 2 )</h6>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut loret fugit, sed
                                quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt loret.
                                Neque porro lorem quisquam est, qui dolorem ipsum quia dolor si. Nemo enim ipsam
                                voluptatem quia voluptas sit aspernatur aut odit aut loret fugit, sed quia ipsu
                                consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Nulla
                            consequat massa quis enim.</p>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                                dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
                                nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium
                            quis, sem.</p>
                        </div>
                    </div>
                </div>
            </div>
        DELIMETER;

        echo $product;
    }
}



function login_user(){

        if(isset($_POST['submit'])){

            $username = ($_POST['username']);
            $password = ($_POST['password']);

            $username  = escape_string($username);
            $password  = escape_string(md5($password));
        
            
            
            $query = query("SELECT * FROM users WHERE username = '{$username}' AND password = '{$password}' ");
            confirm($query);
            
            if(mysqli_num_rows($query) == 0) {
            
                set_message("Your Password or Username are wrong");
                redirect("login.php");
            
        
            } else {
                $data = mysqli_fetch_assoc($query);

                


                $_SESSION['username']   = $data['username'];
                $_SESSION['user_id']    = $data['user_id'];
                $_SESSION['email']      = $data['email'];

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

            $username  = escape_string($username);
            $email     = escape_string($email);
            $password  = escape_string(md5($password));                  

            

            $query = "INSERT INTO users (username,email, password) VALUES ('$username', '$email', '$password')";
            mysqli_query($db,$query)or die ('Error in updating Database');

            $result = mysqli_query($db, $query);
            if($result)
            {
                echo "Registration successfully";
            }
                  
            
       }
}


/********************** Edit Profile ***********************/

function edit_profile() {


    if(isset($_POST['update'])){

        $firstName      = escape_string($_POST['firstName']);
        $lastName       = escape_string($_POST['lastName']);
        $street         = escape_string($_POST['street']);
        $city           = escape_string($_POST['city']);
        $state          = escape_string($_POST['state']);
        $postal_code    = escape_string($_POST['postal_code']);
        $country        = escape_string($_POST['country']);
        $mobile         = escape_string($_POST['mobile']);


        $photo = ($_FILES['file']['name']);
        $image_temp_location = ($_FILES['file']['tmp_name']);
        $final_destination = UPLOAD_DIRECTORY.DS.$photo;
        move_uploaded_file($image_temp_location ,$final_destination);

       
        $query=query("INSERT INTO profiles(firstName, lastName, street, city, state, postal_code, country, mobile, photo)VALUES('{$firstName}', '{$lastName}', '{$street}', '{$city}', '{$state}', '{$postal_code}', '{$country}', '{$mobile}', '{$photo}') WHERE user_id= {$_SESSION['user_id']} ");
        confirm($query);
        set_message("Profile Updated Successfully");
        redirect("profile.php");

    }
}

    



function send_message(){

    if(isset($_POST['submit'])){

         $to           = "s.kaisar.seu@gmail.com";
         $from_name    = ($_POST['name']);
         $from_email   = ($_POST['email']);
         $from_subject = ($_POST['subject']);
         $from_message = ($_POST['message']);
        
        $headers="From:{$from_name} {$from_email}";
        $result = mail($to,$from_subject,$from_message,$headers);
        
        if(!$result){
                set_message('Sorry we could not send your message');
                redirect("contact.php");
        } else{
            
            set_message('Your Message has been sent');
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

        
            $admin = ($_POST['admin']);
            $password = ($_POST['password']);

            $admin  = escape_string($admin);
            $password  = escape_string(md5($password));
            
            $query = query("SELECT * FROM admins WHERE admin = '{$admin}' AND password = '{$password}' ");
            confirm($query);

            // echo '<pre>';
            //     print_r(mysqli_num_rows($query));
            //     exit;
            
            if(mysqli_num_rows($query) == 0) {
            
                set_message("Your Password or Username are wrong");
                redirect("login.php");
            
        
            } else {
                $data = mysqli_fetch_assoc($query);

                


                $_SESSION['admin'] = $data['admin'];
                $_SESSION['name'] = $data['name'];
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
            <td><strong>{$row['id']}</strong></td>
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
                        <a class="dropdown-item" href="../../resources/templates/back/delete_order.php?id={$row['id']}">Delete</a>
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
            <td><a href="#"><img class="img-fluid" src="../../resources/{$product_image}" width="80px"</a></td>
            <td>{$category}</td>
            <td>{$row['product_price']}</td>
            <td>{$row['product_quantity']}</td>
            <td>
                <div class="dropdown">
                    <button type="button" class="btn btn-success light sharp" data-toggle="dropdown">
                        <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="edit.php?id={$row['product_id']}">Edit</a>
                        <a class="dropdown-item" href="../../resources/templates/back/delete_product.php?delete_product&id={$row['product_id']}">Delete</a>
                    </div>
                </div>
            </td>
        </tr>
        DELIMETER;


        echo $product;

    }



}

function last_id(){

   global $connection;
   return mysqli_insert_id($connection);  
}


/**************** ADD PRODUCTS IN ADMIN *******************/


function add_product(){


    if(isset($_POST['publish'])){

        $product_title         = escape_string($_POST['product_title']);
        $product_category_id   = escape_string($_POST['product_category_id']);
        $product_price         = escape_string($_POST['product_price']);
        $product_quantity      = escape_string($_POST['product_quantity']);
        $product_description   = escape_string($_POST['product_description']);
        $short_desc            = escape_string($_POST['short_desc']);


        $product_image = ($_FILES['file']['name']);
        $image_temp_location = ($_FILES['file']['tmp_name']);
        $final_destination = UPLOAD_DIRECTORY.DS.$product_image;
        move_uploaded_file($image_temp_location ,$final_destination);

       
        $query=query("INSERT INTO products(product_title,product_category_id,product_price,product_description,short_desc,product_quantity,product_image)VALUES('{$product_title}','{$product_category_id}','{$product_price}','{$product_description}','{$short_desc}','{$product_quantity}','{$product_image}')");
        $last_id=last_id();
        confirm($query);
        set_message("New Product with id : {$last_id}  was Added");
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




/**************** Update PRODUCTS IN ADMIN *******************/


function update_product(){
    

    if(isset($_POST['update'])){

        $product_title         = escape_string($_POST['product_title']);
        $product_category_id   = escape_string($_POST['product_category_id']);
        $product_price         = escape_string($_POST['product_price']);
        $product_quantity      = escape_string($_POST['product_quantity']);
        $product_description   = escape_string($_POST['product_description']);
        $short_desc            = escape_string($_POST['short_desc']);

       
        $product_image = $_FILES['file']['name'];
        $image_temp_location = $_FILES['file']['tmp_name'];
        $final_destination = UPLOAD_DIRECTORY.DS.$product_image;
        move_uploaded_file($image_temp_location , $final_destination);

            

        if(empty($product_image))
        {
            $get_pic = query("SELECT product_image FROM products WHERE product_id =" .escape_string($_GET['id'])."");
            confirm($get_pic);
            $row = fetch_array($get_pic);
            $product_image = $row['product_image'];
        }

          // echo '<pre>';
          //   print_r(empty($query));
          //   exit;  
        
        $query = query("UPDATE products SET product_title = '" . $_POST['product_title'] . "', product_category_id = '" . $_POST['product_category_id'] . "', product_price = '" . $_POST['product_price'] . "', product_quantity = '" . $_POST['product_quantity'] . "', product_description = '" . $_POST['product_description'] . "', short_desc = '" . $_POST['short_desc'] . "', product_image = '" . $_POST['product_image'] . "' WHERE product_id = ".escape_string($_GET['id'])." ");
        
        $result = mysqli_query($query);
        set_message("Products has been updated !");
        redirect("index.php?products");

    } else {
        set_message("Product Update Failed");
    }

}



/**************** CATEGORIES IN ADMIN *******************/



function categories_in_admin() {

    $query = query("SELECT * FROM categories");
    confirm($query);


    while($row= fetch_array($query)){

        $category = <<<DELIMETER

        <tr>
            <td><strong>{$row['cat_id']}</strong></td>
            <td>{$row['cat_title']}</td>            
            <td>
                <div class="dropdown">
                    <button type="button" class="btn btn-success light sharp" data-toggle="dropdown">
                        <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
                    </button>
                    <div class="dropdown-menu">
                        
                        <a class="dropdown-item" href="edit_category.php?id={$row['cat_id']}">Edit</a>

                        <a class="dropdown-item" href="../../resources/templates/back/delete_category.php?delete_category&id={$row['cat_id']}">Delete</a>
                    </div>
                </div>
            </td>
        </tr>
        DELIMETER;


        echo $category;

    }


}




/**************** ADD CATEGORY IN ADMIN *******************/


function add_category() {


    if(isset($_POST['submit'])) {


        $cat_title = escape_string($_POST['cat_title']);


        $query = query("INSERT INTO categories(cat_title) VALUES('{$cat_title}') ");
        
        confirm($query);
        set_message("New Category is Added Successfully");
        redirect("index.php?categories");


        }


}



/****************** Update Category *******************/

function update_category(){

    if(isset($_POST['update'])){

        $cat_title  = escape_string($_POST['cat_title']);
        

            
        
        $query = query("UPDATE categories SET cat_title = '" . $_POST['cat_title'] . "' WHERE cat_id= ". escape_string($_GET['id']) ." ");


        $result = mysqli_query($query);
        set_message("Category has been updated !");
        redirect("index.php?categories");

    } else {
        set_message("Category Update Failed");
    }

}






/****************** Users In Admin *********************/

function users_in_admin() {

$query = query("SELECT * FROM users");
    confirm($query);


    while($row = fetch_array($query)){

        $user_id    = $row['user_id'];
        $username   = $row['username'];
        $email      = $row['email'];

        $user = <<<DELIMETER

        <tr>
            <td><strong>{$row['user_id']}</strong></td>
            <td>{$row['username']}</td>
            <td>{$email}</td>
            <td>
                <div class="dropdown">
                    <button type="button" class="btn btn-success light sharp" data-toggle="dropdown">
                        <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="../../resources/templates/back/delete_user.php?delete_user&id={$row['user_id']}">Delete</a>
                    </div>
                </div>
            </td>
        </tr>
        DELIMETER;


        echo $user;

    }


}












?>