<?php
if(!isset($_SESSION)) {
    session_start();
}

include_once("connection/connection.php");
connection();
$con = connection();

// get milktea items
$get_milktea = "SELECT * FROM milktea";
$milktea = $con->query($get_milktea) or die($con->error);
$milktea_row = $milktea->fetch_assoc();

// get fruit tea items
$get_fruit = "SELECT * FROM fruit";
$fruit = $con->query($get_fruit) or die($con->error);
$fruit_row = $fruit->fetch_assoc();

// get ice coffee items
$get_ice_coffee = "SELECT * FROM ice_coffee";
$ice_coffee = $con->query($get_ice_coffee) or die($con->error);
$ice_coffee_row = $ice_coffee->fetch_assoc();

// get praf items
$get_praf = "SELECT * FROM praf";
$praf = $con->query($get_praf) or die($con->error);
$praf_row = $praf->fetch_assoc();

// get hotbrew items
$get_hot_drinks = "SELECT * FROM hot_drinks";
$hot_drinks = $con->query($get_hot_drinks) or die($con->error);
$hot_drinks_row = $hot_drinks->fetch_assoc();

// get add_ons items
$get_add_ons = "SELECT * FROM add_ons";
$add_ons = $con->query($get_add_ons) or die($con->error);
$add_ons_row = $add_ons->fetch_assoc();

?>

