<?php 
session_start();
include('../AdminBigBrew/includes/header.php');
include('middleware.php');

?>

<div class="container">
    <div class="row">
       <div class="col-md-12">
        <?php
         if(isset($_GET['categoryid'])) 
         {
            $id = $_GET['categoryid'];
            $categories = getByID("categories", $id);
            if(mysqli_num_rows($categories) > 0)
            {
                $data = mysqli_fetch_array($categories);
                ?>
                    <div class="card">
            <div class="card-header">
                <h4>Edit Category</h4>
            </div>
            <div class="card-body">
                <form action="code.php" method="POST" enctype="multipart/form-data">
                    <div class="row">
                         <div class="col-md-6">
                            <input type="hidden" name="id" value="<?= $data['categoryid']; ?>">
                            <label for="">Name</label>
                            <input type="text" name="name" value="<?= $data['name'];?>" placeholder="Enter category name" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary" name="update_category_btn">Save</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
                <?php
            }
            else
            {
                echo "Category not found";
            }
         }
         else
         {
            echo "Id missing from url";
         }
            ?>
       </div>
</div>

<?php include('includes/footer.php');?>