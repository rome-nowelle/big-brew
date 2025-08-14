<?php
if(!isset($_SESSION)) {
    session_start();
}

include_once("connection/connection.php");
connection();
$con = connection();

if(isset($_POST['update_account'])) {
    $user_name = $_POST['user_name'];
    $user_address = $_POST['user_address'];
    $user_contact_number = $_POST['user_contact_number'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];

    // update user details
    $update_account = "UPDATE customers SET user_name = '{$user_name}', user_address = '{$user_address}', user_contact_number = '{$user_contact_number}', user_email = '{$user_email}', user_password = '{$user_password}' WHERE user_id = '{$_SESSION['user_id']}'";
    $con->query($update_account) or die($con->error);

    // update user session details
    $_SESSION['user_name'] = $user_name;
    $_SESSION['user_address'] = $user_address;
    $_SESSION['user_contact_number'] = $user_contact_number;
    $_SESSION['user_email'] = $user_email;
    $_SESSION['user_password'] = $user_password;

    header("Location: user_account.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title><?php echo $_SESSION['user_name']; ?> -
    Edit Account Big Brew</title>
  <link rel="stylesheet" href="user_account.css">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/edit_account_details.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg panel">
    <a href="#" class="navbar-brand logo">
      <img src="img/logo2.jpg" alt="">
    </a>
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
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </nav>


  <div class="container">
    <div class="tab-content">
      <div id="profile" class="profile tab-pane fade show active" role="tabpanel" aria-labelledby="userProfile-tab">
        <h2>Profile</h2>
        <div class="row">
          <div class="col-md-6">
            <form action="" method="post">
              <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="user_name"
                  value="<?php echo $_SESSION['user_name']; ?>"
                  required>
              </div>
              <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" class="form-control" id="address" name="user_address"
                  value="<?php echo empty($_SESSION['user_address']) ? " " : $_SESSION['user_address']; ?>"
                  required>
              </div>
              <div class="form-group">
                <label for="contact_number">Contact Number:</label>
                <input type="tel" class="form-control" id="contact_number" name="user_contact_number"
                  value="<?php echo empty($_SESSION['user_contact_number']) ? " " : $_SESSION['user_contact_number']; ?>"
                  required>
              </div>

              <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" id="email" name="user_email"
                  value="<?php echo $_SESSION['user_email']; ?>"
                  required>
              </div>
              <div class="form-group">
                <label for="password">Password:</label>
                <input type="Password" class="form-control" id="password" name="user_password"
                  value="<?php echo $_SESSION['user_password']; ?>"
                  required>
              </div>
              <div class="buttons">
                <button type="submit" class="btn btn-primary" name="update_account">Update</button>
                <a href="user_account.php?ID=<?php echo $_SESSION['user_id'];?>"
                  class="cancel-btn">Cancel</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>