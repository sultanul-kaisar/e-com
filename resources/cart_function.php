<?php require_once("config.php") ?>



<?php


if(isset($_GET['add'])) {


    $query = query("SELECT * FROM products WHERE product_id=" . escape_string($_GET['add']) . " ");
    confirm($query);

    while($row = fetch_array($query)) {


        if($row['product_quantity'] != $_SESSION['product_' . $_GET['add']]) {
            $_SESSION['product_' . $_GET['add']]+=1;
            redirect("../public/cart.php");

        } else {

            set_message("We only have" . " " . $row['product_quantity'] . " " . " available");
            redirect("../public/cart.php");
        }
    }



    // $_SESSION['product_' . $_GET['add']] +=1;
    // redirect("index.php");



    
}


if(isset($_GET['remove'])) {

    $_SESSION['product_' . $_GET['remove']]--;
    
    if($_SESSION['product_' . $_GET['remove']] <1) {
        unset($_SESSION['item_total']);
        unset($_SESSION['item_quantity']);
        redirect("../public/cart.php");
    } else {

        redirect("../public/cart.php");
    }
}



if(isset($_GET['delete'])) {

    $_SESSION['product_' . $_GET['delete']] = 0;
    unset($_SESSION['item_total']);
    unset($_SESSION['item_quantity']);

    redirect("../public/cart.php");

}



function cart() {

    $total = 0;
    $item_quantity = 0;
    $item_name = 1;
    $item_number = 1;
    $amount = 1;
    $quantity = 1;
    
    foreach ($_SESSION as $name => $value){

        if ($value >0) {

            if(substr($name, 0, 8) == "product_") {

                // $length = strlen($name - 8);

                $id = substr($name, 8);


                $query = query("SELECT * FROM products WHERE product_id = " . escape_string($id). "");
                confirm($query);

                while ($row = fetch_array($query)) {

                    $sub = $row['product_price'] * $value;

                    $item_quantity += $value;

                    $product =<<<DELIMETER

                    <tr>
                        <td >{$row['product_title']}</td>
                        <td><img src="../resources/uploads/{$row['product_image']}" width="80" alt=""></td>                        
                        <td >&#2547; {$row['product_price']}</td>
                        <td >{$value}</td>
                        <td >&#2547; {$sub}</td>
                        <td ><a class=" btn btn-warning" href="../resources/cart_function.php?remove={$row['product_id']}"><i class="fa fa-minus-circle" aria-hidden="true"></i></a> <a class=" btn btn-success" href="../resources/cart_function.php?add={$row['product_id']}"><i class="fa fa-plus-circle" aria-hidden="true"></i></a></td>
                    
                        <td ><a class=" btn btn-danger" href="../resources/cart_function.php?delete={$row['product_id']}"><span class="icon_close"></span></a></td>
                    </tr>

                    DELIMETER;

                    echo $product;

                    $item_name++;
                    $item_number++;
                    $amount++;
                    $quantity++;
                    
                }

                $_SESSION['item_total'] = $total += $sub;
                $_SESSION['item_quantity'] = $item_quantity;
            }
        }


    }

    


}





function checkout(){
    $total = 0;
    $item_quantity = 0;
    $item_name = 1;
    $item_number = 1;
    $amount = 1;
    $quantity = 1;
    
    foreach ($_SESSION as $name => $value){

        if ($value >0) {

            if(substr($name, 0, 8) == "product_") {

                // $length = strlen($name - 8);

                $id = substr($name, 8);


                $query = query("SELECT * FROM products WHERE product_id = " . escape_string($id). "");
                confirm($query);

                while ($row = fetch_array($query)) {

                    $sub = $row['product_price'] * $value;

                    $item_quantity += $value;

                    $product =<<<DELIMETER

                        <li>{$row['product_title']}<span>&#2547; {$sub}</span></li>                        

                    DELIMETER;

                    echo $product;

                    $item_name++;
                    $item_number++;
                    $amount++;
                    $quantity++;
                    
                }

                $_SESSION['item_total'] = $total += $sub;
                $_SESSION['item_quantity'] = $item_quantity;
            }
        }


    }

    

}





?>