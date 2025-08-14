<?php

session_start();
include('../AdminBigBrew/functions/myfunctions.php');
include('../AdminBigBrew/config/dbcon.php');

if (isset($_POST['add_category_btn'])) {
    if (!empty($_POST['name'])) {
        $categoryname = mysqli_real_escape_string($con, $_POST['name']);

        $cate_query = "INSERT INTO categories (name) VALUES ('$categoryname')";
        $cate_query_run = mysqli_query($con, $cate_query);

        if ($cate_query_run) {
            // Category added successfully
            redirect("add-category.php", "Category Added Successfully");
        } else {
            // Error updating category
            echo "Error: " . mysqli_error($con);
        }
    } else {
        // Empty category name error
        echo "Category name is required.";
    }
}
else if (isset($_POST['add_products_btn'])) {
    $id = $_POST['category']; // Use the correct form field name for category selection
    $name = $_POST['name'];
    $price = $_POST['price'];
    $medio = $_POST['medio'];
    $grande = $_POST['grande'];
    $image = $_FILES['image']['name'];

    $path = "../img";
    $image_ext = pathinfo($image, PATHINFO_EXTENSION);
    $filename = time().'.'.$image_ext;

    $product_query = "INSERT INTO products (name, price, medio, grande, image, CategoryID) VALUES ('$name', '$price', '$medio', '$grande', '$filename', '$id')";
    $product_query_run = mysqli_query($con, $product_query);

    if ($product_query_run) {
        move_uploaded_file($_FILES['image']['tmp_name'], $path.'/'.$filename);
        redirect("add-category.php", "Product Added Successfully");
    } else {
        redirect("add-category.php", "Something Went Wrong");
    }
}

else if (isset($_POST['update_category_btn'])) 
{
    if (!empty($_POST['name'])) {
        $categoryname = mysqli_real_escape_string($con, $_POST['name']);
        $id = $_POST['id']; // Assuming the category ID is passed as a hidden input in the form

        $update_query = "UPDATE categories SET name = '$categoryname' WHERE categoryid = '$id'";
        $update_query_run = mysqli_query($con, $update_query);

        if ($update_query_run) {
            // Category updated successfully
            redirect("category.php", "Category Updated Successfully");
        } else {
            // Error updating category
            echo "Error: " . mysqli_error($con);
        }
    } else {
        // Empty category name error
        echo "Category name is required.";
    }
}
else if(isset($_POST['delete_category_btn']))
{
    $id = mysqli_real_escape_string($con, $_POST['id']);
    $delete_query = "DELETE FROM categories WHERE categoryid ='$id'";
    $delete_query_run = mysqli_query($con, $delete_query);

    if($delete_query_run)
    {
        redirect("category.php", "Category Deleted Successfully");
    }
    else
    {
        redirect("category.php", "Something Went Wrong");
    }
}





?>