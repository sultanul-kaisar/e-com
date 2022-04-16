<?php require_once("../resources/config.php"); ?>


<section class="shop-cart spad">

    <div class="container">
        
        <h1 class="text-center">Successfuly payment done. Thank You for shopping with us! </h1>

    </div>
</section>

<?php
$query1 = query("SELECT * FROM users WHERE user_id = {$_SESSION['user_id']}");
$query2 = query("SELECT * FROM profiles WHERE user_id = {$_SESSION['user_id']}");

$user = mysqli_fetch_assoc($query1);
$profile = mysqli_fetch_assoc($query2);



$val_id=urlencode($_POST['val_id']);
$store_id=urlencode("skais624df84bd38f5");
$store_passwd=urlencode("skais624df84bd38f5@ssl");
$requested_url = ("https://sandbox.sslcommerz.com/validator/api/validationserverAPI.php?val_id=".$val_id."&store_id=".$store_id."&store_passwd=".$store_passwd."&v=1&format=json");

$handle = curl_init();
curl_setopt($handle, CURLOPT_URL, $requested_url);
curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
curl_setopt($handle, CURLOPT_SSL_VERIFYHOST, false); # IF YOU RUN FROM LOCAL PC
curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false); # IF YOU RUN FROM LOCAL PC

$result = curl_exec($handle);

$code = curl_getinfo($handle, CURLINFO_HTTP_CODE);

if($code == 200 && !( curl_errno($handle)))
{

	# TO CONVERT AS ARRAY
	# $result = json_decode($result, true);
	# $status = $result['status'];

	# TO CONVERT AS OBJECT
	$result = json_decode($result);

	# TRANSACTION INFO
	$status = $result->status;
	$tran_date = $result->tran_date;
	$tran_id = $result->tran_id;
	$val_id = $result->val_id;
	$amount = $result->amount;
	$store_amount = $result->store_amount;
	$bank_tran_id = $result->bank_tran_id;
	$card_type = $result->card_type;

	# EMI INFO
	$emi_instalment = $result->emi_instalment;
	$emi_amount = $result->emi_amount;
	$emi_description = $result->emi_description;
	$emi_issuer = $result->emi_issuer;

	# ISSUER INFO
	$card_no = $result->card_no;
	$card_issuer = $result->card_issuer;
	$card_brand = $result->card_brand;
	$card_issuer_country = $result->card_issuer_country;
	$card_issuer_country_code = $result->card_issuer_country_code;

	# API AUTHENTICATION
	$APIConnect = $result->APIConnect;
	$validated_on = $result->validated_on;
	$gw_version = $result->gw_version;


    // echo $status. " " .$tran_date. " " .$tran_id. " " .$card_type;


$order_id = $_GET['order_id'];

$query1 = query("UPDATE orders SET status='{$status}', transaction_id='{$tran_id}', currency='BDT', order_date='{$tran_date}' WHERE id={$order_id}");


session_destroy();
redirect("index.php");

} else {

	echo "Failed to connect with SSLCOMMERZ";
	redirect("checkout.php");
}










