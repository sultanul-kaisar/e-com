<?php require_once("../resources/config.php") ?>



<?php


if(isset($_GET['add'])) {


    $query = query("SELECT * FROM products WHERE product_id=" . escape_string($_GET['add']) . " ");
    confirm($query);

    while($row = fetch_array($query)) {


        if($row['product_quantity'] != $_SESSION['product_' . $_GET['add']]) {
            $_SESSION['product_' . $_GET['add']]+=1;
            redirect("checkout.php");

        } else {

            set_message("We only have" . $row['product_quantity'] . " " . " available");
            redirect("checkout.php");
        }
    }



    // $_SESSION['product_' . $_GET['add']] +=1;
    // redirect("index.php");



    
}


if(isset($_GET['remove'])) {

    $_SESSION['product_' . $_GET['remove']]--;
    
    if($_SESSION['product_' . $_GET['remove']] <1) {
        redirect("checkout.php");
    } else {

        redirect("checkout.php");
    }
}



if(isset($_GET['delete'])) {

    $_SESSION['product_' . $_GET['delete']] = 0;
    redirect("checkout.php");

}



function cart() {

    $query = query("SELECT * FROM products");
    confirm($query);

    while($row = fetch_array($query)){


        $product =<<<DELIMETER

        <tr>
            <td >
                <div >
                    <img src="img/shop-cart/cp-1.jpg" alt="">
                    <h6>{$row['product_title']}</h6>
                    <div >
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                </div>
            </td>
            <td >$ 150.0</td>
            <td >5</td>
            <td >$ 300.0</td>
            <td ><a class=" btn btn-warning" href="cart.php?remove={$row['product_id']}"><i class="fa fa-minus-circle" aria-hidden="true"></i></a> <a class=" btn btn-success" href="cart.php?add={$row['product_id']}"><i class="fa fa-plus-circle" aria-hidden="true"></i></a></td>
           
            <td ><a class=" btn btn-danger" href="cart.php?delete={$row['product_id']}"><span class="icon_close"></span></a></td>
        </tr>

        DELIMETER;

        echo $product;
    }


}





?>