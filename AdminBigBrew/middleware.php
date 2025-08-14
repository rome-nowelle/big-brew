<?php
include('../AdminBigBrew/functions/myfunctions.php');
if (isset($_SESSION['auth'])) {
    if ($_SESSION['role'] != 1) {
        redirect("../index.php", "You are not authorized to access this page");
    }
} else {
    redirect("../add-category.php", "Login to continue");
}
?>
