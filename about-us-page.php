<?php

@include 'connection.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
    <title>About us</title>
    <link rel="stylesheet" href="projekti.css">
</head>

<body>
    <nav class="sticky-navbar web-nav container">
        <span>
            <img src="./assets/images/logo.png" alt="Logo" />
        </span>
        <ul class="header-navbar__list">
            <a href="home-page.php">Home</a>
            <a href="products-page.php">Products</a>
            <a href="about-us-page.php">About Us</a>
            <a href="contact-page.php">Contact</a>
        </ul>

        <a href="sign-in-page.php" class="header-navbar__btn">Sign in</a>
    </nav>

    <nav
    style="background-color: #656463"
    class="header-navbar mobile-nav container"
  >
    <span>
      <img src="./assets/images/logo.png" alt="Logo" />
    </span>

    <i
      style="font-size: 30px; color: #fff; cursor: pointer"
      class="uil uil-bars"
    ></i>
  </nav>

  <nav class="responsive-nav" id="responsiveNav">
    <i class="uil close-icon uil-times"></i>
    <ul class="responsive-nav__list">
        <a href="home-page.php">Home</a>
      <a href="products-page.php">Products</a>
      <a href="about-us-page.php">About Us</a>
      <a href="contact-page.php">Contact</a>
    </ul>

    <a href="sign-in-page.php" class="responsive-nav__btn">Sign in</a>
  </nav>


    <div class="about-us-container">
        <div class="about-us-content">
            <h1>Who are we</h1>
            <p>Welcome to <span style="color: #f79489;">Shady Rhymes</span>, where we redefine the art of furnishing your living spaces with style and comfort. 
                At <span style="color: #f79489;">Shady Rhymes</span>, we understand that your home is a reflection of your unique personality and lifestyle.
                 As a premier furniture e-commerce destination, we take pride in curating a diverse collection of high-quality, 
                 stylish, and functional pieces that cater to every taste and preference. Whether you're seeking contemporary chic, 
                 timeless classics, or innovative designs, <span style="color: #f79489;">Shady Rhymes</span> is your one-stop destination for all things furniture.
                  Our commitment to craftsmanship, durability, and affordability ensures that you not only bring home furniture
                   but also create a haven that resonates with your individuality. With a seamless online shopping experience, 
                   expert customer service, and a passion for helping you elevate your living spaces, <span style="color: #f79489;">Shady Rhymes</span> is more than 
                   just a furniture store; we're your partner in crafting a home that harmonizes with your life. Welcome to a 
                   world of style, comfort, and endless possibilities at <span style="color: #f79489;">Shady Rhymes</span>.</p>
        </div>
        <div class="about-us-content">
            <h1>Our quality</h1>
            <p>At <span style="color: #f79489;">Shady Rhymes</span>, we pride ourselves on a steadfast commitment to uncompromising quality. 
                We believe that the essence of a truly remarkable home lies in the durability, functionality,
                 and aesthetic appeal of its furnishings. Our stringent quality assurance processes ensure that 
                 each piece in our collection meets the highest standards of craftsmanship and longevity. From the selection 
                 of premium materials to the precision of manufacturing, we leave no stone unturned in delivering furniture 
                 that not only meets but exceeds expectations. We collaborate with skilled artisans and renowned manufacturers 
                 who share our dedication to excellence, resulting in furniture that stands the test of time. At <span style="color: #f79489;">Shady Rhymes</span>,
                  quality is not just a benchmark; it's a promise we uphold with pride, allowing you to invest in furnishings 
                  that elevate your spaces with enduring elegance and functionality. Your satisfaction is our ultimate measure
                   of success, and we are committed to consistently delivering excellence in every piece we offer.</p>
        </div>
        <div class="about-us-content">
            <h1>What we do</h1>
            <p>At <span style="color: #f79489;">Shady Rhymes</span>, we pride ourselves on a steadfast commitment to uncompromising quality. We believe that the 
                essence of a truly remarkable home lies in the durability, functionality, and aesthetic appeal of its 
                furnishings. Our stringent quality assurance processes ensure that each piece in our collection meets
                 the highest standards of craftsmanship and longevity. From the selection of premium materials to the 
                 precision of manufacturing, we leave no stone unturned in delivering furniture that not only meets but 
                 exceeds expectations. We collaborate with skilled artisans and renowned manufacturers who share our dedication 
                 to excellence, resulting in furniture that stands the test of time. At <span style="color: #f79489;">Shady Rhymes</span>, quality is not just 
                 a benchmark; it's a promise we uphold with pride, allowing you to invest in furnishings that elevate your
                  spaces with enduring elegance and functionality. Your satisfaction is our ultimate measure of success, 
                  and we are committed to consistently delivering excellence in every piece we offer.</p>
        </div>
    </div>

    <footer class="footer">
        <div class="footer-content">
            <div class="footer-content-item">
                <span><img src="./assets/images/logo.png" alt="logo"></span>
            </div>
            <div class="footer-content-item">
                <h3>Features</h3>
                <ul class="footer-content-item-list">
                    <li>Our Features</li>
                    <li>Pricing</li>
                    <li>Affiliate Program</li>
                    <li>Press Kit</li>
                </ul>
            </div>
            <div class="footer-content-item">
                <h3>Support</h3>
                <ul class="footer-content-item-list">
                    <li>Account</li>
                    <li>Help</li>
                    <li>Contact Us</li>
                </ul>
            </div>
            <div class="footer-content-item">
                <h3>Legal</h3>
                <ul class="footer-content-item-list">
                    <li>Privacy Policy</li>
                    <li>Terms of Use</li>
                </ul>
            </div>
            <div class="footer-content-item">
                <h3>Social Media</h3>
                <ul class="footer-content-item-list">
                    <li>Twitter</li>
                    <li>Product Hunt</li>
                    <li>Instagram</li>
                    <li>Github</li>
                </ul>
            </div>
        </div>
        <p class="footer-sublink">Copyright 2021 ©shady rhymes</p>
    </footer>
</body>

<script src="projekti.js"></script>

</html>
