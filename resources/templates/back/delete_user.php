<?php require_once("../../config.php");

if(isset($_GET['id'])) {

$query = query("DELETE FROM users WHERE user_id = " . escape_string($_GET['id'] . " "));

confirm($query);

set_message("User deleted!");
redirect("../../../admin/index.php?users");

}  else {

set_message("User not deleted!");
redirect("../../../admin/index.php?users");

}



?>
