<?php

ob_start();

session_start();

// session_destroy();

defined("DS") ? null : define("DS", DIRECTORY_SEPARATOR);

defined("TEMPLATE_FRONT") ? null : define("TEMPLATE_FRONT", __DIR__ .DS. "templates/front");

defined("TEMPLATE_BACK") ? null : define("TEMPLATE_BACK", __DIR__ .DS. "templates/back");



defined("UPLOAD_DIRECTORY") ? null : define("UPLOAD_DIRECTORY", __DIR__ .DS. "uploads");


defined("DB_HOST") ? null : define("DB_HOST", "localhost");

defined("DB_USER") ? null : define("DB_USER", "root");

defined("DB_PASS") ? null : define("DB_PASS", "");

defined("DB_NAME") ? null : define("DB_NAME", "ecom_db");

$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

require_once("functions.php");

require_once("cart_function.php");



/***************** SSL API Configaration **********************/

if (!defined('PROJECT_PATH')) {
    define('PROJECT_PATH', 'https://localhost/Personal/ecom/public'); // Replace this value with your project path
}

if (!defined('API_DOMAIN_URL')) {
    define('API_DOMAIN_URL', 'https://sandbox.sslcommerz.com');
}

if (!defined('STORE_ID')) {
    define('STORE_ID', 'skais624df84bd38f5');
}

if (!defined('STORE_PASSWORD')) {
    define('STORE_PASSWORD', 'skais624df84bd38f5@ssl');
}

if (!defined('IS_LOCALHOST')) {
    define('IS_LOCALHOST', true);
}

return [
    'projectPath' => constant("PROJECT_PATH"),
    'apiDomain' => constant("API_DOMAIN_URL"),
    'apiCredentials' => [
        'store_id' => constant("STORE_ID"),
        'store_password' => constant("STORE_PASSWORD"),
    ],
    'apiUrl' => [
        'make_payment' => "/gwprocess/v3/api.php",
        'transaction_status' => "/validator/api/merchantTransIDvalidationAPI.php",
        'order_validate' => "/validator/api/validationserverAPI.php",
        'refund_payment' => "/validator/api/merchantTransIDvalidationAPI.php",
        'refund_status' => "/validator/api/merchantTransIDvalidationAPI.php",
    ],
    'connect_from_localhost' => constant("IS_LOCALHOST"),
    'success_url' => 'pg_redirection/success.php',
    'failed_url' => 'pg_redirection/fail.php',
    'cancel_url' => 'pg_redirection/cancel.php',
    'ipn_url' => 'pg_redirection/ipn.php',
];




?>
