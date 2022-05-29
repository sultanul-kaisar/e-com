<?php

    // die("hello");

    require_once("../resources/config.php");

    $result = query("SELECT * FROM `sub_categories` WHERE `parent_cat_id` = " . $_GET["cat_id"]);

    $sub_menus = '<option value="">Select Sub Category</option>';

    while($data = fetch_array($result))
        $sub_menus .= '<option value="' . $data['sub_cat_id'] . '">' . $data['sub_cat_title'] . '</option>';

    die($sub_menus);
?>
