<?php 
session_start();
include('../AdminBigBrew/includes/header.php');
include('../AdminBigBrew/middleware.php');
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Categories</h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $categories = getAll("categories");

                            if (mysqli_num_rows($categories) > 0) {
                                while ($item = mysqli_fetch_assoc($categories)) {
                                    $categoryid = isset($item['categoryid']) ? $item['categoryid'] : ''; // Handling undefined key
                                    $categoryname = isset($item['name']) ? $item['name'] : ''; // Handling undefined key
                                    ?>
                                    <tr>
                                        <td><?= $categoryid ?></td>
                                        <td><?= $categoryname ?></td>
                                        <td>
                                        <a href="edit-category.php?categoryid=<?= $categoryid;?>" class="btn btn-primary">Edit</a>
                                        <form action="code.php" method="POST">
                                            <input type="hidden" name="id" value="<?= $categoryid ?>">
                                            <button type="submit" class="btn btn-primary" name="delete_category_btn">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            } else {
                                echo "No records found";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
