<?php

@include 'connection.php';

if (isset($_POST['submit-btn'])) {

    $fname = mysqli_real_escape_string($conn, $_POST['firstName']);
    $lname = mysqli_real_escape_string($conn, $_POST['lastName']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phoneNumber']);
    $desc = mysqli_real_escape_string($conn, $_POST['description']);


    $insert = "INSERT INTO contact(firstName, lastName, email, phoneNumber, description) VALUES ('$fname', '$lname', '$email', '$phone', '$desc')";
    mysqli_query($conn, $insert);
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v4.0.8/css/line.css"
    />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <title>Contact us</title>
    <link rel="stylesheet" href="projekti.css" />
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
        <a>Contact</a>
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

    <div class="about-us-container" >
      <form method="POST" style="max-width: 800px; margin: auto" class="about-us-content">
        <h1>Reason for contact</h1>
        <p>
          We would love to hear from you, please use the form below to get in
          touch with us!
        </p>

        <div style="margin-top: 1rem" class="contact-input-container">
          <input type="text" placeholder="First name" name="firstName" id="contactFirstName"/>

          <input type="text" placeholder="Last name" name="lastName"  id="contactLastName"/>
        </div>
        <div style="margin-top: 1rem" class="contact-input-container">
          <input type="email" placeholder="Email" name="email"  id="contactEmail" />

          <input type="tel" placeholder="Phone Number" name="phoneNumber"  id="phoneNumber"/>
        </div>

        <textarea
          class="contact-textarea"
          name="description"
          cols="30"
          rows="7"
          placeholder="Description"
          id="description"
        ></textarea>
        <div id="error-message" style="color: #d00;"></div>
        <div id="succes-message" style="color: rgb(1, 204, 1);"></div>
        <button class="contact-btn" name="submit-btn">Send message</button>
      </form>
    </div>

    <footer class="footer">
      <div class="footer-content">
        <div class="footer-content-item">
          <span><img src="./assets/images/logo.png" alt="logo" /></span>
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
