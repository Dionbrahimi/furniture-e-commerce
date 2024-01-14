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
      <form class="form-content" action="#" onsubmit="return validateSignUpForm()" >
        <h1>Sign up</h1>
        <p style="padding-bottom: 0.5rem">
          Please fill in this form to create an account!
        </p>
        <input type="text" placeholder="First name" id="firstName" />
        <input type="text" placeholder="Last name" id="lastName"/>
        <input type="email" placeholder="Email" id="signUpEmail"/>
        <input type="password" placeholder="Password" id="signUpPassword"/>
        <input type="password" placeholder="Confirm password" id="confirmPassword"/>
        <button class="form-btn" onclick="return validateSignUpForm()">Sign up</button>
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
