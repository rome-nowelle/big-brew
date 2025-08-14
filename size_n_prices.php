<div class="prices">
  <?php
          $get_size = "SELECT * FROM size";
  $size = $con->query($get_size) or die($con->error);
  while ($size_row = $size->fetch_assoc()) {
      ?>
  <div class="price">
    <div class="type">
      <!-- medio and grande -->
      <p><?php echo $size_row['size']; ?>
      </p>
    </div>
    <div class="content">
      <!-- 29 and 39 -->
      <p>
        ₱
        <?php echo $size_row['price']; ?>
      </p>
      <?php
      $item_size_id = $size_row['id'];
      $result = mysqli_query($con, $table);
      $row = mysqli_fetch_assoc($result);
      $item_name = $row['product_name'];
      $item_img = $row['product_image'];
      ?>
      <a
        href="cart.php?ID=<?php echo $item_size_id."_".$item_name."_".$item_img; ?>"><i
          class="bx bxs-cart-add"></i></a>
    </div>
  </div>
  <?php
  }
  ?>
</div>