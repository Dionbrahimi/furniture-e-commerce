<?php

@include 'connection.php';

if (isset($_POST['submit-btn'])) {

    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);    
    $user_type = $_POST['user_type'];

    $select = "SELECT * FROM `user` WHERE email = '$email' && password = '$password'";

    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {
      $error[] = 'User already exists';
    } else {
      if ($cpassword != $password) {
          $error[] = 'Passwords do not match';
      } else {
          $insert = "INSERT INTO user(fname, lname, email, password, user_type) VALUES ('$fname', '$lname', '$email', '$password', '$user_type')";
          mysqli_query($conn, $insert);

          header('location: sign_in.php');
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
      <form class="form-content" method="POST" action="">

        <h1>Sign up</h1>
        <p style="padding-bottom: 0.5rem">
          Please fill in this form to create an account!
        </p>

        <?php
          if (isset($error)) {
            foreach($error as $error){
              echo '<span class="error_msg">'.$error.'</span>';
            };
          };
        
        ?>

        <input type="text" name="fname" placeholder="First name" id="firstName" />
        <input type="text" name="lname" placeholder="Last name" id="lastName"/>
        <input type="email" name="email" placeholder="Email" id="signUpEmail"/>
        <input type="password" name="password" placeholder="Password" id="signUpPassword"/>
        <input type="password" name="cpassword" placeholder="Confirm password" id="confirmPassword"/>
        <select name="user_type" style="width: 100%; font-size: 0.897rem; line-height: 1.45;color: #6e6b7b;
                                        padding: 0.371rem 11px; background-color: #fff;margin-bottom: 10px;
                                        border: 1px solid #d8d6de; border-radius: 8px; outline: none;">
          <option value="User">user</option>
          <option value="Admin">admin</option>
        </select>
        <button class="form-btn" name="submit-btn" >Sign up</button>
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
  <!-- <script src="projekti.js"></script> -->
</html>