<!-- Product Page -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" type="image/x-icon" href="/../big-brew/img/logo1(1).png">
  <title>BigBrew - Menu</title>

  <!-- Link to CSS -->
  <link rel="stylesheet" href="./css/products.css" />

  <!-- Box Icons -->
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" />
  <!-- <style>
    .prices {
      display: flex;
      gap: 1rem;
      align-items: center;
      justify-content: center;
    }

    .prices .price .content {
      display: flex;
      gap: 0.5rem;
      flex-direction: column;
    }

    .prices .price .content a {
      color: #fff;
      padding: 0.1rem 0.6rem;
      background-color: #bc9667;
      border: 3px solid #1b1b1b;
      border-radius: 0.3rem;
    }

    .type,
    .content {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    @media (max-width: 768px) {

      .type,
      .content {
        flex-direction: column;
        align-items: flex-start;
      }
    }
  </style> -->
</head>

<body>
  <!-- Navbar -->
  <header>
    <a href="index.html" class="logo">
      <img src="img/logo1.png" alt="" />
    </a>

    <!-- Menu Icon -->
    <i class="bx bx-menu" id="menu-icon"></i>

    <!-- Links -->
    <ul class="navbar">
      <li><a
          href="<?php echo $_SERVER['HTTP_REFERER']; ?>">Go
          back</a>
      </li>
    </ul>

    <!-- Icon -->
    <div class="header-icon">
      <!-- <i class="bx bx-cart"></i>
      <i class="bx bx-search" id="search-icon"></i> -->
      <a href="logout.php" class="icon-link">
        <i class="bx bx-log-in"></i>
      </a>
    </div>
    <!-- Search Box -->
    <div class="search-box">
      <input type="search" name="" id="" placeholder="Search Here..." />
    </div>
  </header>

  <section id="page-header">
    <h2>- Menu -</h2>
    <p>All Products</p>
  </section>

  <!-- BigBrew Milktea -->
  <section class="products1" id="products">
    <div class="heading1">
      <h2>Milktea</h2>
      <p>- With Pearl -</p>
    </div>
    <!-- Container -->
    <div class="product-container1">
      <?php do { ?>
      <div class="box">
        <?php
        $id = $milktea_row['product_id'];
          $table = "SELECT * FROM milktea WHERE product_id = '$id'";

          $imagepath = './' . $milktea_row['product_image'];
          if(file_exists($imagepath)) {
              echo '<img src="' .$imagepath. '" alt="' .$milktea_row['product_name']. '" />';
          } else {
              echo "Image not found";
          }
          ?>
        <h3>
          <?php $order = $milktea_row['product_name'];
          echo $order;?>
        </h3>

        <?php include('size_n_prices.php'); ?>
      </div>
      <?php  } while($milktea_row = $milktea->fetch_assoc()); ?>
    </div>
  </section>

  <!-- BigBrew Fruit Tea -->
  <section class="products2" id="products">
    <div class="heading2">
      <h2>Fruit Tea</h2>
      <p>With Crystal</p>
    </div>
    <!-- Container -->
    <div class="product-container2">
      <?php do { ?>
      <div class="box">
        <?php
        $id = $fruit_row['product_id'];
          $table = "SELECT * FROM fruit WHERE product_id = '$id'";
          $imagepath = './' . $fruit_row['product_image'];
          if(file_exists($imagepath)) {
              echo '<img src="' .$imagepath. '" alt="' .$fruit_row['product_name']. '" />';
          } else {
              echo "Image not found";
          }
          ?>
        <h3>
          <?php $order = $fruit_row['product_name'];
          echo $order;?>
        </h3>

        <?php include('size_n_prices.php'); ?>
      </div>
      <?php  } while($fruit_row = $fruit->fetch_assoc()); ?>
    </div>
  </section>

  <!-- BigBrew Iced Coffee -->
  <section class="products3" id="products">
    <div class="heading3">
      <h2>Iced Coffee</h2>
      <p>With Cream Puff</p>
    </div>
    <div class="product-container1">
      <?php do { ?>
      <div class="box">
        <?php
        $id = $ice_coffee_row['product_id'];
          $table = "SELECT * FROM ice_coffee WHERE product_id = '$id'";
          $imagepath = './' . $ice_coffee_row['product_image'];
          if(file_exists($imagepath)) {
              echo '<img src="' .$imagepath. '" alt="' .$ice_coffee_row['product_name']. '" />';
          } else {
              echo "Image not found";
          }
          ?>
        <h3>
          <?php echo $ice_coffee_row['product_name']; ?>
        </h3>

        <?php include('size_n_prices.php'); ?>
      </div>
      <?php  } while($ice_coffee_row = $ice_coffee->fetch_assoc()); ?>
    </div>
  </section>

  <!-- BigBrew Praf -->
  <section class="products4" id="products">
    <div class="heading4">
      <h2>Praf</h2>
      <p>With Whipped Cream</p>
    </div>
    <div class="product-container1">
      <?php do { ?>
      <div class="box">
        <?php
        $id = $praf_row['product_id'];
          $table = "SELECT * FROM praf WHERE product_id = '$id'";
          $imagepath = './' . $praf_row['product_image'];
          if(file_exists($imagepath)) {
              echo '<img src="' .$imagepath. '" alt="' .$praf_row['product_name']. '" />';
          } else {
              echo "Image not found";
          }
          ?>
        <h3
          style="text-align: left;color: #bebebe;font-size: 0.7rem;font-weight: 598;text-transform: uppercase;margin-block: 0.5rem 0">
          <?php echo $praf_row['base']; ?>
        </h3>
        <h3 style="text-align: left; margin-top: 0;">
          <?php echo $praf_row['product_name']; ?>
        </h3>
        <div class="prices">
          <div class="price">
            <div class="content" style="justify-content: space-between; flex-direction: row;">
              <p>
                ₱
                <?php echo $praf_row['Price']; ?>
              </p>
              <?php
              $item_price = $praf_row['Price'];
          $result = mysqli_query($con, $table);
          $row = mysqli_fetch_assoc($result);
          $item_name = $row['product_name'];
          $item_img = $row['product_image'];
          ?>
              <a
                href="regular_prices.php?ID=<?php echo $item_name."_".$item_img."_".$item_price; ?>"><i
                  class="bx bxs-cart-add"></i></a>
            </div>
          </div>
        </div>
      </div>
      <?php  } while($praf_row = $praf->fetch_assoc()); ?>
    </div>
  </section>

  <!-- HotBrew -->
  <section class="products5" id="products">
    <div class="heading5">
      <h2>Hotbrew</h2>
      <p>With Cream Puff</p>
    </div>
    <!-- Container -->
    <div class="product-container1">
      <?php do { ?>
      <div class="box">
        <?php
            $id = $hot_drinks_row['product_id'];
          $table = "SELECT * FROM hot_drinks WHERE product_id = '$id'";
          $imagepath = './' . $hot_drinks_row['product_image'];
          if(file_exists($imagepath)) {
              echo '<img src="' .$imagepath. '" alt="' .$hot_drinks_row['product_name']. '" />';
          } else {
              echo "Image not found";
          }
          ?>
        <h3>
          <?php echo $hot_drinks_row['product_name']; ?>
        </h3>
        <div class="prices">
          <div class="price">
            <div class="content">
              <p>
                ₱
                <?php echo $hot_drinks_row['Price']; ?>
              </p>
              <?php
          $item_price = $hot_drinks_row['Price'];
          $result = mysqli_query($con, $table);
          $row = mysqli_fetch_assoc($result);
          $item_name = $row['product_name'];
          $item_img = $row['product_image'];
          ?>
              <a
                href="regular_prices.php?ID=<?php echo $item_name."_".$item_img."_".$item_price; ?>"><i
                  class="bx bxs-cart-add"></i></a>
            </div>
          </div>
        </div>
      </div>
      <?php  } while($hot_drinks_row = $hot_drinks->fetch_assoc()); ?>
    </div>
  </section>

  <!-- BigBrew Add-ons -->
  <section class="addons" id="products">
    <div class="heading6">
      <h2>₱ 9 | Add-ons</h2>
    </div>
    <!-- Container -->
    <div class="product-container1">
      <?php do { ?>
      <div class="box">
        <?php
          $id = $add_ons_row['addons_id'];
          $table = "SELECT * FROM add_ons WHERE addons_id = '$id'";
          $imagepath = './' . $add_ons_row['product_image'];
          if(file_exists($imagepath)) {
              echo '<img src="' .$imagepath. '" alt="' .$add_ons_row['addons_name']. '" />';
          } else {
              echo "Image not found";
          }
          ?>
        <h3>
          <?php echo $add_ons_row['addons_name']; ?>
        </h3>
        <div class="prices">
          <div class="price">
            <div class="content">
              <p>
                ₱
                <?php echo $add_ons_row['Price']; ?>
              </p>
              <?php
$item_price = $add_ons_row['Price'];
          $result = mysqli_query($con, $table);
          $row = mysqli_fetch_assoc($result);
          $item_name = $row['addons_name'];
          $item_img = $row['product_image'];
          ?>
              <a
                href="regular_prices.php?ID=<?php echo $item_name."_".$item_img."_".$item_price; ?>"><i
                  class="bx bxs-cart-add"></i></a>
            </div>
          </div>
        </div>
      </div>
      <?php  } while($add_ons_row = $add_ons->fetch_assoc()); ?>
    </div>
  </section>

  <!--Footer-->
  <section class="footer">
    <div class="footer-box">
      <h2>BigBrew</h2>
      <p>
        Affordable bliss in every sip,<b> milktea magic on a budget trip!</b>
      </p>
      <div class="social">
        <a href="https://www.facebook.com/bigbrew.main"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.tiktok.com/@bigbrewmain"><i class="bx bxl-tiktok"></i></a>
        <a href="https://www.instagram.com/bigbrew.main/"><i class="bx bxl-instagram"></i></a>
        <a href="https://goo.gl/maps/5SY1Uez4qzPotPxz8?coh=178572&entry=tt"><i class="bx bxs-map"></i></a>
      </div>
    </div>
    <div class="footer-box">
      <h3>Order and Pickup</h3>
      <li><a href="#">Order on the Web</a></li>
      <li><a href="#">Delivery</a></li>
      <li><a href="#">Order and Pickup Options</a></li>
    </div>
    <div class="footer-box">
      <h3>About Us</h3>
      <li><a href="#">Our Company</a></li>
      <li><a href="#">Our Coffee</a></li>
      <li><a href="#">Customer Service</a></li>
    </div>
    <div class="footer-box">
      <h3>Contact</h3>
      <li><a href="#">09123456789</a></li>
      <li><a href="#">bigbrewmain@gmail.com</a></li>
    </div>
    <!-- </section> -->
    <!-- Copyright -->
    <div class="copyright">
      <p>&#169; BSIT 2-2N Group No.7 All Right Reserved</p>
    </div>
  </section>

  <!-- Link to JS -->
  <script src="main.js"></script>
</body>

</html>