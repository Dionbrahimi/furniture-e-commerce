<?php
  // function testGet(){
  //   if(isset($_POST['Log in'])){
  //       $perdoruesi =$_POST['user'];
  //       $fjalkalimi =$_POST['psw'];
  //       echo 'Perdoruesi: ', $perdoruesi,
  //       '<br> Fjalkalimi: ', $fjalkalimi;
  //     exit();
  //   } else{
  //       echo 'Ju duhet te plotsoni fushat !';
  //   }
  // }
  function testGet(){
    $error_message = "Ju lutem plotsoni te dhenat !";

    if(isset($_POST['submit'])){
        $perdoruesi = $_POST['user'];
        $fjalkalimi = $_POST['psw'];

        if (empty($perdoruesi) || empty($fjalkalimi)) {
            $error_message = "Ju lutem plotësoni të gjitha fushat!";
        } elseif (!filter_var($perdoruesi, FILTER_VALIDATE_EMAIL)) {
            $error_message = "Ju lutem jepni një adresë email-i valide.";
        } elseif (strlen($fjalkalimi) < 8 || !preg_match("/[0-9]/", $fjalkalimi)) {
            $error_message = "Fjalëkalimi duhet të jetë të paktën 8 karaktere dhe të përmbajë të paktën një numër.";
        } else {
            echo 'Perdoruesi: ', $perdoruesi, '<br> Fjalkalimi: ', $fjalkalimi;
            exit();
        }
    }
    if (!empty($error_message)) {
        echo $error_message;
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
    <form class="form-content" action="home-page.php" method="POST" onsubmit="return validateForm()">
        <h1>Welcome to Shady Rhymes!</h1>
        <p style="padding-bottom: 0.5rem">
          Sign in by entering information below
        </p>
        <input id="email" type="email" placeholder="Email" />
        <input id="password" type="password" placeholder="Password" />
        <button class="form-btn" onclick="return validateForm()">Log in</button>
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
