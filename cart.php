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

    $item_size_id = $order_details[0]; // size id
    $item_name = $order_details[1]; // product name
    $item_img = $order_details[2]; // product image img/folder/img.png

    // $imagepath = './'.$item_img;

    $get_size = "SELECT * FROM size WHERE id = '$item_size_id'";
    $size_result = mysqli_query($con, $get_size);
    $size_row = mysqli_fetch_assoc($size_result);
    $size = $size_row['size'];
    $price = $size_row['price'];

    $store_order = "INSERT INTO `orders` (`order_name`, `order_image`, `order_size`,`order_price`,`order_status`,`customers_name`,`customer_id`) VALUES('$item_name', '$item_img', '$size','$price','Processing','{$_SESSION['user_name']}', '{$_SESSION['user_id']}')";
    $con->query($store_order) or die($con->error);

    header("Location: user_account.php");
    exit();
}
