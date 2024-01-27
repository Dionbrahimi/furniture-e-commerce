<?php

@include 'connection.php';

  if (isset($_POST['submit_btn'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $select_user = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email'") or die('query failed');

    if (mysqli_num_rows($select_user) > 0) {
      $user = mysqli_fetch_assoc($select_user);

      // Verify the password
      if (password_verify($password, $user['password'])) {
        // Password is correct, redirect to the home page
        header('Location: home-page.php');
        exit();
      } else {
        $message[] = 'Incorrect password';
      }
    } else {
      $message[] = 'User does not exist';
    }
  }
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />

    <title>Sign in</title>
    <link rel="stylesheet" href="projekti.css" />
  </head>
  <body>
    <div class="form-container" >
    <form class="form-content" action="home-page.php" method="POST">
        <h1>Welcome to Shady Rhymes!</h1>
        <p style="padding-bottom: 0.5rem">
          Sign in by entering information below
        </p>
        <input id="email" name="email" type="email" placeholder="Email" />
        <input id="password" type="password" name="password" placeholder="Password" />
        <button class="form-btn" name="submit_btn" onclick="return validateForm()">Log in</button>
        <div id="error-message" style="color: #d00;"></div>
        <p class="form-sign-up-section">
          Dont have an account?
          <a style="text-decoration: none; color: #f79489" href="sign-up-page.php">Sign up</a>
        </p>
      </form>
    </div>
    <!-- <script>
      function validateForm() {
  let email = document.getElementById("email").value;
  let password = document.getElementById("password").value;
  let errorMessage = document.getElementById("error-message");

  let emailValid = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

  if (!emailValid.test(email)) {
    errorMessage.innerHTML = "Please enter a valid email address.";
    return false;
  } else if (password.length < 8 || !/[0-9]/.test(password)) {
    errorMessage.innerHTML =
      "Password must be at least 8 characters long and contain at least one number.";
    return false;
  } else {
    window.location.href = "home-page.php";
    return false;
  }
}
    </script> -->
  </body>
</html>
