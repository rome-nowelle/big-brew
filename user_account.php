<?php

if(!isset($_SESSION)) {
    session_start();
}

include_once("connection/connection.php");
connection();
$con = connection();


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" />
  <title>Welcome, <?php echo $_SESSION['user_name']; ?></title>
  <link rel="stylesheet" href="./css/user_account.css">
  <link rel="stylesheet" href="./css/style.css">

  <link rel="icon" type="image/x-icon" href="/../big-brew/img/logo1(1).png">
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg panel">
    <div href="#" class="navbar-brand logo">
      <img src="img/logo2.jpg" alt="">
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon">-</span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="nav nav-tabs border-0" id="dashboardTabs" role="tablist">
        <li class="nav-item">
          <a href="#profile" class="nav-link active" id="userProfile-tab" data-toggle="tab" role="tab"
            aria-controls="userProfile" aria-selected="true">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#orders" id="orders-tab" data-toggle="tab" role="tab" aria-controls="orders"
            aria-selected="false">Orders</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="items.php">Products</a>
        </li>
        <li class="nav-item d-flex align-items-center justify-content-center">
          <a href="logout.php" class="icon-link" style="font-size:1.2rem;" >
            <i class="bx bx-log-in"></i>
          </a>
        </li>
      </ul>
    </div>
  </nav>


  <div class="container">
    <div class="tab-content">
      <div id="profile" class="profile tab-pane fade show active" role="tabpanel" aria-labelledby="userProfile-tab">
        <h2>Welcome,
          <?php echo $_SESSION['user_name'] ?>!
        </h2>
        <div class="row">
          <div class="col-md-6">
            <!-- name -->
            <p><strong>Name:</strong>
              <?php echo $_SESSION['user_name']; ?>
            </p>
            <!-- address -->
            <p><strong>Address:</strong>
              <?php echo empty($_SESSION['user_address']) ? "N/A" : $_SESSION['user_address']; ?>
            </p>
            <!-- contact number -->
            <p><strong>Contact Number:</strong>
              <?php echo empty($_SESSION['user_contact_number']) ? "N/A" : $_SESSION['user_contact_number']; ?>
            </p>
            <!-- email -->
            <p><strong>Email:</strong>
              <?php echo $_SESSION['user_email']; ?>
            </p>
            <!-- password -->
            <p><strong>Password:</strong>
              <?php echo $_SESSION['user_password']; ?>
            </p>
          </div>
        </div>
        <div class="edit_account_container">
          <a href="edit_account_details.php">Edit account</a>
        </div>
      </div>

      <div id="orders" class="orders tab-pane fade" role="tabpanel" aria-labelledby="orders-tab">
        <h2>Orders</h2>

        <?php
          $get_total_payment = "SELECT SUM(order_price) AS total_payment FROM orders WHERE customer_id = '{$_SESSION['user_id']}'";
$total_payment_result = mysqli_query($con, $get_total_payment);
$total_payment_row = mysqli_fetch_assoc($total_payment_result);
$total_payment = $total_payment_row['total_payment'];
?>

        <table class="table table-striped">
          <thead>
            <tr>
              <th style="color: #fff;">Total Payment - ₱
                <?php echo $total_payment; ?>
              </th>
            </tr>
          </thead>
          <!-- <tbody>
            <tr>
              <td></td>
            </tr>
          </tbody> -->
        </table>

        <table class="table table-striped">
          <thead>
            <?php
  $get_orders = "SELECT * FROM orders WHERE customer_id = '{$_SESSION['user_id']}'";
$orders_result = mysqli_query($con, $get_orders);
$order_rows = mysqli_fetch_assoc($orders_result);
?>
            <tr>
              <th>Order</th>
              <th>Quantity</th>
              <th>Number</th>
              <th>Status</th>
              <th>Order Date</th>
              <!-- <th></th> -->
            </tr>
          </thead>
          <tbody>
            <?php
            if(mysqli_num_rows($orders_result) == 0) {
                echo "<tr><td colspan='5'>No orders yet</td></tr>";
            } else {
                do {?>
            <tr>
              <td>
                <div class="order_container d-flex gap-2 align-items-center">
                  <?php
                      $imagepath = './' . $order_rows['order_image'];
                    if(file_exists($imagepath)) {
                        echo'<img src="' .$imagepath. '" alt="' .$order_rows['order_name']. '" style="width: 100px;">';
                    } else {
                        echo $order_rows['order_name'];
                    }
                    ?>
                  <div class="order_name d-flex" style="flex-direction: column;">
                    <p class="m-0">
                      <?php echo $order_rows['order_name']; ?>
                    </p>
                    <p class="m-0" style="text-transform: capitalize; font-weight: bold">
                      <?php echo $order_rows['order_size']." - ₱ ".$order_rows['order_price'];
                    ; ?>
                    </p>
                  </div>
                </div>
              </td>
              <td>
                <?php echo $order_rows['order_quantity']; ?>
              </td>
              <td>
                <?php echo $order_rows['order_id']; ?>
              </td>
              <td style="color: #01db01
; font-weight: bold;">
                <?php echo $order_rows['order_status']; ?>
              </td>
              <td>
                <?php $order_date = $order_rows['order_date'];
                    $formatted_date = date("F j, Y - g:i A", strtotime($order_date));
                    echo $formatted_date;
                    ?>
              </td>
              <!-- <td>
                <form action="" method="post">
                  <button type="submit" name="cancel_order" style="color: red; border:0;outline:0;background:transparent;">Cancel</button>
                </form>
              </td> -->
              <?php } while(
                  $order_rows = mysqli_fetch_assoc($orders_result));
            }?>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>