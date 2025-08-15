<!-- About Us Page -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/../big-brew/img/logo1(1).png">
    <title>BigBrew - About Us</title>

    <!-- Link to CSS -->
    <link rel="stylesheet" href="../big-brew/css/aboutus.css">

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
            <li><a href="index.php">Home</a></li>
            <li><a href="products.php">Menu</a></li>
            <li><a class="active" href="aboutus.php">About Us</a></li>
            <li><a href="location.php">Location</a></li>
        </ul>
        <!-- Icons -->
        <div class="header-icon">
            <i class='bx bx-search-alt-2' id="search-icon" style="visibility: hidden; cursor: none"></i>
            <a href="addtocart.php" class='bx bx-cart-alt'></a>
            <a href="registration.php" class='bx bx-user'></a>
        </div>
        <!-- Search box -->
        <div class="search-box">
            <input type="search" name="" id="" placeholder="Search Here...">
        </div>
    </header>

    <!-- Page Header -->
    <section id="page-header">
        <h2>- Bigbrew -</h2>
        <p>"Big in taste. Bit in price."</p>
    </section>

    <section class="container" id="container">
        <!-- Our Team-->
        <div class="card">
        <div class="imgbox">
            <img src="img/our team.jpg" alt="">
        </div>
    <div class="team-text">
        <h2><b>Our Team</b></h2>
        <p><span>We are proud to have assembled a team of dedicated professionals driven by a shared love for coffee and a passion for providing exceptional service. Our skilled baristas are the heart of Big Brew. Their dedication to the craft of coffee brewing guarantees a remarkable coffee experience for every customer. 
        Along with our friendly and polite staff that is always ready to assist you with any inquiries and concerns.</span></p>
    </div>
    </div>

    <!-- Coffee -->
    <div class="card">
    <div class="imgbox">
        <img src="img/our coffee.jpg" alt="">
    </div>
        <div class="coffee-text">
            <h2><b>Our coffee</b></h2>
            <p><span>Our coffee is crafted from premium beans sourced from the finest plantations, embodying exceptional quality and flavor. From the rich aroma to the exquisite taste, each sip delights the senses. With our skilled baristas' expertise and artistry, every cup is meticulously created, ensuring a perfect blend of flavors and aromas.</span></p>
        </div>
    </div>

    <!-- Customer Service-->
    <div class="card" >
    <div class="imgbox">
        <img src="img/customer service.jpg" alt="">
    </div>
        <div class="customer_service-text">
            <h2><b>Customer Service</b></h2>
            <p><span>We believe that exceptional customer service is just as important as the quality of our coffee. Please do not hesitate to get in touch with us if you have any questions, concerns, suggestions, or recommendations through various channels, including our contact information provided at the bottom of this page, social media, and by visiting our physical store. We are eager to assist you and provide the best support possible.</span></p>
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