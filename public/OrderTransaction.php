<?php

class OrderTransaction {

    public function getRecordQuery($tran_id)
    {
        $sql = "select * from orders WHERE transaction_id='" . $tran_id . "'";
        return $sql;
    }

    public function saveTransactionQuery($post_data)
    {
        $name = $post_data['cus_name'];
        $email = $post_data['cus_email'];
        $phone = $post_data['cus_phone'];
        $transaction_amount = $post_data['total_amount'];
        $address = $post_data['cus_add1'];
        $address2 = $post_data['cus_add2'];
        $city = $post_data['cus_city'];
        $state = $post_data['cus_state'];
        $country = $post_data['cus_country'];
        $zip = $post_data['cus_postcode'];
        $transaction_id = $post_data['tran_id'];
        $currency = $post_data['currency'];

        $sql = "INSERT INTO orders (user_id, name, email, phone, amount, address,address2, city, state, country, zip, status, transaction_id,currency)
                                    VALUES ('{$_SESSION['user_id']}', '$name', '$email', '$phone','$transaction_amount','$address', '$address2', '$city', '$state', '$country', '$zip', 'Pending', '$transaction_id','$currency')";

        return $sql;
    }

    public function updateTransactionQuery($tran_id, $type = 'Success')
    {
        $sql = "UPDATE orders SET status='$type' WHERE transaction_id='$tran_id'";

        return $sql;
    }
}

