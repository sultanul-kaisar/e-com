<?php require_once("../resources/config.php"); ?>


<section class="shop-cart spad">

    <div class="container">
        
        <h1 class="text-center">Successfuly payment done. Thank You for shopping with us! </h1>

    </div>
</section>

    <?php
    require_once(__DIR__ . "/lib/SslCommerzNotification.php");
    include_once(__DIR__ . "/OrderTransaction.php");

    use SslCommerz\SslCommerzNotification;

    $sslc = new SslCommerzNotification();
    $tran_id = $_POST['tran_id'];
    $amount =  $_POST['amount'];
    $currency =  $_POST['currency'];

    $ot = new OrderTransaction();
    $sql = $ot->getRecordQuery($tran_id);
    $result = $conn_integration->query($sql);
    $row = $result->fetch_array(MYSQLI_ASSOC);

    if ($row['status'] == 'Pending' || $row['status'] == 'Processing') {
        $validated = $sslc->orderValidate($tran_id, $amount, $currency, $_POST);

        if ($validated) {
            $sql = $ot->updateTransactionQuery($tran_id, 'Processing');

            if ($conn_integration->query($sql) === TRUE) { ?>
                <h2 class="text-center text-success">Congratulations! Your Transaction is Successful.</h2>
                <br>
                <table border="1" class="table table-striped">
                    <thead class="thead-dark">
                        <tr class="text-center">
                            <th colspan="2">Payment Details</th>
                        </tr>
                    </thead>
                    <tr>
                        <td class="text-right">Transaction ID</td>
                        <td><?= $_POST['tran_id'] ?></td>
                    </tr>
                    <tr>
                        <td class="text-right">Transaction Time</td>
                        <td><?= $_POST['tran_date'] ?></td>
                    </tr>
                    <tr>
                        <td class="text-right">Payment Method</td>
                        <td><?= $_POST['card_issuer'] ?></td>
                    </tr>
                    <tr>
                        <td class="text-right">Bank Transaction ID</td>
                        <td><?= $_POST['bank_tran_id'] ?></td>
                    </tr>
                    <tr>
                        <td class="text-right">Amount</td>
                        <td><?= $_POST['amount'] . ' ' . $_POST['currency'] ?></td>
                    </tr>
                </table>

            <?php

            } else { // update query returned error

                echo '<h2 class="text-center text-danger">Error updating record: </h2>' . $conn_integration->error;

            } // update query successful or not 

        } else { // $validated is false

            $conn_integration->query($ot->updateTransactionQuery($tran_id, 'Failed'));
            echo '<h2 class="text-center text-danger">Payment was not valid. Please contact with the merchant.</h2>';

        } // check if validated or not

    } else { // status is something else

        echo '<h2 class="text-center text-danger">Invalid Information.</h2>';

    } // status is 'Pending' or already 'Processing'
    
session_destroy();
redirect("index.php");

?>










