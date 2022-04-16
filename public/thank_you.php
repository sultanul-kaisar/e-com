<?php require_once("../resources/config.php") ?>

<?php include(TEMPLATE_FRONT.DS. "header.php") ?>

<?php 






?>
   

    <section class="shop-cart spad">
        <div class="container">
            
        <h1 class="text-center">Thank You for shopping with us! </h1>

            
        </div>
    </section>

<?php

    if (isset($_GET['tran_id'])) {
        
        $amount = $_GET['amount'];
        $tran_date = $_GET['tran_date'];
        $tran_id = $_GET["tran_id"];
        $status = $_GET["status"];



        $query = query("INSERT INTO orders (amount, transaction_id, status, order_date, currency) VALUES('$amount', '$tran_id', '$status', '$tran_date', 'BDT')");

        confirm($query);

        session_destroy();


    } else {

        redirect("index.php");

    }
?>

       

<?php include(TEMPLATE_FRONT.DS. "footer.php") ?>
