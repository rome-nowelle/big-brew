<?php

if(!isset($_SESSION)) {
    session_start();
}

include_once("connection/connection.php");
connection();
$con = connection();

if(isset($_GET['ID'])) {
    $order = $_GET['ID'];
    $order_details = explode("_", $order);

    $item_name = $order_details[0]; // product name
    $item_img = $order_details[1]; // product image img/folder/img.png
    $item_price = $order_details[2]; // product price

    $store_order = "INSERT INTO `orders` (`order_name`, `order_image`, `order_size`,`order_price`,`order_status`,`customers_name`,`customer_id`) VALUES('$item_name', '$item_img', 'Regular','$item_price','Processing','{$_SESSION['user_name']}', '{$_SESSION['user_id']}')";
    $con->query($store_order) or die($con->error);

    header("Location: user_account.php#orders");
    exit();
}
