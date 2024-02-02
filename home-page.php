<?php

@include 'connection.php';

session_start();

if (!isset($_SESSION['start_time'])) {
  $_SESSION['start_time'] = time(); 
}

if (time() - $_SESSION['start_time'] > 3600) { 
  session_regenerate_id(true);
  $_SESSION['start_time'] = time(); 
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet" />

    <!-- OWL CAROUSEL LINKS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css"> 

  <title>Furniture Website</title>
  <link rel="stylesheet" href="projekti.css" />
</head>

<body>
  <header class="header">
    <div class="header-bg">
      <nav class="header-navbar web-nav container">
        <span>
          <img src="./assets/images/logo.png" alt="Logo" />
        </span>
        <ul class="header-navbar__list">
           <a href="home-page.php">Home</a>
          <a href="products-page.php">Products</a>
          <a href="about-us-page.php">About Us</a>
          <a href="contact-page.php">Contact</a>
          <a href="admin-page.php">Dashboard</a>
          <?php
            if (isset($_SESSION['user_type']) && $_SESSION['user_type'] === 'Admin') {  
                echo '<a href="admin-page.php">Dashboard</a>';
            }
          ?>
        </ul>

        <a href="sign-in-page.php" class="header-navbar__btn">Sign in</a>
      </nav>

      <nav class="header-navbar mobile-nav container">
        <span>
          <img src="./assets/images/logo.png" alt="Logo" />
        </span>
       
        <i style="font-size: 30px; color: #fff; cursor: pointer;" class="uil uil-bars"></i>
      </nav>


      <nav class="responsive-nav"  id="responsiveNav">
        <i class="uil close-icon uil-times"></i>
        <ul class="responsive-nav__list">
           <a href="home-page.php">Home</a>
          <a href="products-page.php">Products</a>
          <a href="about-us-page.php">About Us</a>
          <a href="contact-page.php">Contact</a>
          <a href="admin-page.php">Dashboard</a>
        </ul>

        <a href="sign-in-page.php" class="responsive-nav__btn">Sign in</a>
      </nav>

      <div class="header-content">
        <h1>Make Your Interior More Minimaistic & Modern</h1>
        <p>Bringing interiors to life, understanding the person or people living in a home is far greater need in
          design.</p>
        <Input type="search" placeholder="Search"></Input>
      </div>
    </div>
  </header>


  <section style="margin-top: 80px;">


  <div class="owl-carousel owl-theme">
    <div style="width: 400px; margin: auto" class="item">          
      <img src="./assets/images/header-bg.png" alt="Logo" />
</div>
    <div style="width: 400px; margin: auto" class="item">
    <img src="./assets/images/visualize-ideas1.png" alt="visualize-ideas">
    </div>
    <div style="width: 400px; margin: auto" class="item">
    <img src="./assets/images/visualize-ideas3.png" alt="visualize-ideas">
    </div>
  
</div>

</section>

  <main>
    <section class="why-choosing-us container">
      <h2>Why Choosing Us</h2>
      <div class="why-choosing-us-content">
        <div class="why-choosing-us-contentitem">
          <span><img src="./assets/images/why-choose-us-icon1.png" alt=""></span>
          <h4>Professionalism</h4>
          <p>We deliver the final work with great professional way.</p>
        </div>
        <div class="why-choosing-us-contentitem">
          <span><img src="./assets/images/why-choose-us-icon2.png" alt=""></span>
          <h4>Smooth workflow</h4>
          <p>We provide the most easy smoth workflow of interior design.</p>
        </div>
        <div class="why-choosing-us-contentitem">
          <span><img src="./assets/images/why-choose-us-icon3.png" alt=""></span>
          <h4>Trusted Platform</h4>
          <p>People trust us since we openend the company</p>
        </div>
        <div class="why-choosing-us-contentitem">
          <span><img src="./assets/images/why-choose-us-icon4.png" alt=""></span>
          <h4>Qualified employee</h4>
          <p>Our employees are the best of the field from the city</p>
        </div>

      </div>
    </section>
  </main>

  <!-- Visualize ideas -->

  <div class="visualize-ideas1">
    <div class="visualize-ideas-content1 item">
      <h2>Visualize your ideas with us</h2>
      <p>We are ready to help you build and also realize the room design that you dream of,
        with our experts and also the best category recommendations from us</p>
      <p>Modern</p>
      <p>Modern design is a term in the design world that refers to a house with a clean design, simple color choices,
        the use of materials including metal, glass, and steel, and is usually accompanied by clean lines.
      </p>
      <p>Contemporary</p>
      <p>Minimalis</p>
      <p>Industrial</p>
    </div>
    <div class="visualize-ideas-content1">
      <span><img src="./assets/images/visualize-ideas1.png" alt="visualize-ideas"></span>
    </div>
  </div>
  <div class="visualize-ideas2">
    <div class="visualize-ideas-content2 item2">
      <span><img src="./assets/images/visualize-ideas3.png" alt="visualize-ideas"></span>
    </div>
    <div class="visualize-ideas-content2 item2">
      <h2>Make your room feel homey</h2>
      <p>We help people not only to make the room at home better, but we help people to feel a more homey and
        comfortable room,
        you don't have to worry about the result because of these interiors are made by people who are professionals in
        their
        dields with an elegant and lucuriois style and with premium quality materials</p>
      <p>Contact us if you are interested in working with us</p>
    </div>
  </div>

  <!-- Our services -->

  <section class="our-services">
    <h2>What they say about our services</h2>
    <div class="our-services-contains">
      <div class="our-services-contains-item">
        <h4>Best planning service</h4>
        <p>I had fantastic experience at shady rhymes with pax planner,
          shady rhymes was so helpful and friendly and went above and beyond to help me
          configure my perfect walk in wardobe room.</p>
        <div class="our-services-contains-item-worker">
          <div>
            <span><img src="./assets/images/worker1.png" alt=""></span>
          </div>
          <div class="our-services-names">
            <h5>John doe</h5>
            <span>Project manager of cupalo</span>
          </div>
        </div>
      </div>
      <div class="our-services-contains-item">
        <h4>Flexible and reliable</h4>
        <p>Terrific work from beginning to end can work any angle from minimal help to complete
          project handling professional without a doubt! Love!</p><br>
        <div class="our-services-contains-item-worker">
          <div>
            <span><img src="./assets/images/worker2.png" alt=""></span>
          </div>
          <div class="our-services-names">
            <h5>Woods Moniq</h5>
            <span>Freelancer</span>
          </div>
        </div>
      </div>
      <div class="our-services-contains-item">
        <h4>Solution innovative</h4>
        <p>"I loved working with Darla shady rhymes for about 2 years and highly recommend anyone
          looking for an interior designer agency who brings creativity but designs something
          that fits YOU and your style.</p>
        <div class="our-services-contains-item-worker">
          <div>
            <span><img src="./assets/images/worker3.png" alt=""></span>
          </div>
          <div class="our-services-names">
            <h5>Denis Rara</h5>
            <span>Architect at BPPLU</span>
          </div>
        </div>
      </div>
    </div>
  </section>

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
          <li>Terms of  Use</li>
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

    <!-- OWL CAROUSEL SCRIPTS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="projekti.js"></script>

<script>
  $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})
</script>

</html>
