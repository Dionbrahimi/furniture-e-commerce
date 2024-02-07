
// Sign In vaalidate
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
    // window.location.href = "home-page.php";
    // return false;
  }
}


// Sign Up Validate
function validateSignUpForm() {
  let firstName = document.getElementById("firstName").value;
  let lastName = document.getElementById("lastName").value;
  let email = document.getElementById("signUpEmail").value;
  let signUpPassword = document.getElementById("signUpPassword").value;
  let confirmPassword = document.getElementById("confirmPassword").value;
  let errorMessage = document.getElementById("error-message");


  let emailValid = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (firstName === '') {
    errorMessage.innerHTML = "First name cannot be empty!";
    return false;
  } else if (lastName === '') {
    errorMessage.innerHTML = "Last name cannot be empty!";
    return false;
  } else if (!emailValid.test(email)) {
    errorMessage.innerHTML = "Please enter a valid email address!";
    return false;
  } else if (signUpPassword.length < 8 || !/[0-9]/.test(signUpPassword)) {
    errorMessage.innerHTML =
      "Password must be at least 8 characters long and contain at least one number!";
    return false;
  } else if (confirmPassword !== signUpPassword) {
    errorMessage.innerHTML =
      "Password do not match!";
    return false;
  } else {
    // window.location.href = "sign-in-page.php";
    // return false;
  }
}

// Contact Us Validate
function validateContactUsForm() {
let contactFirstName = document.getElementById("contactFirstName").value;
let contactLastName = document.getElementById("contactLastName").value;
let contactEmail = document.getElementById("contactEmail").value;
let phoneNumber = document.getElementById("phoneNumber").value;
let description = document.getElementById("description").value;
let errorMessage = document.getElementById("error-message");
let succesfullyMessage = document.getElementById("succes-message");


let emailValid = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
if (contactFirstName === '') {
  errorMessage.innerHTML = "First name cannot be empty!";
  return false;
} else if (contactLastName === '') {
  errorMessage.innerHTML = "Last name cannot be empty!";
  return false;
} else if (!emailValid.test(contactEmail)) {
  errorMessage.innerHTML = "Please enter a valid email address!";
  return false;
} else if (phoneNumber === '') {
  errorMessage.innerHTML =
    "Please enter your phone number!";
  return false;
} else if (description === '') {
  errorMessage.innerHTML =
    "Please you need to write a description !";
  return false;
} else {
  errorMessage.innerHTML="";
  document.getElementById("contactFirstName").value = "";
    document.getElementById("contactLastName").value = "";
    document.getElementById("contactEmail").value = "";
    document.getElementById("phoneNumber").value = "";
    document.getElementById("description").value = "";
  succesfullyMessage.innerHTML = "Message succesfully sent!";
  setTimeout(function () {
    succesfullyMessage.innerHTML = "";
  }, 3000);
  return false;
}
}

const hamburgerIcon = document.querySelector(".uil-bars");
const responsiveNav = document.getElementById("responsiveNav");

const closeIcon = document.querySelector('.close-icon');

const navbarLinks = document.querySelectorAll('.responsive-nav__list a');


hamburgerIcon.addEventListener("click", () => {
  if (responsiveNav.style.display === "block") {
    responsiveNav.style.display = "none";
  } else {
    responsiveNav.style.display = "block";
  }
});

closeIcon.addEventListener('click', () => {
  responsiveNav.style.display = 'none';
});

navbarLinks.forEach(link => {
  link.addEventListener('click', () => {
    responsiveNav.style.display = 'none';
  });
});


