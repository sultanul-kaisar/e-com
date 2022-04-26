<?php require_once("../../config.php");

if(isset($_GET['id'])) {

$query = query("DELETE FROM orders WHERE id = " . escape_string($_GET['id'] . " "));

confirm($query);

set_message("Order deleted!");
redirect("../../../admin/index.php?orders");

}  else {

set_message("Order not deleted!");
redirect("../../../index.php?orders");

}



?>

