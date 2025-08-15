<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="/../big-brew/img/logo1(1).png">
  <title>BigBrew - Home</title>

  <!-- Link To CSS -->
  <link rel="stylesheet" href="../big-brew/css/style.css">

  <!-- Box Icons -->
  <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>

<body>

  <!-- Navbar -->
  <header>
    <a class="logo">
      <img src="img/logo2.jpg" alt="">
    </a>
    <!--Menu Icon-->
    <i class='bx bx-menu' id="menu-icon"></i>
    <!-- Links -->
    <ul class="navbar">
      <li><a class="active" href="index.php">Home</a></li>
      <li><a href="products.php">Menu</a></li>
      <li><a href="aboutus.php">About Us</a></li>
      <li><a href="location.php">Location</a></li>
    </ul>
    <!-- Icons -->
    <div class="header-icon">
      <a href="registration.php" class='bx bx-user'></a>
      <i class='bx bx-search-alt-2' id="search-icon"></i>
      <a href="registration.php" class='bx bx-cart-alt'></a>
    </div>
    <!-- Search box -->
    <div class="search-box">
      <input type="search" name="search" id="search " placeholder="Search Here...">
    </div>
  </header>

  <!-- Home Page -->
  <section class="home" id="home">
    <div class="home-img">
    </div>
    <div class="home-text">
      <h1>Sip into Serenity:</h1>
      <h2>Discover the Perfect </h2>
      <h3>Milk Tea Experience</h3>
      <p>Indulge in our Rich and Creamy Milk Teas, Handcrafted Just for You.</p>
      <a href="products.php">
        <button class="btn1">Order Now</button>
      </a>
    </div>
  </section>

  <!-- Main Page -->
  <section class="about" id="about">
    <div class="about-text">
      <h2><b>Big Taste, Small Price</b></h2>
      <p><b>Big Brew serves coffee, tea, and snacks that are "big" in taste but "bit" in price.</b></p>
      <p>We currently have 100+ branches in Central Luzon and Metro Manila. we have made incredible strides in delivering high-quality and innovative milk tea products. Our commitment to using only the finest ingredients and environmentally friendly practices has enabled us to build a loyal customer base and attract investors who share our vision for success. </p>
      <p>With each passing year, we have continued to push the boundaries of what is possible in the milk tea industry, and we are excited to see what the future holds. Join us on this journey as we strive to make our mark in history and change the game for milk tea lovers worldwide.</p>
      <a href="aboutus.php"><button class="btn">Learn More</button></a>
    </div>
    <div class="about-vid">
      <video autoplay muted loop src="vid/bigbrewvideo.mp4"></video>
    </div>
  </section>

  <!-- Popular Products -->
  <section class="products" id="products">
    <div class="heading">
      <h2>Our popular products</h2>
      <p>Most Ordered Right Now.</p>
    </div>
    <!-- Container -->
    <div class="product-container">
      <div class="box">
        <img src="img/pr1.png" alt="">
        <h3>Dark Choco Milktea</h3>
      </div>
      <div class="box">
        <img src="img/pr2.png" alt="">
        <h3>Mocha Praf</h3>
      </div>
      <div class="box">
        <img src="img/pr3.png" alt="">
        <h3>Kape Vanilla</h3>
      </div>
      <div class="box">
        <img src="img/pr4.png" alt="">
        <h3>Kiwi Fruit Tea</h3>
      </div>
      <div class="box">
        <img src="img/pr5.png" alt="">
        <h3>Okinawa Milktea</h3>
      </div>
      <div class="box">
        <img src="img/NO PICTURE YET.png" alt="">
        <h3>Winter Melon Milktea</h3>
      </div>
      <div class="box">
        <img src="img/pr7.png" alt="">
        <h3>Red Velvet Milktea</h3>
      </div>
      <div class="box">
        <img src="img/pr8.png" alt="">
        <h3>Coffee Jelly Praf</h3>
      </div>
    </div>
  </section>

  <!-- Footer -->
    <div>
        <?php include('footer.php'); ?>
    </div>

  <!-- Link to JavaScript -->
    <script src="./js/main.js"></script>

</body>

</html>