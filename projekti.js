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
    window.location.href = "home-page.html";
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


