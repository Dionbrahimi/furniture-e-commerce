function validateForm() {
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var errorMessage = document.getElementById('error-message');

    var emailValid = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailValid.test(email)) {
        errorMessage.innerHTML = 'Please enter a valid email address.';
        return false;
    }

    if (password.length < 8 || !/[0-9]/.test(password)) {
        errorMessage.innerHTML = 'Password must be at least 8 characters long and contain at least one number.';
        return false;
    }

    window.location.href = 'home-page.html';
    return false;
  }