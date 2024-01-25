<?php
session_start();
include 'connection.php';

if (isset($_POST['submit-btn'])) {
    $filter_name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $name = mysqli_real_escape_string($conn, $filter_name);

    $filter_sname = filter_var($_POST['sname'], FILTER_SANITIZE_STRING);
    $sname = mysqli_real_escape_string($conn, $filter_sname);

    $filter_email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
    $email = mysqli_real_escape_string($conn, $filter_email);

    $filter_password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
    $password = mysqli_real_escape_string($conn, $filter_password);

    $filter_cpassword = filter_var($_POST['cpassword'], FILTER_SANITIZE_STRING);
    $cpassword = mysqli_real_escape_string($conn, $filter_cpassword);

    $select_user = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' ") or die('query failed');

    if (mysqli_num_rows($select_user) > 0) {
        $message[] = 'User already exists';
    } else {
        if ($password != $cpassword) {
            $message[] = 'Passwords do not match';
        } else {
            mysqli_query($conn, "INSERT INTO `users` (`name`,`sname`, `email`, `password`,`cpassword`) VALUES ('$name','$sname', '$email', '$password','$cpassword') ") or die('query failed');
            $message[] = 'Registered successfully';

            $_SESSION['user_email'] = $email;
            
            header('location: sign-in-page.php');
        }
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

    <title>Sign up</title>
    <link rel="stylesheet" href="projekti.css" />
  </head>
  <body>
    <div class="form-container">
    <?php
      if (isset($message)) {
        foreach ($message as $msg) {
          echo '
            <div class="message">
            <span>' . $msg . '</span>
            </div>';
        }
      }
    ?>


<form class="form-content" method="POST" >

        <h1>Sign up</h1>
        <p style="padding-bottom: 0.5rem">
          Please fill in this form to create an account!
        </p>
        <input type="text" name="name" placeholder="First name" id="firstName" />
        <input type="text" name="sname" placeholder="Last name" id="lastName"/>
        <input type="email" name="email" placeholder="Email" id="signUpEmail"/>
        <input type="password" name="password" placeholder="Password" id="signUpPassword"/>
        <input type="password" name="cpassword" placeholder="Confirm password" id="confirmPassword"/>
        <button class="form-btn" name="submit-btn" onclick="return validateSignUpForm()">Sign up</button>
        <div id="error-message" style="color: #d00;"></div>
        <a
          style="
            text-decoration: none;
            color: #f79489;
            text-align: center;
            font-size: 14px;
          "
          href="sign-in-page.php"
          >< Back to login</a
        >
      </form>
    </div>
  </body>
  <script src="projekti.js"></script>
</html>
