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
                    <h4>Products</h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ProductID</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Price</th>
                                <th>Medio</th>
                                <th>Grande</th>
                                <th>CategoryID</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $products = getAll("products");

                            if (mysqli_num_rows($products) > 0) {
                                while ($item = mysqli_fetch_assoc($products)) {
                                    $productid = isset($item['ProductID']) ? $item['ProductID'] : '';
                                    $name = isset($item['name']) ? $item['name'] : '';
                                    $image = isset($item['image']) ? $item['image'] : '';
                                    $price = isset($item['price']) ? $item['price'] : '';
                                    $medio = isset($item['medio']) ? $item['medio'] : '';
                                    $grande = isset($item['grande']) ? $item['grande'] : '';
                                    $categoryid = isset($item['CategoryID']) ? $item['CategoryID'] : '';
                                    ?>
                                    <tr>
                                        <td><?= $productid ?></td>
                                        <td><?= $name ?></td>
                                        <td>
                                            <?php
                                              $imagePath = "../img/" . $item['image'];
                                            ?>
                                            <!-- Check if the image file exists -->
                                            <?php if (file_exists($imagePath)) : ?>
                                                <img src="<?= $imagePath; ?>" width="80px" height="80px" alt="<?= $item['name']; ?>">
                                            <?php else : ?>
                                                <p>Image Not Found</p>
                                            <?php endif; ?>
                                        </td>

                                        <td><?= $price ?></td>
                                        <td><?= $medio ?></td>
                                        <td><?= $grande ?></td>
                                        <td><?= $categoryid ?></td>
                                        <td>
                                            <a href="edit-products.php?categoryid=<?= $categoryid; ?>" class="btn btn-primary">Edit</a>
                                            <form action="code.php" method="POST">
                                                <input type="hidden" name="productid" value="<?= $categoryid ?>">
                                                <button type="submit" class="btn btn-primary" name="delete_products_btn">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
