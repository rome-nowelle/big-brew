<?php

if(!isset($_SESSION)) {
    session_start();
}

include_once("connection/connection.php");
connection();
$con = connection();

// signup page
if(isset($_POST['signup'])) {
    $user_name = $_POST['user_name'];
    $user_email = $_POST['user_email'];
    $user_address = $_POST['user_address'];
    $user_contact_number = $_POST['user_contact_number'];
    $user_password = $_POST['user_password'];

    // insert to customer table
    $insert_customer_details = "INSERT INTO `customers`(`user_name`, `user_email`, `user_address`, `user_contact_number`,`user_password`) VALUES ('$user_name', '$user_email', '$user_address', '$user_contact_number','$user_password')";
    $con->query($insert_customer_details) or die($con->error);

    // redirect to registration to sign in
    header("Location: registration.php");
}

// signin page

if(isset($_POST['signin'])) {
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];

    // select the user whom just signed up
    $get_registered_user = "SELECT * FROM customers WHERE user_email = '$user_email' AND user_password = '$user_password'";
    $registered_user = $con->query($get_registered_user) or die($con->error);
    $row = $registered_user->fetch_assoc();
    $total_query = $registered_user->num_rows;

    if($total_query > 0) {
        $_SESSION['user_id'] = $row['user_id'] ;
        $_SESSION['user_name'] = $row['user_name'] ;
        $_SESSION['user_address'] = $row['user_address'] ;
        $_SESSION['user_contact_number'] = $row['user_contact_number'] ;
        $_SESSION['user_email'] = $row['user_email'] ;
        $_SESSION['user_password'] = $row['user_password'] ;

        // update login session
        $update_signin = "UPDATE customers SET user_name = '{$_SESSION['user_name']}', user_address = '{$_SESSION['user_address']}', user_contact_number = '{$_SESSION['user_contact_number']}', user_email = '{$_SESSION['user_email']}', user_password = '{$_SESSION['user_password']}' WHERE user_id = '{$_SESSION['user_id']}'";
        $con->query($update_signin) or die($con->error);

        header("Location: user_account.php");
        exit();
    } else {
        echo '<div class="error-message" id="errorMessage">Invalid username or password! <br> Please sign in again</div>';
    }
}
?>
<!-- Registration Page -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="/../big-brew/img/logo1(1).png">
  <title>BigBrew - Login/Signup</title>

  <!-- Link to CSS -->
  <link rel="stylesheet" href="./css/registration.css">

  <!-- Box Icons -->
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>

