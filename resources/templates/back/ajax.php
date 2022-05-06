<?php
    require_once("../../config.php");
    $result = mysql_query("SELECT * FROM `sub_categories` WHERE `parent_cat_id` = " . mysql_real_escape_string($_GET["parent_cat_id"]));
    while(($data = mysql_fetch_array($result)) !== false)
        echo '<option value="', $data['sub_cat_id'],'">', $data['sub_cat_title'],'</option>'
?>
