<?php

include('../AdminBigBrew/config/dbcon.php');
function getAll($table)
{
    global $con;
    $query = "SELECT * FROM $table";
    $query_run = mysqli_query($con, $query);
    return $query_run;
}
function getByID($table, $categoryid)
{
    global $con;
    $query = "SELECT * FROM $table WHERE categoryid = '$categoryid'";
    $query_run = mysqli_query($con, $query);
    return $query_run;
}


function getAllCategories()
{
    global $con;
    $query = "SELECT * FROM categories";
    $result = mysqli_query($con, $query);
    $categories = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $categories;
}
function getAllProducts()
{
    global $con;
    $query = "SELECT * FROM products";
    $result = mysqli_query($con, $query);
    $products = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $products;
}
function redirect($url, $message)
{
    $_SESSION['message'] = $message;
    header('Location: ' .$url);
    exit();
}
function getProductByID($productid)
{
    global $con;
    $query = "SELECT * FROM products WHERE ProductID = '$productid'";
    $query_run = mysqli_query($con, $query);
    return $query_run;
}

?>