<body>
  <header>
    <a class="logo">
      <img src="img/logo2.jpg" alt="">
    </a>
    <!--Menu Icon-->
    <i class='bx bx-menu' id="menu-icon"></i>
    <!-- Links -->
    <ul class="navbar">
      <li><a href="index.php">Home</a></li>
      <li><a href="products.php">Menu</a></li>
      <li><a href="aboutus.php">About Us</a></li>
      <li><a href="location.php">Location</a></li>
    </ul>
    <!-- Icons -->
    <div class="header-icon">
      <i class='bx bx-search-alt-2' id="search-icon"></i>
      <a href="registration.php" class='bx bx-cart-alt'></a>
    </div>
    <!-- Search box -->
    <div class="search-box">
      <input type="search" name="" id="" placeholder="Search Here...">
    </div>
  </header>

  <div class="container">
    <!-- SIGNUP -->
    <!-- terms and conditions -->
    <div id="termsModal" class="modal">
      <div class="modal-content">
      <h1>Terms and Conditions for Registering on BigBrew</h1>
        <h2><b>Welcome to BigBrew!</b></h2> <b>Please read these terms and conditions carefully before using our
          services. By registering and creating an account, you acknowledge and agree with these terms and conditions. 
          If you do not agree to any part of these terms and conditions, kindly refrain from registering on BigBrew.</b>
        <ol type="a">
          <h2><b>Account Registration:<b><h2>
          <li>In order to register on BigBrew, you must provide accurate and complete information about yourself.</li>
          <li>To sign up for an account and register on our website, you must be of legal age.</li>
          <li>Ensuring the confidentiality of your account details, including your username and password, is solely your responsibility.</li>
          <li>You agree to inform us right away of any unauthorized use of your account or any other security breach.</li>
        </ol>
        <ol type ="a">
          <h2><b>Account Usage:</b></h2>
          <li>All activities performed through your account are entirely your responsibility.</li>
          <li>You agree not to use your account for any unlawful, unauthorized, or fraudulent purposes.</li>
          <li>During the registration process, you are prohibited from impersonating any individual or entity, 
          as well as providing false or misleading information.</li>
        </ol>
        <ol type ="a">
          <h2><b>Privacy and Data Protection:</b><h2>
          <li>By completing the registration process on BigBrew, you consent to the collection, and use of your personal information that you voluntarily provide to us, 
          which includes your name, address, and contact details.</li>
          <li>We may use the personal information we collect to provide you with the products, and services and to communicate 
          with you regarding your inquiries, orders, or account information.</li>
          <li>We guarantee that your personal information will not be sold, traded, or otherwise transferred to any third parties without your consent.</li>
          <li>In certain cases, we may share your personal information with trusted third-party service providers  to assist us in conducting 
          our business or delivering services to you. These third parties are obligated to maintain the confidentiality 
          and security of your personal information.</li>
          <li>There may be circumstances where we are obligated to disclose your personal information by law, regulation, 
          legal process, or when we reasonably believe that such disclosure is necessary to protect our rights, property, or the safety of others.</li>
        </ol>
        <p><b>By registering an account, you acknowledge that you have read, understood, and agreed to the terms and conditions specified above. 
          If you have any questions or concerns, please do not hesitate to contact us through the provided contact information on this website.</b></p>
        <div class="check-box-container"
          style="display: flex; flex-direction: row; justify-content:space-between; align-items: center;">
          <div class="check-box" style="display: flex; flex-direction: row; gap: 0.5rem;">
            <input type="checkbox" id="agreeCheckbox" style="width: 1rem;">
            <label for="agreeCheckbox">I agree to the terms and conditions</label>
          </div>
          <button id="closeModalBtn">Close</button>
        </div>
      </div>
    </div>

  </div>
  <!-- end of terms and conditions -->
  <div class="form-box" id="sign-up">
    <h1 id="title">Sign Up</h1>
    <form method="post" onsubmit="return showTermsModal(event)">
      <div class="input-group">
        <!-- name -->
        <div class="input-field" id="nameField">
          <input type="text" name="user_name" id="sign-up-name" placeholder="Name" required>
        </div>
        <!-- email -->
        <div class="input-field" id="nameField">
          <input type="email" name="user_email" id="sign-up-email" placeholder="Email" required>
        </div>
        <!-- address -->
        <div class="input-field" id="nameField">
          <input type="text" name="user_address" id="sign-up-name" placeholder="address" required>
        </div>
        <!-- contact -->
        <div class="input-field" id="nameField">
          <input type="text" name="user_contact_number" id="sign-up-name" placeholder="contact_number" required>
        </div>
        <!-- password -->
        <div class="input-field" id="nameField">
          <input type="password" name="user_password" id="password" placeholder="Password" required>
        </div>
        <div class="button-container">
          <!-- submit button -->
          <!-- <button type="submit" class="submit-btn" name="signup">Continue</button> -->
          <button type="submit" class="submit-btn" name="signup" id="signupBtn">Continue</button>
          <!-- forgot password -->
          <p id="premove">Forgot Password <a href="#">Click Here!</a></p>
        </div>
        <!-- sign in page -->
        <a href="sign-in" id="signinBtn" class="signup-btn">Sign in</a>
      </div>
    </form>
  </div>
  <!-- SIGNIN -->
  <div class="form-box" id="sign-in" style="display: none;">
    <h1 id="title">Sign In</h1>
    <form method="post">
      <div class="input-group">
        <!-- email -->
        <div class="input-field" id="nameField">
          <input type="email" name="user_email" id="sign-in-email" placeholder="Email" required>
        </div>
        <!-- password -->
        <div class="input-field" id="nameField">
          <input type="password" name="user_password" id="sign-in-password" placeholder="Password" required>
        </div>
        <div class="button-container">
          <!-- submit button -->
          <button type="submit" class="submit-btn" name="signin">Continue</button>
          <!-- forgot password -->
          <p id="premove">Forgot Password <a href="#">Click Here!</a></p>
        </div>
        <!-- sign in page -->
        <a href="sign-up" id="signinBtn" class="signin-btn">Sign up</a>
      </div>
    </form>
  </div>
  </div>

      <!-- Footer -->
    <div>
        <?php include('footer.php'); ?>
    </div>
   

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const signUpForm = document.getElementById("sign-up");
      const signInForm = document.getElementById("sign-in");
      const signUpLink = document.querySelector("#sign-up a.signup-btn");
      const signInLink = document.querySelector("#sign-in a.signin-btn");

      signUpLink.addEventListener("click", function(e) {
        e.preventDefault();
        signUpForm.style.display = "none";
        signInForm.style.display = "block";
      });

      signInLink.addEventListener("click", function(e) {
        e.preventDefault();
        signUpForm.style.display = "block";
        signInForm.style.display = "none";
      });
    });

    // error message 
    const errorMessage = document.getElementById('errorMessage')
    setTimeout(() => {
      errorMessage.remove();
    }, 6000);


    function showTermsModal(event) {
      const termsModal = document.getElementById("termsModal");
      const agreeCheckbox = document.getElementById("agreeCheckbox");

      if (!agreeCheckbox.checked) {
        event.preventDefault();
        termsModal.style.display = "block";
        return false;
      }
    }

    document.addEventListener("DOMContentLoaded", function() {
      const termsModal = document.getElementById("termsModal");
      const signupForm = document.getElementById("signupForm");

      closeModalBtn.addEventListener("click", function() {
        termsModal.style.display = "none";
      });

      signupForm.addEventListener("submit", function(event) {
        termsModal.style.display = "block";

        if (!agreeCheckbox.checked) {
          event.preventDefault(); // Prevent form submission
          const agreeCheckbox = document.getElementById("agreeCheckbox");
          termsModal.style.display = "block";
          return false;
        }
      });
    });
  </script>
</body>

</html>