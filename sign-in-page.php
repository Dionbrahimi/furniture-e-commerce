<?php

@include 'connection.php';

session_start();

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);

   $select = " SELECT * FROM user WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'Admin'){
         header('location:home-page.php');

      }else if($row['user_type'] == 'User'){
         header('location:home-page.php');
      }

   }else{
      $error[] = 'incorrect email or password!';
   }

};
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
    <form class="form-content" method="POST" onclick="validateForm();">
        <h1>Welcome to Shady Rhymes!</h1>
        <p style="padding-bottom: 0.5rem">
          Sign in by entering information below
        </p>
        <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
        <input id="email" name="email" type="email" placeholder="Email" />
        <input id="password" type="password" name="password" placeholder="Password" />
        <button class="form-btn" name="submit" >Log in</button>
        <div id="error-message" style="color: #d00;"></div>
        <p class="form-sign-up-section">
          Dont have an account?
          <a style="text-decoration: none; color: #f79489" href="sign-up-page.php">Sign up</a>
        </p>
    </form>
    </div>

  </body>
  <script src="projekti.js"></script>
</html>
