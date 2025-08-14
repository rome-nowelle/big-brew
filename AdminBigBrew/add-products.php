<?php 
include('../AdminBigBrew/functions/myfunctions.php');
include('includes/header.php');?>

<div class="container">
    <div class="row">
       <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Add Products</h4>
            </div>
            <div class="card-body">
                <form action="code.php" method="POST" enctype="multipart/form-data">
                    <div class="row">
                    <div class="col-md-12">
                        <label for="">Select Category</label>
                        <select class="form-select" name="category">
    <option selected>Select Category</option>
    <?php 
    $categories = getAllCategories();
    if (!empty($categories)) {
        foreach ($categories as $item) {
            ?>
            <option value="<?= $item['categoryid']; ?>"><?= $item['name']; ?></option>
            <?php
        }
    } else {
        echo "No category found";
    }
    ?>
</select>

                        </div>
                         <div class="col-md-6">
                            <label for="">Name</label>
                            <input type="text" name="name" placeholder="Enter product name" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label for="">Upload Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">Price</label>
                            <input type="text" name="price" placeholder="Enter price" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">Medio</label>
                            <input type="text" name="medio" placeholder="Enter price" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">Grande</label>
                            <input type="text" name="grande" placeholder="Enter price" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary" name="add_products_btn">Save</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
       </div>
</div>

<?php include('includes/footer.php');?>